<?php
include("includes/autoload.php");
$_dbop=new db_operation;
if(isset($_POST['email'])&&isset($_POST['pass']))
{
	$_fields = array(
	'email' => 	$_dbop->filter($_POST['email']),
	'password' 	=> 	$_dbop->filter($_POST['pass'])				
	);
	$select=$_dbop->insert("users",$_fields);
	echo ( $select ) ? "1" : "0";
}else{}
?>