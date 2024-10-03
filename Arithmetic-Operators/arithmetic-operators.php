<?php
	// Arithmetic Operators work only on integer and float values.

	$a = 11;
	$b = 5;

	$c = $a + $b;
	echo $c;
	echo "<br>";

	$c = $a - $b;
	echo $c;
	echo "<br>";

	$c = $a * $b;
	echo $c;
	echo "<br>";

	$c = $a / $b;
	echo $c;
	echo "<br>";

	$c = $a % $b;
	echo $c;
	echo "<br>";

	$c = $a ** $b; // (a^b)
	echo $c;
	echo "<br>";

	$a++; // return first then increment.
	echo $a;
	echo "<br>";

	++$a; // increment first then return.
	echo $a;
	echo "<br>";

	$b--; // return first then decrement.
	echo $b;
	echo "<br>";

	--$b; // decrement first then return.
	echo $b;
	echo "<br>";

?>
