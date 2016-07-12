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


for ($i = 0; $i <= 10; $i++ ) {

	echo ($indexedArray[$i] . PHP_EOL);

}


// But, there's a big problem ....


// What about associative arrays??

// Not mention that doing that every time you want to inspect
// each element in an array is a big pain.
$associativeArray = array(
	'one' => 'I\'m ',
	'two' => 'a ',
	'three' => 'little ',
	'four' => 'teapot ',
	'five' => 'short',
	'six' => 'and ',
	'seven' => 'stout',
	);


for ($i = 0; $i <= 10; $i++ ) {

	//echo ($associativeArray[$i]);

	//Doesn't work ...
	// There's nothing indexed at a numeric value ...
	// So we'll get an error
	
}


// Enter "foreach."

// Foreach loops through each element in the array
// On each pass, the current element is assigned to the variable after 'as'
// You can then inspect that value within the loop
foreach ($associativeArray as $value) {

	echo ($value . PHP_EOL);

}


// What is you want to inspect the array key, and not just the value?
// Well, you can do that too!
// Like so ...

echo('Im a little teapot, examined:' . PHP_EOL);
foreach ($associativeArray as $key => $value) {

	echo ($key . ': ' . $value . PHP_EOL);

}


