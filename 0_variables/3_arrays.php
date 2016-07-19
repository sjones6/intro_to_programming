<?php

require('../config/config.php');

// Arrays

//First an empty array:

$array = array(
	0 => 1,  
	1 =>2,
	2 => 3, 
	3 => 4, 5
	);


dump($array);

//Access a single element in an array

dump($array[0]);

// 1. Indexed Arrays

//The keys are numeric, starting at 0
// Note the alternate syntax of declaring this array
$indexedArray = [

	0 => 'This is the first value, starting at 0',
	1 => 'Another value',
	2 => false,
	3 => 3.23212123,
	10 => 'some other value',
	11 => 'asdfas'
];

dump($indexedArray);

// And you can arrays in arrays in arrays in arrays in arrays. It's like inception. They will mess with your mind.


// Quiz time.

// Print out your favorite soda and favorite donut using echo. If you don't see your favorite, add it;
// Hint: remember that arrays are zero indexed!

$donuts = array('sugar', 'cinnamon', 'chocolate', 'boston cream', 'old fashioned');
$sodas = array('coke', 'pepsi', 'dr. pepper', 'barqs rootbeer', 'mug rootbeer');

 echo("my favorite donut is " . $donuts[3]);
 echo("my favorite soda is " . $sodas[0]);



