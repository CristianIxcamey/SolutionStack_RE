<?php
require "header.php";
?>

<div>
  <?php
    include '../Back-end/read_user.php';
    $data = new reader();
    // Get movie id out of url
    $res = $data->read("1");

    foreach ($res["data"] as $id => $content) {
      echo "<div>";
      echo "<h3 class='reviewTitle'>$content[username] - $content[rating] out of 5 stars</h3>";
      echo "<p class='reviewDescription'>$content[description]";
      echo "</div>";
    }
  ?>
</div>

</html>