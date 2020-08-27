<?php
include_once './create_review.php';
$review =  new stdClass();
$review->movieId = $_POST['movieid'];
$review->rating = $_POST['rating'];
$review->reviewMessage = $_POST['reviewMessage'];
$review->movieName = $_POST['movieName'];

$reviewer = new reviewCreator();

$res = $reviewer->writeReview($review, $_POST['userId']);

// header("Location: http://localhost:9090/SolutionStack_RE/Front-end/movie.php");
header("Location: http://sample:8008/ReviewEverythin/SolutionStack_RE/Front-end/movie.php");
