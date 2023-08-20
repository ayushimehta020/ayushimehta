<?php
	if(isset($_POST['txtno']))
	{
		$number = $_POST['txtno'];
		for($i=0; $i<=$number; $i++)
		{
			if($i % 2 != 0)
			{
				echo $i . "<br>";
			}
		}
	}
?>

<form action="odd-numbers.php" method="POST">
	<input type="number" name="txtno" placeholder="Enter a number" required>
	<input type="submit" value="Submit">
</form>