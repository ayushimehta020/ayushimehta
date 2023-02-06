<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<div class="container">
	<form action="addcourse.php" method="POST">
		<input type="text" name="txtcourse" class="form-control mt-2 mb-2" placeholder="Enter Course Name" required>
		<input type="submit" value="Submit" class="btn btn-primary w-100">
	</form>
</div>
<table width="100%" class="table table-striped table-bordered mt-4 text-center">
	<tr>
		<th>#</th>
		<th>Course</th>
		<th>Operation</th>
	</tr>
<?php
	include "config.php";
	if(isset($_POST['txtcourse']))
	{
		$cnm = $_POST['txtcourse'];
		$select = "select * from `course` where `cname`='$cnm'";
		$res1 = mysqli_query($con,$select);
		$rows = mysqli_num_rows($res1);
		$sql = "select * from `course`";
		$res = mysqli_query($con,$sql);
		if($res)
		{
			$row = mysqli_fetch_assoc($res);
			$i = 1;
			while($row = mysqli_fetch_assoc($res))
			{
				?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['cname']; ?></td>
						<td><input type="button" value="Delete" class="btn btn-danger"></td>
					</tr>
				<?php
			}
			if($rows == 0)
			{
				$sql = "insert into `course`(`cname`) values('$cnm')";
				$res = mysqli_query($con,$sql);
				?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Record inserted successfully!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php
			}
			else
			{
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Duplicate entry!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
			}	
		}
		else
		{
			echo "Failed to insert!";
		}
		
	}
?>
</table>