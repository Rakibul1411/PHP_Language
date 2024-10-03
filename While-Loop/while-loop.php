<?php
	$number = 1;

	echo "<ul>";
	while($number <= 10){
		echo "<li>" . $number . "<br>" . "</li>";
		$number++;
	}
	echo "</ul>";

	$number = 11;
	while ($number <= 20):
		echo "<li>" . $number . "<br>" . "</li>";
	    $number++;
	endwhile;

?>
