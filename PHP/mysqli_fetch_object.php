<?php
	$con = mysqli_connect("localhost","root","","bscit");
	$sql = "select * from `bscit`";
	$res = mysqli_query($con,$sql);
	while($obj = mysqli_fetch_object($res))
	{
		echo $obj->id . "<br>";
	}
	mysqli_close($con);
