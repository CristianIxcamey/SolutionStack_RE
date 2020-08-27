<?php
  $username = $_POST["username"];
  $password = $_POST["password"];

  include_once 'database.php';
  $database = new Database();
  $connectionDB = $database->ConnectToDatabase();
  $resultArray = array();

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

  $result = $connectionDB->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultArray[] = $row;
    }
    $cookie_name = "login";
    setcookie($cookie_name, $resultArray["0"]["id"], time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location: http://localhost:9090/SolutionStack_RE/Front-end/home.php");
  } else {
    header("Location: http://localhost:9090/SolutionStack_RE/Front-end/login.php");
  }
?>
