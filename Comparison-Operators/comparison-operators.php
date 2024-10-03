<?php
	//PHP--> true=1, false="";
	/*
	PHP--> for <=> (in php version 7)
	       < sign: return -1,
	       = sign: return 0,
	       > sign: return 1;
	*/
	// != also written <>;

	$x = 15;
	$y = 157;

	echo ($x === $y);
	echo "<br>";
	echo ($x !== $y); // print 1;
	echo "<br>";
	echo ($x < $y);
	echo "<br>";
	echo ($x == $y);
	echo "<br>";
	echo ($x > $y);
	echo "<br>";
	echo ($x <> $y);
	echo "<br>";
	echo ($x <=> $y);

?>