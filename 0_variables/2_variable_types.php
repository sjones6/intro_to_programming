<?php

// A variable can hold 8 types of information (in PHP)
// But we'll only talk about 6 for now


// 1. String

$string = 'This is a string';

echo( gettype($string) . PHP_EOL ); 

// 2. Integer

$int = 2;

echo ( gettype($int) . PHP_EOL );

// 3. Boolean

$bool = true;

$type = gettype($bool);

echo($type . PHP_EOL);

// 4. Float


$float = 2.12345;

$variableType = gettype($float);

echo ($variableType . PHP_EOL);

// 5. Null

$null = null;

echo (gettype($null) . PHP_EOL);

// 6. Array

// An array is listing of information
$array = array("a string", true, 1.1);

echo (gettype($array) . PHP_EOL);


//More on arrays to come


// A quiz:

// Which one will get printed?
// if ( gettype("1.2232") == 'double' ) {

// 	echo('this should be printed');

// } else {

// 	echo("No, this should be printed");

// }
 




