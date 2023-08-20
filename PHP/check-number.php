<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<?php
	if(isset($_POST['txtno']))
	{
		$number = $_POST['txtno'];
		if($number == 0)
		{
			$number = "Zero";
		}
		else if($number > 0)
		{
			$number = "Positive";
		}
		else
		{
			$number	= "Negative";
		}
	}
?>
<div class="container">		
	<form action="check-number.php" method="POST">
		<input type="number" name="txtno" class="form-control mt-2 mb-2" placeholder="Enter a number" required>
		<input type="submit" class="btn btn-primary w-100" value="Submit">
	</form>
</div>

<div class="container">
	<div class="card text-center">
		<div class="h3 text-primary">Number is : 
			<?php
				if(isset($number))
				{
					echo $number;
				}
			?>
		</div>
	</div>
</div>