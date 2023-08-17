<?php
	include "config.php";
	$id = $_GET['id'];
	$sql = "delete from `register` where `id`='$id'";
	if ($res = mysqli_query($con, $sql))
	{
		header("location:index.php");
	}
?>