<?php
  require_once('../config/config.php');
  require_once('nerf_library.php');
?>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">

<?php


  echo '<h1>People</h1>';
  formatDataAsTable(getPeople());

  echo '<h1>Guns</h1>';
  formatDataAsTable(getGuns());

  echo '<h1>Locations</h1>';
  formatDataAsTable(getLocations());

  echo '<h1>Checkouts</h1>';
  formatDataAsTable(getCheckouts());

  echo '<h1>Guns Currently Checked Out</h1>';
  formatDataAsTable(getCheckedOutGuns());

  echo '<h1>Guns Currently Checked In</h1>';
  formatDataAsTable(getCheckedInGuns());



  ?>
    </div>
  </body>
</html>