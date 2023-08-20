<?php
	if(isset($_POST['txtno']))
	{
		$number = $_POST['txtno'];
		$sum = 0;
		for($i=0; $i<=$number; $i++)
		{
			if($i % 2 == 0)
			{
				$sum += $i;
			}
		}
		echo $sum;
	}
?>

<form action="even-sum.php" method="POST">
	<input type="number" name="txtno" placeholder="Enter a number" required>
	<input type="submit" value="Submit">
</form>