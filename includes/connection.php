<?php
class db_connection
{
	public $_con;

	public function __construct()
	{
		$this->_con=mysqli_connect("localhost","root","","chat");	
		if(!$this->_con)
		{
			die("Error in Connect database"); 	
		}
		else
		{
			mysqli_set_charset($this->_con,"utf8");
		}
	}	
}
?>