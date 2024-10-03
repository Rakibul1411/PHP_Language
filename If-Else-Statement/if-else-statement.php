<?php
	$age = 18;

	if ($age >= 18) {
		echo "You are eligible for vote.<br>";
	} else {
		echo "You are not eligible for vote.<br>";
	}

	$age = 21;
	if ($age >= 21):
		echo "You are eligible for driving.<br>";
	else:
		echo "You are not eligible for driving.<br>";
	endif;

?>