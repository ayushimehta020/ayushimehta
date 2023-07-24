<?php
	include "config.php";
	if(isset($_POST['txteno']))
	{
		$eno = $_POST['txteno'];
		$fname = $_POST['txtfname'];
		$lname = $_POST['txtlname'];
		$city = $_POST['txtcity'];
		$gender = $_POST['txtgender'];
		$mail = $_POST['txtmail'];
		$mob = $_POST['txtmob'];
		$checkbox1 = $_POST['techno'];
		$chk = "";
		foreach($checkbox1 as $chk1)
		{
			$chk .= $chk1 . ",";
		}
		$sql = "select * from `student` where `eno`='$eno'";
		$res = mysqli_query($con,$sql);
		if(mysqli_num_rows($res) == 0)
		{
			$sql = "insert into `student`(`eno`,`firstName`,`lastName`,`city`,`gender`,`email`,`contact`,`hobbies`) values('$eno','$fname','$lname','$city','$gender','$mail','$mob','$chk')";
			if($res = mysqli_query($con,$sql))
			{
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Inserted Successfully!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
			}
			else
			{
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Unable to insert!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
			}
		}
		else
		{
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Duplicate Entry!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
		}
	}
?>
<div class="container mt-2 border rounded-1 bg-dark p-4">
	<h1 class="text-light text-center mt-3">Student Details</h1>
	<form action="index.php" method="POST">
		<input type="number" class="form-control mt-4" placeholder="Enter Enrollment Number" name="txteno" required>
		<input type="text" class="form-control mt-2" placeholder="Enter First Name" name="txtfname" required>
		<input type="text" class="form-control mt-2" placeholder="Enter Last Name" name="txtlname" required>
		<select name="txtcity" class="form-select mt-2">
			<option>--Select Your City--</option>
			<option>Rajkot</option>
			<option>Junagadh</option>
			<option>Kolkata</option>
			<option>Ahmedabad</option>
			<option>Manali</option>
		</select>
		<input type="text" class="form-control mt-2" placeholder="Enter Gender" name="txtgender" required>
		<input type="email" class="form-control mt-2" placeholder="Enter Email" name="txtmail" required>
		<input type="number" class="form-control mt-2" placeholder="Enter Mobile Number" name="txtmob" required>
		<h6 class="text-light mt-2">Select Your Hobbies : </h6>
		<div class="form-check text-light">
			<input type="checkbox" name="techno[]" value="Drawing" class="mt-2">&nbsp;Drawing
		</div>
		<div class="form-check text-light">
			<input type="checkbox" name="techno[]" value="Singing" class="mt-2">&nbsp;Singing
		</div>
		<div class="form-check text-light">
			<input type="checkbox" name="techno[]" value="Dance" class="mt-2">&nbsp;Dance
		</div>
		<div class="form-check text-light">
			<input type="checkbox" name="techno[]" value="Reading" class="mt-2">&nbsp;Reading
		</div>
		<div class="form-check text-light">
			<input type="checkbox" name="techno[]" value="Writing" class="mt-2">&nbsp;Writing
		</div>
		<input type="submit" value="Add Student" class="btn btn-primary w-100 mt-4">
		<a href="dispstudent.php" class="btn btn-info w-100 mt-2">Show Student</a>
	</form>
</div>