<?php
require "./movieAPI.php";
$api = new MovieApi();

$title = $_POST['title'];
$searchBy = $_POST['searchBy'];

$searchResults = $api->getMovies($title);
setcookie("Search Result", $searchResults, time() + (86400 * 30), "/"); // 86400 = 1 day





?>
