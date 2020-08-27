<?php
include_once './create_review.php';
include_once './delete_review.php';
$review =  new stdClass();
$review->movieId = 'movieId123';
$review->rating = 5;
$review->reviewMessage = 'Movie was pretty great';
$review->movieName = '1917';

$reviewer = new reviewCreator();
$reviewDelete = new reviewDelete();

$res = $reviewer->writeReview($review, "useridbleh");
// $res = $reviewDelete->deleteReview("movieId123useridbleh");

echo $res;
