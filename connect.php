<?php
  $con = new mysqli('localhost', 'heitor', '12345', 'CRUD');

  if (!$con) {
    die('Connection failed:' . mysqli_connect_error());
  }
?>
