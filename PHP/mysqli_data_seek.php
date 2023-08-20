<?php
	$con = mysqli_connect("localhost","root","","bscit");
	$sql = "select * from `bscit`";
	$res = mysqli_query($con,$sql);
	mysqli_data_seek($res,19);
	$row = mysqli_fetch_row($res);
	echo $row[0];
	mysqli_close($con);
