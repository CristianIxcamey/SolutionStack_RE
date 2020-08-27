<?php
include_once './create_review.php';
include_once './delete_review.php';
$review =  new stdClass();
$review->movieId = 'movieId123';
$review->rating = 5;
$review->reviewMessage = 'Movie was pretty great';

$reviewer = new reviewCreator();
$reviewDelete = new reviewDelete();

// $res = $reviewer->writeReview($review, "useridbleh");
$res = $reviewDelete->deleteReview("asdfasd");

echo $res;
