<?php
include "config.php";
if (isset($_POST['txtunm'])) {
	$unm = $_POST['txtunm'];
	$pwd = $_POST['txtpwd'];
	$sql = "select * from `user_info` where `username`='$unm' and `password`='$pwd'";
	$res = mysqli_query($con, $sql);
	$rows = mysqli_num_rows($res);
	if ($rows == 1) {
		$sql = "select * from `user_info`";
		$res = mysqli_query($con, $sql);
		$rows = mysqli_fetch_assoc($res);
		if ($rows['profile_name']) {
			header("loaction:home.php");
		} else {
			header("location:registeradd.php");
		}
	} else {
?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Invalid Username or Password!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php
	}
}
mysqli_close($con);
?>

<div class="container border rounded p-5 text-center bg-dark mt-2">
	<form action="login.php" method="POST">
		<img src="Assets\logo.png" alt="instagram logo" height="100" class="mb-2">
		<h1 class="text-light mb-4">Login</h1>
		<input type="text" name="txtunm" placeholder="Enter Username" class="form-control mt-2" required>
		<input type="password" name="txtpwd" placeholder="Enter Password" class="form-control mt-2" required>
		<input type="submit" value="Login" class="btn btn-primary w-100 mt-4">
		<a href="register.php" class="btn btn-success w-100 mt-2">New User? Click here to Register</a>
	</form>
</div>