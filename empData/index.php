<?php
	include "config.php";
	if(isset($_POST['txtcode']))
	{
		$code = $_POST['txtcode'];
		$name = $_POST['txtnm'];
		$email = $_POST['txtmail'];
		$mob = $_POST['txtmob'];
		$addr = $_POST['txtaddr'];
		$join_date = $_POST['txtjoin'];
		$dob = $_POST['txtdob'];
		$sql = "insert into `emp`(`emp_code`,`name`,`email`,`contact`,`address`,`join_date`,`dob`) values('$code','$name','$email','$mob','$addr','$join_date','$dob')";
		if($res = mysqli_query($con,$sql))
		{
			?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div>Registered Successfully</div>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php
		}
	}
?>

<div class="container mt-2 border rounded-1 bg-dark p-4">
	<h1 class="text-light text-center mt-4 mb-4">Registration</h1>
	<form action="index.php" method="POST">
		<input type="number" class="form-control" placeholder="Enter Employee Code" name="txtcode" required>
		<input type="text" class="form-control mt-2" placeholder="Enter Name" name="txtnm" required>
		<input type="email" class="form-control mt-2" placeholder="Enter Email" name="txtmail" required>
		<input type="number" class="form-control mt-2" placeholder="Enter Contact Number" name="txtmob" required>
		<textarea class="form-control mt-2" placeholder="Enter Address" name="txtaddr" required></textarea>
		<input type="date" class="form-control mt-2" name="txtjoin" required>
		<input type="date" class="form-control mt-2" name="txtdob" required>
		<div class="row mt-4">
			<div class="col">
				<input type="submit" value="Register" class="btn btn-primary w-100">
			</div>
			<div class="col">
				<input type="reset" value="Clear" class="btn btn-warning w-100">
			</div>
		</div>
	</form>
</div>

<div class="container mt-2">
	<table class="table table-bordered table-striped">
		<tr>
			<th>Employee Code</th>
			<th>Name</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Joining Date</th>
			<th>D.O.B.</th>
			<th>Actions</th>
		</tr>

		<?php
			$sql = "select * from `emp` order by `emp_code`";
			$res = mysqli_query($con,$sql);
			while($row = mysqli_fetch_assoc($res))
			{
				?>
					<tr>
						<td><?php echo $row['emp_code']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['join_date']; ?></td>
						<td><?php echo $row['dob']; ?></td>
						<td><a href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen text-primary"></i></a></td>
					</tr>
				<?php
			}
		?>

	</table>
</div>