<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:login.php");
	}
	else
	{
		echo "<h1 class='ms-2'>Welcome : " . $_SESSION['user'] . "</h1>";
	}
?>

<a href="logout.php" class="btn btn-primary ms-2">Logout</a>