<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container mt-5 border rounded-1 p-5 bg-dark">
	<h1 class="text-center text-light">Login</h1>
	<form action="login.php" method="POST">
		<input type="text" placeholder="Enter Username" name="txtunm" class="form-control mt-5" required>
		<input type="password" placeholder="Enter Password" name="txtpwd" class="form-control mt-2" required>
		<input type="submit" value="Log In" class="btn btn-primary w-100 mt-3">
	</form>
</div>

<?php
	$con = mysqli_connect("localhost","root","","test1");
	if(isset($_POST['txtunm']))
	{
		$unm = $_POST['txtunm'];
		$pwd = $_POST['txtpwd'];
		$sql = "select * from `user` where `username`='$unm' and `password`='$pwd'";
		$res = mysqli_query($con, $sql);
		$count = mysqli_num_rows($res);
		if($count == 1)
		{
			session_start();
			$_SESSION['user'] = $unm;
			header("location:index.php");
		}
		else
		{
			echo "Invalid";
		}
	}
?>