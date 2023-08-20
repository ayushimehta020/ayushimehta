<?php
	$myfile = fopen("webdictionery.txt","r")
	or die("Unable to open file");
	echo fread($myfile,filesize("webdictionery.txt"));
	fclose($myfile);
?>