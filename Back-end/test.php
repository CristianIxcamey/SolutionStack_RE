<?php
include_once './create_review.php';
include_once './delete_review.php';
include_once './read_movie.php';
$review =  new stdClass();
$review->movieId = 'movieId123';
$review->rating = 5;
$review->reviewMessage = 'Movie was pretty great';
$review->movieName = '1917';
$review->username = 'buttasdf';

$reviewer = new reviewCreator();
$reviewDelete = new reviewDelete();
$movieReader = new reader();

// $res = $movieReader->read("newMovie123");
$res = $reviewer->writeReview($review, "useridbleh");
// $res = $reviewDelete->deleteReview("movieId123useridbleh");

echo $res;
