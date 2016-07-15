<?php

// A variable can hold 8 types of information (in PHP)
// But we'll only talk about 6 for now


// 1. String

$string = 'This is a string. And I am programmer. And the sky is blue.';

echo( gettype($string) ); 

// 2. Integer

$int = 2;

echo ( gettype($int) );

// 3. Boolean

$bool = false;

$type = gettype($bool);

echo($type);

// 4. Float

$float = 2.12345;

$variableType = gettype($float);

echo ($variableType);

// 5. Null

$null = null;

echo (gettype($null));

// 6. Array

// An array is listing of information
$array = array("a string", true, 1.1, null, 13);

echo (gettype($array));


//More on arrays to come


// A quiz:

// Which one will get printed?
// if ( gettype("1.2232") == 'double' ) {

// 	echo('this should be printed');

// } else {

// 	echo("No, this should be printed");

// }
 




