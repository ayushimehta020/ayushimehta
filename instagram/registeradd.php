<?php
	include "config.php";
		if(isset($_POST['txtpnm']))
		{
			$pnm = $_POST['txtpnm'];
		}
	}
?>

<div class="container text-center border rounded mt-2 bg-dark p-5">
	<form action="registeradd.php" method="POST">
		<img src="Assets\logo.png" height="100" alt="instagram logo" class="mb-4">
		<input type="text" name="txtpnm" class="form-control mt-2" placeholder="Enter Profile Name" required>
		<input type="submit" class="btn btn-primary w-100 mt-3" value="Set Profile Name">
	</form>
</div>