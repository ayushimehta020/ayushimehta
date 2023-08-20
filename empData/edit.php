<?php
	include "config.php";
	$id = $_GET['id'];
	$sql = "select * from `emp` where `id`='$id'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
?>

<div class="container mt-2 border rounded-1 bg-dark p-4">
	<h1 class="text-light text-center mt-4 mb-4">Registration</h1>
	<form action="edit.php" method="POST">
		<input type="text" value="<?php echo $id ?>" name="txtid">
		<input type="number" class="form-control" value="<?php echo $row['emp_code']; ?>" name="txtcode" required>
		<input type="text" class="form-control mt-2" value="<?php echo $row['name']; ?>" name="txtnm" required>
		<input type="email" class="form-control mt-2" value="<?php echo $row['email']; ?>" name="txtmail" required>
		<input type="number" class="form-control mt-2" value="<?php echo $row['contact']; ?>" name="txtmob" required>
		<textarea class="form-control mt-2" name="txtaddr" required><?php echo $row['address']; ?></textarea>
		<input type="date" class="form-control mt-2" name="txtjoin" value="<?php echo $row['join_date']; ?>" required>
		<input type="date" class="form-control mt-2" name="txtdob" value="<?php echo $row['dob']; ?>" required>
		<div class="row mt-4">
			<div class="col">
				<input type="submit" value="Update" class="btn btn-primary w-100">
			</div>
			<div class="col">
				<input type="reset" value="Clear" class="btn btn-warning w-100">
			</div>
		</div>
	</form>
</div>

<?php
	if(isset($_POST['txtcode']))
	{
		$uid = $_POST['txtid'];
		$code = $_POST['txtcode'];
		$name = $_POST['txtnm'];
		$email = $_POST['txtmail'];
		$mob = $_POST['txtmob'];
		$addr = $_POST['txtaddr'];
		$join_date = $_POST['txtjoin'];
		$dob = $_POST['txtdob'];
		$sql = "update `emp` set `emp_code`='$code',`name`='$name',`email`='$email',`contact`='$mob',`address`='$addr',`join_date`='$join_date',`dob`='$dob' where `id`='$uid'";
		$res = mysqli_query($con,$sql);
		if($res)
		{
			?>
				<script>
					location.replace("index.php");
				</script>
			<?php
		}
	}
?>