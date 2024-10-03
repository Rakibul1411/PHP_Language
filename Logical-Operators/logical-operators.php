<?php
	/*

	 &&
	 ||
	  !
	 and
	 or
	 xor

	*/

	$age = 32;
	if($age >= 6 && $age <= 30){
		echo "I'm a student.<br>";
	}

	if (!($age >= 6 && $age <= 30)){
		echo "I'm not a student.<br>";
	}

	$x = 1;
	$y = 0;

	if($x xor $y){
		echo "Two input number are not equal.<br>";
	}

?>