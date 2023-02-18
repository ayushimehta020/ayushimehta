<?php
	include "index.php";
	include "config.php";
	$sql = "select * from `employee` where `department`='Sales'";
	$res = mysqli_query($con,$sql);
	?>
	<div class="container mt-2">
		<table class="table table-bordered text-center">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Department</th>
				<th>Salary</th>
				<th>Leave</th>
				<th>Joining Date</th>
				<th>Resign Date</th>
			</tr>
	<?php
		$i = 0;
		while($row = mysqli_fetch_assoc($res))
		{	
			$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['employee_name']; ?></td>
				<td><?php echo $row['department']; ?></td>
				<td><?php echo $row['salary']; ?></td>
				<td><?php echo $row['emp_leave']; ?></td>
				<td><?php echo $row['joining_date']; ?></td>
				<td><?php echo $row['resign_data']; ?></td>
			</tr>
			<?php
		}
		mysqli_close($con);
	?>
	</table>
</div>