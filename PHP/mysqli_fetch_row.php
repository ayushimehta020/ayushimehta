<?php
	$con = mysqli_connect("localhost","root","","bscit");
	$sql = "select * from `bscit`";
	$res = mysqli_query($con,$sql);
	while($row = mysqli_fetch_row($res))
	{
		echo $row[0] . "<br>";
	}
	mysqli_close($con);
