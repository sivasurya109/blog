<?php
	function __autoload($classname)
	{
		$class=explode("_",$classname);			
		$path=end($class);		
		include "includes/".$path.".php";

	}
?>