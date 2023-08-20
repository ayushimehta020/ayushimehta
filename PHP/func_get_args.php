<?php
	function BSCIT($a,$b,$c)
	{
		$a = func_get_args();
		$a = join(", &nbsp;",$a);
		echo $a;
	}
	
	BSCIT("BSCIT","Sem-2","ATKT");
?>