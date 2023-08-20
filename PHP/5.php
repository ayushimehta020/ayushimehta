<!DOCTYPE html>
<html lang="en">

<head>
	<title>Marksheet using PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>

<?php
$m1 = $m2 = $m3 = $total = $per = 0;
$grade = $result = "---";
if (isset($_POST['txtno1'])) {
	$m1 = $_POST['txtno1'];
	$m2 = $_POST['txtno2'];
	$m3 = $_POST['txtno3'];

	$total = $m1 + $m2 + $m3;

	if ($m1 >= 40 && $m2 >= 40 && $m3 >= 40) {
		$per = round(($total / 3), 2);
		// $nper = round($per, 2);
		$result = "PASS";
		if ($per >= 70) {
			$grade = "A+";
		} else if ($per >= 60) {
			$grade = "A";
		} else if ($per >= 50) {
			$grade = "B";
		} else {
			$grade = "C";
		}
	} else {
		$per = 0;
		$result = "FAIL";
		$grade = "ATKT";
	}
}
?>

<body>
	<div class="container">
		<form action="5.php" method="POST">
			<input type="number" class="form-control mt-2" name="txtno1" placeholder="Enter Marks 1" required>
			<input type="number" class="form-control mt-2" name="txtno2" placeholder="Enter Marks 2" required>
			<input type="number" class="form-control mt-2" name="txtno3" placeholder="Enter Marks 3" required>
			<input type="submit" class="btn btn-primary w-100 mt-2" value="Submit">
		</form>
	</div>

	<div class="container mt-2">
		<table width="100%" class="table table-dark table-bordered">
			<tr>
				<td>Marks 1</td>
				<td>Marks 2</td>
				<td>Marks 3</td>
				<td>Total</td>
				<td>Per</td>
				<td>Grade</td>
				<td>Result</td>
			</tr>

			<tr>
				<td><?php echo $m1; ?></td>
				<td><?php echo $m2; ?></td>
				<td><?php echo $m3; ?></td>
				<td><?php echo $total; ?></td>
				<td><?php echo $per; ?></td>
				<td><?php echo $grade; ?></td>
				<td><?php echo $result; ?></td>
			</tr>
		</table>
	</div>
</body>

</html>