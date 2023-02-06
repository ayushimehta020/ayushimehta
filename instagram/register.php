<?php
	include "config.php";
	if(isset($_POST['txtunm']))
	{
		$unm = $_POST['txtunm'];
		$pwd = $_POST['txtpwd'];
		$profilenm = $_POST['profile-name'];
		$follower = $_POST['txtfollower'];
		$stat = $_POST['txtstatus'];
		$select = "select * from `user_info` where `username`='$unm'";
		$res = mysqli_query($con,$select);
		$rows = mysqli_num_rows($res);
		if($rows == 0)
		{
			$sql = "insert into `user_info`(`username`,`password`,`profilename`,`followers`,`status`) values('$unm','$pwd','$profilenm','$follower','$stat')";
			$res = mysqli_query($con,$sql);
			?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Registered Successfully!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
		}
		else
		{
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username Already Present!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
		}
	}
?>

<div class="container border mt-2 p-5 bg-dark">
	<h1 class="text-center text-primary">Registration Form</h1>
	<form action="register.php" method="POST">
		<label class="text-light h5 mt-2">Username</label>
		<input type="text" name="txtunm" class="form-control mt-2" placeholder="Enter Your Username" required>
		<label class="text-light h5 mt-2">Password</label>
		<input type="password" name="txtpwd" class="form-control mt-2" placeholder="Enter Your Password" required>
		<label class="text-light h5 mt-2">Profile Name</label>
		<input type="text" name="profile-name" class="form-control mt-2" placeholder="Enter Your Profile Name" required>
		<label class="text-light h5 mt-2">Followers</label>
		<input type="text" name="txtfollower" class="form-control mt-2" value="0">
		<label class="text-light h5 mt-2">Status</label>
		<input type="text" name="txtstatus" class="form-control mt-2" value="Active">
		<input type="submit" class="btn btn-primary w-100 mt-5" value="Submit">
	</form>
</div>