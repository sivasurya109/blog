<?php
include "connection.php";
class db_operation extends db_connection
{

	public function insert($table_name,$fields)
	{
		// $table_name for which table we insert
		// $fields for what are the fields we insert The fields may key value pair of associative array
		$sql="";
		$sql.="INSERT INTO `$table_name`";
		$sql.=" (".implode(",", array_keys($fields)).") VALUES ";	
		$sql.=" ('".implode("','",array_values($fields))."')";
		echo $sql;
		$query=mysqli_query($this->_con,$sql);		
		if($query)
		{
			return true;
		}
	}
	public function select($table,$where)
	{
		$sql="";
		$condition="";
		$i=1;
		foreach($where as $key => $value)
		{			
			$condition .= $key."='".$value."' AND ";
		}

		$condition=substr($condition,0,-5);		
		$sql .="SELECT * FROM ".$table." WHERE  ".$condition." LIMIT 1";		
		echo $sql;
		$query=mysqli_query($this->_con,$sql);
		$row=mysqli_fetch_array($query);
		return $row;
		
	}
	public function select_all($table)
	{
		$sql="SELECT * FROM ".$table;
		$array=array();
		$query=mysqli_query($this->_con,$sql);
		while($row=mysqli_fetch_assoc($query))
		{
			$array[]=$row;
		}
		return $array;
		
	}
	public function update($table,$fields,$where)
	{
		$sql="";
		$condition="";
		$ufields="";		
		foreach($fields as $key => $value)
		{
			$ufields .= $key."='".$value."', ";	
		}
		$ufields=substr($ufields,0,-2);		
		foreach($where as $key => $value)
		{
			$condition .= $key."='".$value."' AND ";	
		}
		$condition=substr($condition,0,-5);		
		$sql .="UPDATE ".$table." SET ".$ufields." WHERE ".$condition;
		/*echo $sql;*/
		if(mysqli_query($this->_con,$sql))
		{
			return true;
		}			
		
	}
	public function delete($table,$where)
	{
		$sql="";
		$condition="";		
		foreach($where as $key => $value)
		{
			$condition .= $key."='".$value."' AND ";
		}
		$condition=substr($condition,0,-5);
		$sql .="DELETE FROM ".$table." WHERE ".$condition;
		echo $sql;
		if(mysqli_query($this->_con,$sql))
		{
			return true;
		}
	}
	public function filter($var)
	{		
		return  mysqli_real_escape_string($this->_con,$var);
	}

}
?>