<?php
	$myfile = fopen("webdictionery.txt","r");
	while(!feof($myfile))
	{
		echo fgetc($myfile);		
	}
	fclose($myfile);
?>