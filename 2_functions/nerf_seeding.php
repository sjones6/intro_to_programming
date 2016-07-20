<?php
  require_once('../config/config.php');
  require_once('nerf_library.php');

  DB::query("TRUNCATE people");
  DB::query("TRUNCATE guns");
  DB::query("TRUNCATE locations");
  DB::query("TRUNCATE checkouts");

  echo '<h3>Beginning updates</h3>';

  echo '<p>Create a person</p>';
  createPerson('David', 'Almacy', 'david@engagedc.com');
  createPerson('Rob', 'Bartnichak', 'rob@engagedc.com');
  createPerson('Mike', 'Calvo', 'mike@engagedc.com');
  createPerson('Matthew', 'Deluca', 'matthew@engagedc.com');
  createPerson('Ryan', 'Fraase', 'ryan@engagedc.com');
  createPerson('Shane', 'Helm', 'shane@engagedc.com');
  createPerson('Spencer', 'Jones', 'specner@engagedc.com');
  createPerson('Margaret', 'Larkin', 'margaret@engagedc.com');
  createPerson('Benjamin ', 'Locher', 'benjamin@engagedc.com');
  createPerson('Leah', 'Metoudi', 'leah@engagedc.com');
  createPerson('Lee', 'Moran', 'lee@engagedc.com');
  createPerson('Aidan', 'Quinlan-Walshe', 'aidan@engagedc.com');
  createPerson('Erik', 'Rapprich', 'erik@engagedc.com');
  createPerson('Darby', 'Rosseau', 'darby@engagedc.com');
  createPerson('Patrick', 'Ruffini', 'patrick@engagedc.com');
  createPerson('Nick', 'Schaper', 'nick@engagedc.com');
  createPerson('Ryan', 'Slater', 'ryan@engagedc.com');
  createPerson('Jeff', 'Waddell', 'jeff@engagedc.com');
  createPerson('Mimi', 'Wertz', 'mimi@engagedc.com');


  echo '<p>Create a location</p>';
  createLocation('Front office closet', 15);
  createLocation('Back office closet', 15);
  createLocation('Ben\'s super secret compartment', 2);
  createLocation('Dev area left gun rack', 10);
  createLocation('Dev area left right rack', 10);
  createLocation('Bathroom', 3);

  echo '<p>Create a gun</p>';
  createGun('NerfBlaster 3000', 150, '2016-05-14', 1);
  createGun('NerfFury 2.5', 6, '2016-06-14', 5);
  createGun('Rinky Dink HandGun', 5, '2016-07-11', 7);
  createGun('Rinky Dink HandGun 2.0', 5, '2016-07-15', 6);
  createGun('Devil\'s Revent Blaster', 15, '2016-05-14', 2);


  echo '<p>Check in a gun</p>';
  checkOut(3,3);
  checkOut(2,4);
  checkOut(1,4);
  checkOut(4,7);

  echo '<p>Check in gun</p>';

  echo '<h3>Your updates are finished.</h3>';
  echo '<p><a href="2a_neft_display.php" taget="_blank">Show results</a></p>';