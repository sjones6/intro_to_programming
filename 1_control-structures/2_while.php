<?php


// While a condition is true, do something

// At the start of every loop, it checks whether or not the condition is still true.
// If it is, it executes the code in the loop.
// If it is NOT, it stops.

// If the condition never changes, the loop will run forever (i.e., until your server runs out of memory and crashes)
// This is call the dreaded "Infinite Loop"
$i = 0;
while ( $i <= 10 ) {


	if ($i === 10) {

		echo('I\'m gonna puke.' . PHP_EOL);

	} elseif ($i < 5) {

		echo('Round we go. Round and round, precious. WHEEEEEEEE' . PHP_EOL);

	} elseif ($i > 5 ) {

		echo('I\'m getting dizzy.' . PHP_EOL);

	}

	// This part is very important. 
	// Let's change the condition
	$i = $i + 1;

}