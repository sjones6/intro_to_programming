<?php


// What if you want to iterate through every element in an array?

//Here's what you could do:
$indexedArray = array(
	'one',
	'two',
	'three',
	'four',
	'five',
	'six',
	'seven',
	'eight',
	'nine',
	'ten'
	);

$indexedArray[1];

for ($i = 0; $i <= 10; $i++ ) {

	echo ($indexedArray[$i]);

}

// Enter "foreach."

// Foreach loops through each element in the array
// On each pass, the current element is assigned to the variable after 'as'
// You can then inspect that value within the loop
foreach ($indexedArray as $value) {

	echo ($value);

}


// What if you want to inspect the array key, and not just the value?
// Well, you can do that too!
// Like so ...
foreach ($indexedArray as $key => $value) {

	echo ($key . ': ' . $value);

}

// Exercise:
// 1. Declare an array
// 2. Fill in the array with at least 3 values 
// 3. Loop through the array using foreach and print out the value. Optionally put an if statement in your foreach.

