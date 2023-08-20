<?php
	$con = mysqli_connect("localhost","root","","BSCIT");
	if(!mysqli_query($con,"insert into `BSCIT`(firstName) values('Ayushi')"))
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
?>