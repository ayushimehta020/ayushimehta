<?php
include "config.php";
if (isset($_POST['txtunm'])) {
	$unm = $_POST['txtunm'];
	$pwd = $_POST['txtpwd'];
	$follower = "0";
	$stat = "Y";
	$select = "select * from `user_info` where `username`='$unm'";
	$res = mysqli_query($con, $select);
	$rows = mysqli_num_rows($res);
	if ($rows == 0) {
		$sql = "insert into `user_info`(`username`,`password`,`followers`,`status`) values('$unm','$pwd','$follower','$stat')";
		$res = mysqli_query($con, $sql);
		header("location:registeradd.php");
	} else {
?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Username Already Present!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php
	}
	session_start();
	$_SESSION['uid'] = $id;
}
mysqli_close($con);
?>

<script>
	function chkpwd() {
		var txtpwd = document.getElementById('txtpwd').value;
		var txtrpwd = document.getElementById('txtrpwd').value;
		var c = document.getElementById('txtrpwd');
		var btn = document.getElementById('btnsave');
		if (txtpwd != txtrpwd) {
			c.style.color = "red";
			btn.disabled = true;
		} else {
			c.style.color = "green";
			btn.disabled = false;
		}
	}
</script>

<div class="container border mt-1 p-5 bg-dark text-center">
	<img src="Assets\logo.png" height="100px">
	<h1 class="text-center text-light p-3">Registration Form</h1>
	<form action="register.php" method="POST">
		<input type="text" name="txtunm" class="form-control mt-2" placeholder="Enter Your Username" required>
		<input type="password" name="txtpwd" class="form-control mt-2" placeholder="Enter Your Password" id="txtpwd" required>
		<input type="password" name="txtrpwd" class="form-control mt-2" placeholder="Re-type Password" onkeyup="chkpwd()" id="txtrpwd" required>
		<input type="submit" id="btnsave" class="btn btn-primary w-100 mt-3" value="Register">
		<a href="login2.php" class="btn btn-success w-100 mt-2">Already a User? Click here to Login</a>
	</form>
</div>