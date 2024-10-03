<?php
	for ($x = 1; $x <= 10; $x++) {
		if ($x === 5) {
			goto go;
		}
		echo $x;
	}

	go:
	  echo "<br>";
	  echo "Exit the for loop.";

	echo "<br>";
	echo "<br>";


	for ($i = 1; $i <= 3; $i++) {
		echo "Outer loop iteration: $i<br>";
		for ($j = 1; $j <= 3; $j++) {
			echo "Inner loop iteration: $j<br>";
			if ($i + $j >= 5) {
				goto end_of_loops;
			}
		}
	}

	end_of_loops:
	echo "End of loops.<br>";
?>
