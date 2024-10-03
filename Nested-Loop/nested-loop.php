<?php
	$number = 1;
	for ($i = 1; $i <= 10; $i++):
		for ($j = $number; $j < $number + 10; $j++):
			echo "$j ";
		endfor;
		$number += 10;
		echo "<br>";
	endfor;

	echo "<br>";

	$number = range(1, 100);
	foreach ($number as $num):
		echo "$num ";
		if ($num % 10 === 0):
		  echo "<br>";
		endif;
	endforeach;
?>