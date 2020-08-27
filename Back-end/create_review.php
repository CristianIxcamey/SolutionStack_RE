<?php
// These are all the headers to make sure that there are no issues when using the api
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");

//this imports the connector as well as the contractor class 
include_once '../Back-end/database.php';
class reviewCreator
{

    /**
     * $movieReview Structure = { movieId: S, rating: N, reviewMessage: S}
     */
    public function writeReview($movieReview, $userid)
    {
        $reviewID = $movieReview->movieId . $userid;
        $database = new Database();
        $connectionDB = $database->ConnectToDatabase();
        $sql = "INSERT INTO `reviews` (`id`, `movieId`, `userId`, `rating`, `reviewMessage`, `movieName`) VALUES
         ('" . $reviewID . "', '" . $movieReview->movieId . "', '" . $userid . "', '" . $movieReview->rating . "', '" . $movieReview->reviewMessage . "', '" . $movieReview->movieName . "')";
        if ($connectionDB->query($sql) === true) {
            return "Record was Created";
        } else {
            return "Error updating record: " . $connectionDB->error;
        }
    }
}
