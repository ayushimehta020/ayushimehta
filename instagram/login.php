<?php
	include "config.php";
	if(isset($_POST['txtunm']))
	{
		$unm = $_POST['txtunm'];
		$pwd = $_POST['txtpwd'];
		$sql = "select * from `user_info` where `username`='$unm' and `password`='$pwd'";
		if($res = mysqli_query($con,$sql))
		{	
			$rows = mysqli_num_rows($res);
			if($rows == 1)
			{
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Logged In Successfully!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
			}
			else
			{
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Invalid username or password!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
			}
		}
	}
?>

<div class="container text-center p-5 border rounded bg-dark">
	<form action="login.php" method="POST">
		<img src="Assets\logo.png" class="mb-2" height="100" alt="instagram logo">
		<h1 class="text-light mb-5">Login</h1>
		<input type="text" name="txtunm" class="form-control mt-3" placeholder="Enter Username" required>
		<input type="password" name="txtpwd" class="form-control mt-2" placeholder="Enter Password" required>
		<input type="submit" value="Login" class="btn btn-primary w-100 mt-4">
		<a href="register.php" class="btn btn-success w-100 mt-2">New User? Click here to Register</a>
	</form>
</div>