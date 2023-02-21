<?php
	include "config.php";
	$id = $_GET['id'];
	$sql = "delete from `student` where `id`='$id'";
	if($res = mysqli_query($con,$sql))
	{
		header("location:addstudent.php");
	}
?>