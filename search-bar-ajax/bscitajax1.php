<table class="table table-bordered">
<?php
	include "config.php";
	$a[] = "";

	// get the q parameter from URL
	$q = $_REQUEST["q"];
	$sql = "select * from `search`";
	$res = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($res))
	{
		$a[] = $row['student_name'];
	}
	$hint = "";

// lookup all hints from array if $q is different from ""
	if ($q !== "") 
	{
		$q = strtolower($q);
		$len=strlen($q);
		foreach($a as $name) 
		{
			if (stristr($q, substr($name, 0, $len))) 
			{
				if ($hint === "") 
				{
					$hint = "<tr><td> $name";
				} 
				else 
				{
					$hint .= "<tr><td> $name";
				}
			}
		}
	}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
</table>