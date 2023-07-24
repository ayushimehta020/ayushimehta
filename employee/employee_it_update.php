<?php
	include "config.php";
	// Select the employees of IT department who have joined the company before 1st November, 2019
	$sql = "select * from `employee` where `department`='IT' and `joining_date` < '2019-11-01'";
	$res = mysqli_query($con, $sql);
	if (mysqli_num_rows($res) > 0) 
	{
	  while ($row = mysqli_fetch_assoc($res)) 
	  {
		$id = $row['id'];
		$sql = "update `employee` set `department`='IT Admin' where `id`='$id'";
		mysqli_query($con, $sql);
	  }
	}

	// Close the database connection
	mysqli_close($con);
?>
