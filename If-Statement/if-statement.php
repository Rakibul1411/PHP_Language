<?php
	// if(condition){ }
	/* if(condition):

	   enif;
	*/

	$a = 10;
	$b = 20;

	if ($a < $b) {
		echo "a is less than b";
	}
	echo "<br>";

	if ($a < $b):
	    echo "a is less than b";
	    echo "<br>";
		echo "value of a and b are: $a $b <br>";
	endif;

?>
