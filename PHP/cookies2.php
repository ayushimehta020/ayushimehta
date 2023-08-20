<?php
	if(!isset($_COOKIE['logo']))
	{
		$img_path = "Server";
		setcookie("logo",$img_path, time() + (86400 * 30), "/");
		echo "Cookie Created";
	}
	else
	{
		if($_COOKIE['logo'] != "Server1")
		{
			$img_path = "Server1";
			setcookie("logo", $img_path, time() + (86400 * 30), "/");
			echo "Cookie Modified";
		}
		else
		{
			setcookie("logo", "", time() - (86400 * 30), "/");
			echo "Cookie Deleted";
		}
		echo $_COOKIE['logo'];
	}
?>