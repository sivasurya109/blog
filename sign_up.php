<script type="text/javascript">alert("hi");</script>
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
	if($select)
	{
		?>
		<script type="text/javascript">
			alert("Signup Successfull");
		</script>
		<?php
		header("location:login.php");
	}
	else
	{
		?>
		<script type="text/javascript">alert("Failed...!");</script>
		<?php

	}

}
else
{
	?>
	<script type="text/javascript">alert("Failed...!");</script>
	<?php
}
?>