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
  if ($res) {
    foreach ($res["data"] as $id => $content) {
      echo "<div>";
      echo "<form action='../Back-end/handle_delete.php' method='post'>";
      echo "<input type='hidden' name='id' value='$content[id]'/>";
      echo "<h3 class='reviewTitle'>$content[username] - $content[rating] out of 5 stars <input type='submit' name='submit' value='Delete' />";
      echo "<p class='reviewDescription'>$content[description]";
      echo "</form>";
      echo "</div>";
    }
  } else {
    echo "<p>You have no reviews</p>";
  }
  ?>
</div>

</html>