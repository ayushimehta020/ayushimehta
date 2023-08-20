<?php
	$con = mysqli_connect("localhost","root","","bscit");
	$sql = "select * from `bscit`";
	$res = mysqli_query($con,$sql);
	$row = mysqli_num_rows($res);
	echo $row;
	mysqli_close($con);
