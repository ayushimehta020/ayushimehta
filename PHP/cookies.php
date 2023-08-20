<?php
	$class = "BSCIT";
	$sem = "2";
	setcookie($class, $sem, time() + (86400 * 30), "/");
	
	if(isset($_COOKIE['BSCIT']))
	{
		echo $_COOKIE['BSCIT'] . "<br>";
		echo $class;
	}
?>