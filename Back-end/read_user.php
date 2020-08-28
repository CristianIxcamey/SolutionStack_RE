<?php
class reader
{
  public function read($tableName)
  {
    include_once 'database.php';

    $userId = $_COOKIE['login'];
    $database = new Database();
    $connectionDB = $database->ConnectToDatabase();

    $sql = "SELECT * FROM reviews WHERE userId='$userId'";

    $result = $connectionDB->query($sql);
    $dataArray["data"] = array();
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        extract($row);
        $dataItem = array(
          "id" => $id,
          "movieId" => $movieId,
          "userId" => $userId,
          "movieName" => $movieName,
          "username" => $username,
          "rating" => $rating,
          "description" => $description,
        );
        array_push($dataArray["data"], $dataItem);
      }
      return $dataArray;
    } else {
      // none found
    }
  }
}
