<div class="container mt-2">
	<table class="table table-bordered table-striped">
		<tr>
			<th>Enrollment No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>City</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Mobile No.</th>
			<th>Hobbies</th>
		</tr>
<?php
	include "config.php";
	$sql = "select * from `student` order by `eno`";
	$res = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($res))
	{
		?>
			<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[4]; ?></td>
				<td><?php echo $row[5]; ?></td>
				<td><?php echo $row[6]; ?></td>
				<td><?php echo $row[7]; ?></td>
			</tr>
		<?php
	}
?>	
	</table>
	<a href="index.php" class="btn btn-info w-100 mt-4">Add Student</a>
</div>