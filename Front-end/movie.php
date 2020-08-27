<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    include '../Back-end/read_movie.php';
    $data = new reader();
    // Get movie id out of url
    $res = $data->read("1234");

    foreach ($res["data"] as $id => $content) {
      echo "<div>";
      echo "<h3 class='reviewTitle'>$content[username] - $content[rating] out of 5 stars</h3>";
      echo "<p class='reviewDescription'>$content[description]";
      echo "</div>";
    }
  ?>
</body>
</html>