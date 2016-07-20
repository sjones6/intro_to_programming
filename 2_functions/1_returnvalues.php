<?php

// functions don't always (even don't usually) echo things
// more often they provide a return value

// no arguments
function sayHello() {
  return 'Hello';
}

// 1 argument
function tellMeMyAge($age) {
  return 'My age is ' . $age;
}

// 2 arguments
function whoIsOlder($person1age, $person2age) {

  if ($person1age === $person2age) {
    return 'same';
  }

  if ($person1age > $person2age) {
    return 'person 1';
  }

  return 'person 2';


};

// a little more complicated
function compareAgesForPerson($first, $second) {

  if ($first['age'] == $second['age']) {

    return 'same';

  }

  if ($first['age'] > $second['age']) {

      return $first['name'];

  }

  return $second['name'];


}


sayHello(); // does nothing
echo sayHello(); //this works

echo '<br><br>';

tellMeMyAge(72); // does nothing
echo tellMeMyAge(72); //this works

echo '<br><br>';

//Let's save to a variable and
$person1 = [
    'name' => 'Sally',
    'age' => 22
];

$person2 = [
    'name' => 'George',
    'name' => 27
];
// compareAgesForPerson($first, $second); //does nothing
$olderPerson = compareAgesForPerson($person1, $person2);
echo 'Hi, ' . $olderPerson . ' is older<br><br>';
if ($olderPerson === 'George') {
  echo 'The older person is George';
}
if ($olderPerson === 'Sally') {
  echo 'The older person is Sally';
}

//Activity: Rewrite your function to use return values instead