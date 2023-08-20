<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<table width="100%" class="table table-striped table-bordered mt-4 text-center">
	<tr>
		<th>#</th>
		<th>Course</th>
		<th>Operation</th>
	</tr>

	<?php
	include "config.php";
	$sql = "select * from `course`";
	$res = mysqli_query($con, $sql);
	if ($res) {
		$row = mysqli_fetch_assoc($res);
		$i = 1;
		while ($row = mysqli_fetch_assoc($res)) {
	?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['cname']; ?></td>
				<td><input type="button" value="Delete" class="btn btn-danger"></td>
			</tr>
	<?php
		}
	}
	mysqli_close($con);
	?>
</table>