<?php

// Arrays

//First an empty array:

$array = array();

//or

$array = [1, 2, 3, 4, 5];

var_dump($array);

var_dump($array[0]);

// 1. Associative Arrays

//The keys are strings...
$associativeArray = array(

	'first' => 'This is the first value',
	'boolean' => true,
	'another_array_key' => 1

	);

//Let's print out the whole array
var_dump($associativeArray);


//Let's print out just one value, keyed to "boolean"
var_dump($associativeArray['boolean']);



// 2. Indexed Arrays

//The keys are numeric, starting at 0
// Note the alternate syntax of declaring this array
$indexedArray = [

	0 => 'This is the first value, starting at 0',
	1 => 'Another value',
	2 => false,
	3 => 3.23212123
];

var_dump($indexedArray);



// 3. Multi-Dimensional Arrays (these get complicated)

// Arrays can have arrays ... 

$multidimensionalArray = array(
	'array_in_array' => array(
		'some_value' => 1,
		'another_value' => 2
		),

	'another_array' => array(
		'one', 'two', 'three', 'four', 'five'
		),
	);

var_dump($multidimensionalArray);

var_dump($multidimensionalArray['another_array']['some_value']);


// And you can arrays in arrays in arrays in arrays in arrays. It's like inception. They will mess with your mind.


// Quiz time.

// Print out your favorite soda and favorite donut using echo. If you don't see your favorite, add it;
// Hint: remember that arrays are zero indexed!
$foods = array(
	"donuts" => array(
		'sugar', 'cinnamon', 'chocolate', 'bostom cream', 'old fashioned'),

	"sodas" => array(
		'coke', 'pepsi', 'dr. pepper', 'barqs rootbeer', 'mug rootbeer', 
		)
	);

// echo("my favorite donut is" . );
// echo("my favorite soda is" . );



