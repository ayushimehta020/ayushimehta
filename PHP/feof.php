<?php
	$myfile = fopen("webdictionery.txt","r");
	while(!feof($myfile))
	{
		echo fgets($myfile) . "<br>";
	}
	fclose($myfile);
?>