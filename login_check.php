<?php
session_start();
include("includes/autoload.php");
$_dbop=new db_operation;
if(isset($_POST['uname'])&&isset($_POST['pass']))
{	
	$_fields = array(
		'email' => 	$_dbop->filter($_POST['uname']),
		'password' 	=> 	$_dbop->filter($_POST['pass'])				
	);
	$select = $_dbop->num_rows("users",$_fields);
	if($select)
	{
		$array=array($_POST['uname'],$_POST['pass']);
		$_SESSION['user']=$array;
		if(isset($_SESSION['user']))
		{
			echo $select;
		}

	}
}else{
	
}
?>