<?php
class reviewDelete
{
    
    /**
     * $movieReview Structure = { movieId: S, rating: N, reviewMessage: S}
     */
    public function deleteReview($reviewId)
    {
        include_once 'database.php';
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
