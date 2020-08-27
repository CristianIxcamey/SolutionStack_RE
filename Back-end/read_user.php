<?php
  $userId = $_COOKIE['login'];

  include_once 'database.php';
  $database = new Database();
  $connectionDB = $database->ConnectToDatabase();

  $sql = "SELECT * FROM reviews WHERE username='$userId'";

  $result = $connectionDB->query($sql);
  if ($result->num_rows > 0) {
    // return results
  } else {
    // error
  }
?>
