<?php
	$con = mysqli_connect("localhost","root","","college1");
	$enr = $_POST['enr'];
	$sql = "select * from `student` where `enr`='$enr'";
	$res = mysqli_query($con,$sql);
	echo "<tr><th>Enr.</th><th>Name</th><th>City</th></tr>";
	while($row = mysqli_fetch_assoc($res))
	{
		echo "<tr><td>" . $row['enr'] . "</td><td>" . $row['sname'] . "</td><td>" . $row['city'] . "</td></tr>";
	}
?>