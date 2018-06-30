<?php
include("includes/autoload.php");
$_dbop=new db_operation;
if(isset($_POST['uname'])&&isset($_POST['pass']))
{	
	$_fields = array(
		'email' => 	$_dbop->filter($_POST['uname']),
		'password' 	=> 	$_dbop->filter($_POST['pass'])				
	);
	$select = $_dbop->num_rows("users",$_fields);
	echo $select;
}else{}
?>