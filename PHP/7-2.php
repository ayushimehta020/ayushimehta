<?php
	if(isset($_POST['txtno1']))
	{
		$a = $_POST['txtno1'];
		echo '<form action="7-2.php" method="POST">';
		for($i=0; $i<$a; $i++)
		{
			echo '<input type="text" name="textboxes[]" id="textbox' . $i . '" placeholder="Enter a number" required><br><br>';
		}
		echo '<input type="submit" value="Submit" name="submit2"></form>';
	}
	
	if(isset($_POST['submit2']))
	{
		$textboxes = $_POST['textboxes'];
		foreach($textboxes as $textbox)
		{
			echo $textbox . "<br>";
		}
	}
?>