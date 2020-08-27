<?php
require "header.php";
include '../Back-end/read_user.php';
$data = new reader();
$userId = $_COOKIE['login'];
$username = $_COOKIE['username'];
if (!$userId) {
  header("Location: http://localhost:9090/SolutionStack_RE/Front-end/home.php");
}
$res = $data->read($userId);
?>

<div class='username'>
  <?php
    echo "<h1>$username</h1>";
  ?>
</div>

<div class='reviews'>
  <?php
    foreach ($res["data"] as $id => $content) {
      echo "<div>";
      echo "<h3 class='reviewTitle'>$content[username] - $content[rating] out of 5 stars</h3>";
      echo "<p class='reviewDescription'>$content[description]";
      echo "</div>";
    }
  ?>
</div>

</html>