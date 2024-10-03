<?php
	$age = 18;

	if ($age >= 18) {
		echo "I can vote.<br>";
	} elseif ($age >= 21) {
		echo "I can vote and drive.<br>";
	} else {
		echo "I can't vote and drive.<br>";
	}

	if ($age >= 18):
		echo "I can vote.<br>";
	elseif ($age >= 21):
		echo "I can vote and drive.<br>";
	else:
		echo "I can't vote and drive.<br>";
	endif;
?>