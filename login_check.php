<?php
include("includes/autoload.php");
$_dbop=new db_operation;
if(isset($_POST['uname'])&&isset($_POST['pass']))
{
	
	$_fields = array(
	'email' => 	$_dbop->filter($_POST['uname']),
	'password' 	=> 	$_dbop->filter($_POST['pass'])				
	);
	$select=$_dbop->select("users",$_fields);
	if($select)
	{
		header("location:index.php");
	}
	else
	{
		?>
		<script type="text/javascript">alert("Login Failed...!");</script>
		<?php

	}

}
else
{
	?>
	<script type="text/javascript">alert("Login Failed...!");</script>
	<?php
}
?>