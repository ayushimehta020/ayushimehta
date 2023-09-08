<?php
	include "config.php";
	if(isset($_POST['txtenr']))
	{
		$enr = $_POST['txtenr'];
		$name = $_POST['txtnm'];
		$email = $_POST['txtmail'];
		$pwd = $_POST['txtpwd'];
		$mob = $_POST['txtmob'];
		$course = $_POST['txtcourse'];
		$sql = "INSERT INTO `stud`(`enr`, `name`, `email`, `password`, `contact`, `course`) VALUES('$enr', '$name', '$email', '$pwd', '$mob', '$course')";
		$res = mysqli_query($con, $sql);
		if ($res)
		{
			?>
			<div class="container mt-2">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Success!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="container mt-2">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Not Inserted!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
			<?php
		}
	}
?>

<div class="container w-50 mt-4 border border-dark rounded-2 bg-dark p-4">
	<form action="index.php" method="POST">
		<img src="https://creazilla-store.fra1.digitaloceanspaces.com/icons/3244825/student-add-icon-sm.png" class="h-25 d-block mx-auto">
		<input type="text" placeholder="Enter enrollment number" name="txtenr" class="form-control mt-2" required>
		<input type="text" placeholder="Enter full name" name="txtnm" class="form-control mt-2" required>
		<input type="email" placeholder="Enter email" name="txtmail" class="form-control mt-2" required>
		<input type="password" placeholder="Enter password" name="txtpwd" class="form-control mt-2" required>
		<input type="text" placeholder="Enter contact number" name="txtmob" class="form-control mt-2" required>
		<select name="txtcourse" class="form-select mt-2" required>
			<option value="">-- SELECT COURSE --</option>
			<option value="BSCIT">BSCIT</option>
			<option value="BCA">BCA</option>
			<option value="BBA">BBA</option>
			<option value="BCom">BCom</option>
		</select>
		<div class="row">
			<div class="col-6">
				<input type="submit" value="Save" class="btn btn-primary w-100 mt-2">
			</div>
			<div class="col-6">
				<input type="reset" value="Clear" class="btn btn-danger w-100 mt-2">
			</div>
		</div>
		<a href="search-student.php" class="btn btn-warning w-100 mt-2">Search Student</a>
	</form>
</div>
