<div class="container w-50 border border-dark p-4 rounded-1 bg-dark mt-5">
	<form action="search-student.php" method="POST">
		<img src="search-student.png" class="d-block mx-auto mb-3" style="height: 100px;">
		<textarea class="form-control" name="txtsearch"></textarea>
		<input type="submit" value="Search Student" class="btn btn-primary w-100 mt-2">
		<a href="index.php" class="btn btn-warning w-100 mt-2">Insert Student</a>
	</form>
</div>

<?php
	include "config.php";
	if(isset($_POST['txtsearch']))
	{
		$search = $_POST['txtsearch'];
		$sql = "SELECT * FROM `stud` WHERE `enr`='$search'";
		$res = mysqli_query($con, $sql);
		while($row = mysqli_fetch_assoc($res))
		{
			?>
				<div class="container">
					<table class="table table-bordered table-dark mt-5 w-75 mx-auto text-center">
						<tr>
							<th>Enr.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Contact</th>
							<th>Course</th>
						</tr>
						<tr>
							<td><?php echo $row['enr']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['contact']; ?></td>
							<td><?php echo $row['course']; ?></td>
						</tr>
					</table>
				</div>
			<?php
		}
	}
?>