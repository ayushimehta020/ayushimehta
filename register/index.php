<?php
	include "config.php";
	if (isset($_POST['txtnm']))
	{
		$name = $_POST['txtnm'];
		$email = $_POST['txtmail'];
		$mob = $_POST['txtmob'];
		$course = $_POST['txtcourse'];
		$city = $_POST['txtcity'];
		$checkbox1 = $_POST['hobbies'];
		$chk = "";
		$sql = "select * from `register` where `name`='$name'";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res) == 0)
		{
			foreach($checkbox1 as $chk1)
			{
				$chk .= $chk1 . ', ';
			}
			$sql = "insert into `register`(`name`,`email`,`contact`,`course`,`city`, `hobbies`) values('$name', '$email', '$mob', '$course', '$city', '$chk')";
			$res = mysqli_query($con, $sql);
		}
	}
?>

<style>
	input {
		outline: none;
	}
</style>

<div class="container w-50 mt-2 border border-dark bg-dark rounded-2 p-3">
	<img src="register.png" class="bg-dark d-block mx-auto mt-3" style="height: 100px;">
	<form action="index.php" method="POST">
		<div class="input-group mb-3 mt-2">
			<span class="input-group-text" id="basic-addon1">Name</span>
			<input type="text" placeholder="Enter name" name="txtnm" class="form-control" required>
		</div>
		<div class="input-group mb-3 mt-2">
			<span class="input-group-text" id="basic-addon1">Email</span>
			<input type="email" placeholder="Enter email" name="txtmail" class="form-control" required>
		</div>
		<div class="input-group mb-3 mt-2">
			<span class="input-group-text" id="basic-addon1">Contact</span>
			<input type="number" placeholder="Enter contact" name="txtmob" class="form-control" required>
		</div>
		<div class="input-group mb-3 mt-2">
			<span class="input-group-text" id="basic-addon1">Course</span>
			<select class="form-select" name="txtcourse">
				<option>-- SELECT COURSE --</option>
				<option value="BSCIT">BSCIT</option>
				<option value="BCA">BCA</option>
				<option value="BBA">BBA</option>
				<option value="BCOM">BCOM</option>
			</select>
		</div>
		<div class="input-group mb-3 mt-2">
			<span class="input-group-text" id="basic-addon1">City</span>
			<select class="form-select" name="txtcity">
				<option>-- SELECT CITY --</option>
				<option value="Rajkot">Rajkot</option>
				<option value="Junagadh">Junagadh</option>
				<option value="Dhoraji">Dhoraji</option>
			</select>
		</div>
		<p class="text-light mt-3 fs-4 mb-1">Hobbies:</p>
		<div class="form-check form-check-inline">
			<input class="form-check-input" id="checkDrawing" type="checkbox" name="hobbies[]" value="Drawing">
			<label class="form-check-label text-light" for="checkDrawing">Drawing</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" id="checkMusic" type="checkbox" name="hobbies[]" value="Music">
			<label class="form-check-label text-light" for="checkMusic">Music</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" id="checkDance" type="checkbox" name="hobbies[]" value="Dance">
			<label class="form-check-label text-light" for="checkDance">Dance</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" id="checkReading" type="checkbox" name="hobbies[]" value="Reading">
			<label class="form-check-label text-light" for="checkReading">Reading</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" id="checkWriting" type="checkbox" name="hobbies[]" value="Writing">
			<label class="form-check-label text-light" for="checkWriting">Writing</label>
		</div>
		<div class="row mt-4">
			<div class="col-6">
				<input type="submit" value="Register" class="btn btn-primary w-100">
			</div>
			<div class="col-6">
				<input type="reset" value="Clear" class="btn btn-warning w-100">
			</div>
		</div>
	</form>
</div>

<div class="container mt-4">
	<table class="table table-bordered table-dark text-center">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Course</th>
		<th>City</th>
		<th>Hobbies</th>
		<th>Actions</th>
	</tr>
	<?php
		$sql = "select * from `register`";
		$res = mysqli_query($con, $sql);
		$i = 0;
		while($row = mysqli_fetch_assoc($res))
		{
			$i++;
			?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['course']; ?></td>
					<td><?php echo $row['city']; ?></td>
					<td><?php echo $row['hobbies']; ?></td>
					<td>
						<i style="cursor: pointer;" class="fa-solid fa-pen text-warning" id="showModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-uname="<?php echo $row['name']; ?>" data-bs-mail="<?php echo $row['email']; ?>" data-bs-mobile="<?php echo $row['contact']; ?>" data-bs-course="<?php echo $row['course']; ?>" data-bs-city="<?php echo $row['city']; ?>" data-bs-hobbies="<?php echo $row['hobbies']; ?>" data-bs-id="<?php echo $row['id']; ?>"></i>&nbsp;&nbsp;
						<a style="cursor: pointer;" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash text-danger"></i></a>
					</td>
				</tr>
			<?php
		}
	?>
	</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="index.php" method="POST">
					<input type="text" name="txtid" id="txtid" hidden>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Name:</label>
						<input type="text" class="form-control" id="txtnm1" name="txtnm1">
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Email:</label>
						<input type="text" class="form-control" id="txtmail1" name="txtmail1">
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Contact:</label>
						<input type="text" class="form-control" id="txtmob1" name="txtmob1">
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Course:</label>
						<select class="form-select" id="txtcourse1" name="txtcourse1">
							<option value="BSCIT">BSCIT</option>
							<option value="BCA">BCA</option>
							<option value="BBA">BBA</option>
							<option value="BCOM">BCOM</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">City:</label>
						<select class="form-select" id="txtcity1" name="txtcity1">
							<option value="Rajkot">Rajkot</option>
							<option value="Junagadh">Junagadh</option>
							<option value="Dhoraji">Dhoraji</option>
						</select>
					</div>
					<!-- <div class="mb-3">
						<label for="recipient-name" class="col-form-label">Hobbies:</label>
						<div class="form-check">
							<input class="form-check-input" id="checkDrawing" type="checkbox" name="hobbies[]" value="Drawing">
							<label class="form-check-label" for="checkDrawing">Drawing</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" id="checkMusic" type="checkbox" name="hobbies[]" value="Music">
							<label class="form-check-label" for="checkMusic">Music</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" id="checkDance" type="checkbox" name="hobbies[]" value="Dance">
							<label class="form-check-label" for="checkDance">Dance</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" id="checkReading" type="checkbox" name="hobbies[]" value="Reading">
							<label class="form-check-label" for="checkReading">Reading</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" id="checkWriting" type="checkbox" name="hobbies[]" value="Writing">
							<label class="form-check-label" for="checkWriting">Writing</label>
						</div>
					</div> -->
					<button type="submit" class="btn btn-primary w-100">Edit Student</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() 
{
	console.log('ready!');
});
const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
	exampleModal.addEventListener('show.bs.modal', event => {
		// Button that triggered the modal
		const button = event.relatedTarget
		const name = button.getAttribute('data-bs-uname')
		const email = button.getAttribute('data-bs-mail')
		const mob = button.getAttribute('data-bs-mobile')
		const course = button.getAttribute('data-bs-course')
		const city = button.getAttribute('data-bs-city')
		const id = button.getAttribute('data-bs-id')
		// If necessary, you could initiate an Ajax request here
		// and then do the updating in a callback.

		// Update the modal's content.
		const modalTitle = exampleModal.querySelector('.modal-title')
		document.getElementById('txtnm1').value = name
		document.getElementById('txtmail1').value = email
		document.getElementById('txtmob1').value = mob
		document.getElementById('txtcourse1').value = course
		document.getElementById('txtcity1').value = city
		document.getElementById('txtid').value = id

		modalTitle.textContent = 'EDIT : ' + name
	})
}
</script>

<?php
	if (isset($_POST['txtnm1']))
	{
		$name1 = $_POST['txtnm1'];
		$email1 = $_POST['txtmail1'];
		$mob1 = $_POST['txtmob1'];
		$course1 = $_POST['txtcourse1'];
		$city1 = $_POST['txtcity1'];
		$nid = $_POST['txtid'];
		$sql = "update `register` set `name`='$name1',`email`='$email1',`contact`='$mob1',`course`='$course1',`city`='$city1' where `id`='$nid'";
		if($res = mysqli_query($con, $sql))
		{
			echo "<meta http-equiv='refresh' content='0'>";
		}
		
	}
?>