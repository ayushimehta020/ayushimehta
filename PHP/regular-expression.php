<?php
	// Match
	$str = "BSCIT";
	$pattern = "/bscit/i";
	echo preg_match($pattern, $str) . "<br>";
	
	// Match All
	$str1 = "The rain in SPAIN falls mainly on the plains";
	$pattern1 = "/ain/i";
	echo preg_match_all($pattern1, $str1) . "<br>";
	
	// Replace
	$str2 = "Visit W3Schools";
	$pattern2 = "/w3schools/i";
	echo preg_replace($pattern2, "BSCIT", $str2);
?>