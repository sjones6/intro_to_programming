<?php

/**** GET information from database ***/

  /**
  * Returns an array of all guns in all locations
  *
  * @return array of guns, each array element is the array represents the gun including id, name, ammo_count, date_purchased, and location id
  */
  function getGuns() {
    return DB::query("SELECT * FROM guns order by name");
  }

  /**
  * Returns an array of all people registered in the system
  *
  * @return array of people, each array element is the array represents the person including id, first name, and email
  */
  function getPeople() {
    return DB::query("SELECT * FROM people ORDER BY last_name, first_name");
  }

  /**
  * Returns an array of all location registed in the system
  *
  * @return array of locations, each array element is the array represents the location including id, desciption, and capacoty
  */
  function getLocations() {
    return DB::query("SELECT * FROM locations order by description");
  }

  /**
  * Returns an array of all checkouts
  *
  * @return array of checkouts, each element being an array of the checkout including id, gun_id, people_id time_checked_out, time_checked_in first_name, last_name, email, name, ammo_count, date_purchased, location_id description capacity
 */
 function getCheckouts() {
    return DB::query("SELECT * FROM checkouts JOIN (people, guns, locations) ON (people.id = checkouts.people_id and guns.id = checkouts.gun_id and locations.id = guns.location_id) ORDER by time_checked_out DESC");
  }

  /**
  * Returns an array of guns that are currently checked out
  *
  * @return array of guns that are currently checked out, each array element is the array represents the gun including id, name, ammo_count, date_purchased, and location id
 */
  function getCheckedOutGuns() {
    return DB::query("SELECT DISTINCT guns.* FROM guns, checkouts where checkouts.time_checked_in IS NULL and checkouts.gun_id = guns.id");
  }

  /**
  * Returns an array of guns that are currently checked in
  *
  * @return array of guns that are currently checked in, each array element is the array represents the gun including id, name, ammo_count, date_purchased, and location id
 */
  function getCheckedInGuns() {
    return DB::query("SELECT guns.* FROM guns where id NOT IN (SELECT gun_id from checkouts where time_checked_in IS NULL)");
  }


/**** CREATE new entries in databse ***/

  /**
  * Creates a new gun record in the system
  *
  * @param string $name the name of the gun
  * @param integer $ammo_count how much ammo the gun can hold
  * @param string $date_purchased the date the gun was purchased in Y-m-d format
  * @param integer $location the location ID of the gun
  *
  * @return boolean true on success, false on failure
 */
  function createGun($name, $ammo_count, $date_purchased, $location) {
    DB::insert('guns', array(
      'name' => $name,
      'ammo_count' => $ammo_count,
      'date_purchased' => $date_purchased,
      'location_id' => $location,
    ));

    return true;
  }

  /**
  * Creates a new person record in the system
  *
  * @param string $first_name the first name of the person
  * @param string $last_name the last name of the person
  * @param string $email the email address of the person
  *
  * @return boolean true on success, false on failure
 */
  function createPerson($first_name, $last_name, $email) {
    DB::insert('people', array(
      'first_name' => $first_name,
      'last_name' => $last_name,
      'email' => $email,
    ));

    return true;
  }

  /**
  * Creates a new location record in the system
  *
  * @param string $desription the description of the location
  * @param integer $capacity the capacity of the location
  *
  * @return boolean true on success, false on failure
 */
  function createLocation($description, $capacity) {
    DB::insert('locations', array(
      'description' => $description,
      'capacity' => $capacity,
    ));

    return true;
  }

/**** Check IN and Check OUT ***/

  /**
  * Checks a gun out
  *
  * @param integer $gun_id the ID of the gun to check out
  * @param integer $people_id the ID of the person checking out the gun
  *
  * @return boolean true on success, false on failure
 */
  function checkOut($gun_id, $people_id) {

    $check = DB::query("SELECT * FROM checkouts where gun_id = %i AND time_checked_in IS NULL", $gun_id );
    if (count($check) > 0) {
      echo 'ERROR: This gun is already checked out';
      return false;
    }

    DB::insert('checkouts', array(
      'gun_id' => $gun_id,
      'people_id' => $people_id,
      'time_checked_out' => date('Y-m-d H:i:s', time() - 60*60*6),
    ));

    return true;
  }


  /**
  * Checks a gun out
  *
  * @param integer $checkout_id the ID of the checkout to check back in
  *
  * @return boolean true on success, false on failure
 */
  function checkIn($checkout_id) {
    DB::update('checkouts', array(
      'time_checked_in' => date('Y-m-d H:i:s', time() - 60*60*6),
    ), "id=%s", $checkout_id);
    return true;
  }



/*** Helper functions ***/

  /**
  * Format a multi-dimensional array as a table and output to the screen
  *
  * @param array $data array of data, each element containing columns of a row
  *
  * @return void
 */
  function formatDataAsTable($data) {

    if (count($data)<=0) {
      echo '<p>There are no rows.</p>';
      return;
    }

    echo '<table class="table">';
    echo '<tr>';
    foreach ($data[0] as $key => $value) {
      echo '<th>' . $key . '</th>';
    }
    echo '</tr>';
    foreach ($data as $datum) {
      echo '<tr>';
      foreach ($datum as $column) {
        echo '<td>' . $column . '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
  }





/*** let's initialize **/
require_once('../config/config.php');
require_once('meekro.php');
DB::$user = 'root';
DB::$password = 'root';
DB::$dbName = 'nerf';

