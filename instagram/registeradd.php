<?php
	include "config.php";
	if(isset($_POST['txtpnm']))
	{
		$pnm = $_POST['txtpnm'];
		$sql = "insert into `user_info`(`profile_name`) values('$pnm')";
		$res = mysqli_query($con,$sql);
	}
?>

<div class="container text-center p-5 mt-2 border rounded bg-dark">
	<form action="registeradd.php" method="POST">
		<img src="Assets\logo.png" height="100" alt="instagram logo" class="mt-2 mb-5">
		<input type="text" class="form-control" name="txtpnm" placeholder="Enter Profile Name" required>
		<input type="submit" value="Set Profile Name" class="btn btn-primary w-100 mt-3">
	</form>
</div>