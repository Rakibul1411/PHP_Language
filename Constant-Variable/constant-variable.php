<?php
	// define(name, value, case-insensitive)
	// default 'case-insensitive value is False.
	// $ not use in constant variable
	// constant variables are 'Global Variable' in PHP.

	define("num1", "500");
	var_dump(num1);
	echo "<br>";
	echo num1;

	echo "<br>";

	define("_num2", 40);
	var_dump(_num2);
	echo "<br>";
	echo _num2;

	echo "<br>";

	$num = _num2 + 20;
	echo $num;
?>