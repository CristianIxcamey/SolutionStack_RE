<?php
include_once './create_review.php';
$review =  new stdClass();
$review->movieId = 'movieId123';
$review->rating = 5;
$review->reviewMessage = 'Movie was pretty great';

$reviewer = new reviewCreator();

// $res = $data->read("about");
$res = $reviewer->writeReview($review, "useridbleh");
