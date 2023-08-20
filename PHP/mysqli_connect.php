<?php
	// error_reporting(0);
	$con = mysqli_connect("localhost","root","","BSCIT");
	if(mysqli_connect_errno())
	{
		echo "Unable to connect!";
		exit();
	}
	mysqli_close($con);
