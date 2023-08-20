<?php
	function add(...$numbers)
	{
		echo "Number of arguments passed in the function : " . func_num_args() . "<br>";
		$num = 0;
		foreach($numbers as $i)
		{
			$num += $i;
		}
		return $num;
	}
	
	echo "Sum : " . add(1,2,3,4);
?>