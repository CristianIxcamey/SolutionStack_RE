<?php
// These are all the headers to make sure that there are no issues when using the api
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");

//this imports the connector as well as the contractor class 
include_once './database.php';
class reviewDelete
{

    /**
     * $movieReview Structure = { movieId: S, rating: N, reviewMessage: S}
     */
    public function deleteReview($reviewId)
    {
        $database = new Database();
        $connectionDB = $database->ConnectToDatabase();
        $sql = "DELETE FROM `reviews` WHERE `id` = '" . $reviewId . "'";
        if ($connectionDB->query($sql) === true) {
            return "review was Deleted";
        } else {
            return "Error Deleting review: " . $connectionDB->error;
        }
    }
}
