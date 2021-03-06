<?php
require_once '../Pos/Date.php';
try {
	// create a Pos_Date object 
	$date = new Pos_Date();
	// use different methods to display the date parts
	echo '<p>Current date: ' . $date->format('F jS, Y') . '</p>';
	$date->addWeeks(4);
	echo '<p>Add 4 weeks: ' .$date->format('F jS, Y') . '</p>';
} catch (Exception $e) {
	echo $e;
}
?>