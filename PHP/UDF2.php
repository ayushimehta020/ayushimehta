<?php
	function myfunc($a, $b)
	{
		$c = $a + $b;
		return $c;
	}
	
	if(isset($_POST['txtno1']))
	{
		$a = $_POST['txtno1'];
		$b = $_POST['txtno2'];
		echo myfunc($a, $b);
	}
?>

<form action="UDF2.php" method="POST">
	<input type="number" name="txtno1" placeholder="Enter Number 1" required>
	<input type="number" name="txtno2" placeholder="Enter Number 2" required>
	<input type="submit" value="Calculate">
</form>