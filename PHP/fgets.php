<?php
	$myfile = fopen("webdictionery.txt","r");
	echo fgets($myfile);
	fclose($myfile);
?>