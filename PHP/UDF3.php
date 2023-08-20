<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<?php
	function myfunc($a, $b, $c)
	{
		if($c == 0)
		{
			$d = $a + $b;
		}
		if($c == 1)
		{
			$d = $a - $b;
		}
		if($c == 2)
		{
			$d = $a * $b;
		}
		if($c == 3)
		{
			$d = $a / $b;
		}
		return $d;
	}
	
	if(isset($_POST['txtno1']))
	{
		$a = $_POST['txtno1'];
		$b = $_POST['txtno2'];
		$c = $_POST['caloption'];
		// echo myfunc($a, $b, $c);
	}
?>

<div class="container">
	<form action="UDF3.php" method="POST">
		<input type="number" name="txtno1" class="form-control mt-2" placeholder="Enter Number 1" required>
		<input type="number" name="txtno2" class="form-control mt-2 mb-2" placeholder="Enter Number 2" required>
		<select name="caloption" class="form-select mb-2">
			<option value="0">Addition</option>
			<option value="1">Subtraction</option>
			<option value="2">Multiplication</option>
			<option value="3">Division</option>
		</select>
		<input type="submit" name="submit" value="Caculate" class="btn btn-primary w-100">
	</form>
</div>

<div class="container">
	<div class="card text-center mt-2">
		<div class="h3 text-primary">Answer is : 
			<?php
				if(isset($_POST['submit']))
				{
					echo myfunc($a, $b, $c);
				}
			?>
		</div>
	</div>
</div>