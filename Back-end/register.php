<?php
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "INSERT INTO FROM users (email, password) VALUES ('$email', '$password')";
?>
