<?php
	include "config.php";
	if(isset($_POST['txtunm']))
	{
		$unm = $_POST['txtunm'];
		$pwd = $_POST['txtpwd'];
		$followers = "0";
		$status = "Y";
		$sql = "select * from `user_info` where `username`='$unm'";
		$res = mysqli_query($con,$sql);
		$rows = mysqli_num_rows($res);
		if($rows == 0)
		{
			$sql = "insert into `user_info`(`username`,`password`,`followers`,`status`) values('$unm','$pwd','$followers','$status')";
			$res = mysqli_query($con,$sql);
			header("location:registeradd.php");
		}
		else
		{
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username Already Exist!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
		}
	}
?>

<div class="container mt-2 border rounded bg-dark text-center p-5">
	<form action="register.php" method="POST">
		<img src="Assets\logo.png" height="100" alt="instagram logo" class="mt-2 bg-dark">
		<h1 class="text-light mt-3 mb-5">Registration Form</h1>
		<input type="text" class="form-control mt-3" name="txtunm" placeholder="Enter Username" required>
		<input type="password" class="form-control mt-3" name="txtpwd" placeholder="Enter Password" id="txtpwd" required>
		<input type="password" class="form-control mt-3" name="txtrpwd" placeholder="Re-type Password" id="txtrpwd" onkeyup="chkpwd()" required>
		<input type="submit" class="btn btn-primary w-100 mt-5" value="Register" id="btnsave">
		<a href="login.php" class="btn btn-success mt-2 w-100">Already a User? Click here to Login</a>
	</form>
</div>

<script>
	function chkpwd()
	{
		var pwd = document.getElementById('txtpwd').value;
		var rpwd = document.getElementById('txtrpwd').value;
		var c = document.getElementById('txtrpwd');
		var btn = document.getElementById('btnsave');
		if(pwd != rpwd)
		{
			c.style.color = "red";
			btn.disabled = true;
		}
		else
		{
			c.style.color = "green";
			btn.disabled = false;
		}
	}
</script>