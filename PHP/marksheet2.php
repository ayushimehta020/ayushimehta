<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" integrity="sha512-72OVeAaPeV8n3BdZj7hOkaPSEk/uwpDkaGyP4W2jSzAC8tfiO4LMEDWoL3uFp5mcZu+8Eehb4GhZWFwvrss69Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
	$m1 = $m2 = $m3 = $m4 = $m5 = $m6 = $total = 0;
	$per = $grade = $result = "---";
	if(isset($_POST['txtm1']))
	{
		$m1 = $_POST['txtm1'];
		$m2 = $_POST['txtm2'];
		$m3 = $_POST['txtm3'];
		$m4 = $_POST['txtm4'];
		$m5 = $_POST['txtm5'];
		$m6 = $_POST['txtm6'];
		$total = $m1 + $m2 + $m3 + $m4 + $m5 + $m6;
		if($m1 >= 40 && $m2 >= 40 && $m3 >= 40 && $m4 >= 40 && $m5 >= 40 && $m6 >= 40)
		{
			$per = $total / 6;
			$result = "PASS";
			if($per >= 90)
			{
				$grade = "o";
			}
			else if($per >= 80)
			{
				$grade = "A";
			}
			else if($per >= 70)
			{
				$grade = "B";
			}
			else if($per >= 60)
			{
				$grade = "C";
			}
			else if($per >= 50)
			{
				$grade = "D";
			}
			else
			{
				$grade = "E";
			}
		}
		else
		{
			$per = 0;
			$grade = "F";
			$result = "FAIL";
		}
	}
?>

<div class="container">
	<form action="marksheet2.php" method="POST">
		<input type="number" class="form-control mt-2 mb-2" name="txtm1" placeholder="Enter Marks 1" required>
		<input type="number" class="form-control mb-2" name="txtm2" placeholder="Enter Marks 2" required>
		<input type="number" class="form-control mb-2" name="txtm3" placeholder="Enter Marks 3" required>
		<input type="number" class="form-control mb-2" name="txtm4" placeholder="Enter Marks 4" required>
		<input type="number" class="form-control mb-2" name="txtm5" placeholder="Enter Marks 5" required>
		<input type="number" class="form-control mb-2" name="txtm6" placeholder="Enter Marks 6" required>
		<input type="submit" class="btn btn-primary w-100" value="Result">
	</form>
<div>

<div class="container">
	<table width="100%" class="table table-dark table-bordered text-center">
		<tr>
			<td>Marks1</td>
			<td>Marks2</td>
			<td>Marks3</td>
			<td>Marks4</td>
			<td>Marks5</td>
			<td>Marks6</td>
			<td>Total</td>
			<td>Per</td>
			<td>Grade</td>
			<td>Result</td>
		</tr>
		<tr>
			<td><?php echo $m1; ?></td>
			<td><?php echo $m2; ?></td>
			<td><?php echo $m3; ?></td>
			<td><?php echo $m4; ?></td>
			<td><?php echo $m5; ?></td>
			<td><?php echo $m6; ?></td>
			<td><?php echo $total; ?></td>
			<td><?php echo $per; ?></td>
			<td><?php echo $grade; ?></td>
			<td><?php echo $result; ?></td>
		</tr>
	</table>
</div>