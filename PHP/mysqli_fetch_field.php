<?php
	$con = mysqli_connect("localhost","root","","bscit");
	$sql = "select * from `bscit`";
	$res = mysqli_query($con,$sql);
	while($row = mysqli_fetch_field($res))
	{
		echo "Field name : " . $row->name . "<br>";
		echo "Table name : " . $row->table . "<br>";
		echo "Field length : " . $row->length . "<br>";
		echo "Field type : " . $row->type . "<br>";
		echo "<br>";
	}
	mysqli_close($con);
?>