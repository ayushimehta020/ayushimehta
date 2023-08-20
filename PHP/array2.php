<form action="array2.php" method="POST">
	<?php
		if(isset($_POST['txtno']))
		{
			$no = $_POST['txtno'];
			for($i=0; $i<$no; $i++)
			{
				?>
				<input type="text" placeholder="Enter <?php echo $i; ?>" name="txt<?php echo $i; ?>" required>
				<?php
			}
		}
		else
		{
			$no1 = $_POST['txtno1'];
			if(isset($_POST['txt0']))
			{
				$arr;
				for($i=0; $i<$no1; $i++)
				{
					$arr = $_POST['txt' . $i];
					echo $arr . "<br>";
				}
			}
			else
			{
				header("location:array1.html");
			}
		}
	?>
	<input type="text" value="<?php echo $no; ?>" name="txtno1" hidden>
	<input type="submit" value="Submit">
</form>