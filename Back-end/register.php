<?php
$username = $_POST["username"];
$password = $_POST["password"];

include_once 'database.php';
$database = new Database();
$connectionDB = $database->ConnectToDatabase();

$sql = "INSERT INTO users (id, username, password) VALUES ('2', '$username', '$password')";
if ($connectionDB->query($sql) === TRUE) {
  $cookie_name = "login";
  setcookie($cookie_name, $username, time() + (86400 * 30), "/"); // 86400 = 1 day
  // header("Location: http://localhost:9090/SolutionStack_RE/Front-end/home.php");
  header("Location: http://sample:8008/ReviewEverythin/SolutionStack_RE/Front-end/home.php");
} else {
  // header("Location: http://localhost:9090/SolutionStack_RE/Front-end/login.php");
  header("Location: http://sample:8008/ReviewEverythin/SolutionStack_RE/Front-end/login.php");
}
mysqli_close($connectionDB);
