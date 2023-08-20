<?php
	function add(...$numbers)
	{
		$num = 0;
		foreach($numbers as $i)
		{
			$num += $i;
		}
		return $num;
	}
	
	echo add(1,2,3,4);
?>