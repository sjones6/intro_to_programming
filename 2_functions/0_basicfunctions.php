<?php

//functions let you reuse common code
// DRY: Don't repeat yourself
// Functions take 0 or more arguments


//variable scope


// no arguments
function sayHello() {
	echo 'Hello';
}

// 1 argument
function tellMeMyAge($age) {
	echo 'My age is ' . $age;
}

// 2 arguments
function whoIsOlder($person1age, $person2age) {

	if ($person1age === $person2age) {
		echo 'You are both the same age';
	} elseif ($person1age > $person2age) {
		echo 'Person 1 is older';
	} else {
		echo 'Person 2 is older';
	}

};


//a little more complicated
function compareAgesForPerson($first, $second) {

	  if ($first['age'] == $second['age']) {
	  	echo 'They are both the same age';
	  } elseif ($first['age'] > $second['age']) {

        echo($first['name'] . ' is older than ' . $second['name']);

    } else {

        echo($second['name'] . ' is older than ' . $first['name']);

    }

}



sayHello();
echo '<br><br>';
tellMeMyage(72);
echo '<br><br>';
whoIsOlder(23,31);
echo '<br><br>';
$person1 = [
    'name' => 'Sally',
    'age' => 22
];

$person2 = [
    'name' => 'George',
    'age' => 27
];
compareAgesForPerson($person1, $person2);


//Activity: Write a function to show the difference in price between two items