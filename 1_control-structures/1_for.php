<?php

require('../config/config.php');

// For loops through a number of times ...

// To initialize a for loop, you declare it with a tight syntax:

// 1. Set the start of the counter.
// 2. Then, check the count. If the condition is true, it will continue. If not, it will stop.
// 3. Change the count.

for ( $i = 0; $i <= 10; $i = $i + 1 ) {

	if ( $i === 0 ) {

		echo("Nice to meet you!");

	} else {

		echo('Havent I seen you before? Like ' . $i . ' times already.');

	}

}


// Two by two:
$j = 0;
for ( $i = 0; $i <= 10; $i = $i + 2 ) {

	echo('Loop number: ' . $j . '; count number: ');

	echo($i);

	$j = $j + 1;

}


// Exercise:

// 1. Start at 25.
// 2. End at 150.
// 3. Count up by 5.
// 4. Print out a message every time through. 

// for () {
	
// }