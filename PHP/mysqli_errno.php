<?php
	$con = mysqli_connect("localhost","root","","bscit");
	if(!mysqli_query($con,"insert into `bscit`(firstName) values('Ayushi')"))
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
?>