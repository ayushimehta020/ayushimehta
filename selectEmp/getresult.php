<?php
	$con = mysqli_connect("localhost", "root", "", "emp_data");
	$code = $_POST['code'];
	$sql = "select * from `emp` where `emp_code`='$code'";
	$res = mysqli_query($con,$sql);
	echo "<tr><th>Emp Code</th><th>Name</th><th>Email</th><th>Contact</th><th>Address</th><th>Joining Date</th><th>D.O.B.</th></tr>";
	while($row = mysqli_fetch_assoc($res))
	{
		echo "<tr><td>" . $row['emp_code'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['address'] . "</td><td>" . $row['join_date'] . "</td><td>" . $row['dob'] . "</td></tr>";
	}
?>