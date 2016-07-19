<?php

require('../config/config.php');

// Let's declare some variables;

// Fill out the following with you're preferences, following this example.
$chocolate = true;
$vanilla = false;

$coke;
$pepsi;



// A simple if statement.
if ( $chocolate === true ) {
	echo('You like chocolate!' . PHP_EOL);
}

// An if statement with an else statement
if ( $coke === true ) {

	echo('You do like coke!' . PHP_EOL);

} else {

	echo('You do not like coke!' . PHP_EOL);

}

// An if, elseif, and else statement
if ( $chocolate === true ) {

	echo('You like chocolate!' . PHP_EOL);

} elseif ( $vanilla === true ) {

	echo('You like vanilla!' . PHP_EOL);

} else {

	echo('You like neither chocolate nor vanilla' . PHP_EOL);

}

// Nested if statements
if ( $coke === true ) {

	if ($pepsi === true ) {

		echo("You like coke and pepsi" . PHP_EOL);

	} else {

		echo("You only like coke" . PHP_EOL);
	}

} elseif ( $pepsi === true ) {

	echo("You only like pepsi" . PHP_EOL);

} else {

	echo("You like neither coke nor pepsi" . PHP_EOL);

}


// Quiz

// Get the right statement to print out by adjusting the conditions

// Uncomment the following block of code
// Assign values to $icecream and $donut and then fill out the If statements


$icecream = false;
$donut = true;


if ( $icecream === true ) {

	echo('If I am printed, you need to recheck your logic!');

} elseif (  ) {

	if () {
		echo('If I am printed, you need to recheck your logic!');
	} else {
		echo('This should be printed!');
	}

} else {

	echo('If I am printed, you need to recheck your logic!');

}


