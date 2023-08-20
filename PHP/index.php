<?php
	if(isset($_FILES['fileimage']))
	{
		$target_dir = "userimages/";
		$ext = explode(".", $_FILES["fileimage"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($ext);
		$target_file = $target_dir . $newfilename;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
		{
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		else
		{
			if ($_FILES["fileimage"]["size"] > 500000) 
			{
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			else
			{
				move_uploaded_file($_FILES["fileimage"]["tmp_name"], $target_file);							
			}
		}
	}
?>

<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="fileimage" accept=".jpg">
	<input type="submit" value="Share">
</form>