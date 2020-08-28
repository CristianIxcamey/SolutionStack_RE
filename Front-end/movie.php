<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review A lot</title>
    <link type="text/css" rel="stylesheet" href="./style.css">
    <link href="style.css" media="all" rel="stylesheet" type="text/css" />
</head>

<?php
require "header.php";
$movieId = $_GET['id'];
if (!$movieId) {
    header("Location: http://localhost:9090/SolutionStack_RE/Front-end/results.php");
}
include '../Back-end/movieAPI.php';
$movie = new MovieApi();
$movieData = $movie->getMovieData($movieId);
// echo json_encode($movieData);

$userId = $_COOKIE['login'];
$username = $_COOKIE['username'];

$movieName = $movieData->original_title;
$moviePoster = "https://image.tmdb.org/t/p/original" . $movieData->poster_path;
$backgroundPoster = "https://image.tmdb.org/t/p/original" . $movieData->backdrop_path;
$movieDescription = $movieData->overview;
?>

<body>
    <img class="backImg" src="<?php echo "$backgroundPoster"; ?>">
    <div class="movieHolder">
        <img class="moviePoster" src="<?php echo "$moviePoster"; ?>" alt="moviePoster">
        <div class="movieData">
            <h1 class="movieName"><?php echo "$movieName"; ?></h1>
            <p class="movieDes"><?php echo "$movieDescription"; ?></p>
        </div>
    </div>

    <div class="writeReview">
        <h2>Write A Review</h2>
        <form class="reviewForm" name="form" action="../Back-end/create_review_post.php" method="post">
            <div class="ratingSection">
                <label for="rating">Review Rating:</label>
                <select name="rating" id="pages">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <input class="textInput" type="textarea" name="reviewMessage" placeholder="Review Message">
            <input type='hidden' name='userId' value='<?php echo "$userId"; ?>' />
            <input type='hidden' name='movieid' value='<?php echo "$movieId"; ?>' />
            <input type='hidden' name='movieName' value='<?php echo "$movieName"; ?>' />
            <input type='hidden' name='username' value='<?php echo "$username"; ?>' />
            <input class="submitReview" type="submit" name="submit" value="Create Review" />
        </form>
    </div>

    <div class="allReviews">

        <?php
        include '../Back-end/read_movie.php';
        $data = new reader();
        // Get movie id out of url
        $res = $data->read($movieId);
        if ($res) {
            foreach ($res["data"] as $id => $content) {
                foreach ($res["data"] as $id => $content) {
                    echo "<div class= 'review'>";
                    echo "<h2 class='username'>$content[username]</h2>";
                    echo "<h3 class='reviewTitle'>$content[rating] out of 5 stars</h3>";
                    echo "<p class='reviewDescription'>$content[description]";
                    echo "</div>";
                }
            }
        } else {
            echo "<p>There are no reviews</p>";
        }
        ?>


    </div>
</body>

</html>