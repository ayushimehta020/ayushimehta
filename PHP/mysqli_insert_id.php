<?php
	$con = mysqli_connect("localhost","root","","bscit");
	$sql = "insert into `bscit`(`firstName`) values('Ayushi')";
	$res = mysqli_query($con,$sql);
	$row = mysqli_insert_id($con);
	echo $row;
	mysqli_close($con);
