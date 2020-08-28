<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review A lot</title>
</head>

<?php
$movieId = $_GET['id'];
include '../Back-end/movieAPI.php';
$movie = new MovieApi();
$movieData = $movie->getMovieData($movieId);
// echo json_encode($movieData);

$userId = $_COOKIE['login'];
$username = $_COOKIE['username'];

$movieName = $movieData->original_title;
$moviePoster = "https://image.tmdb.org/t/p/original".$movieData->poster_path;
$movieDescription = $movieData->overview;
?>

<body>

    <div class="movieHolder">
        <div class="moviePoster">
            <img src="<?php echo "$moviePoster"; ?>" alt="moviePoster">
        </div>
        <div class="movieData">
            <h1 class="movieName"><?php echo "$movieName"; ?></h1>
            <p class="movieDes"><?php echo "$movieDescription"; ?></p>
        </div>
    </div>

    <form name="form" action="../Back-end/create_review_post.php" method="post">
        <label for="rating">Review Rating:</label>
        <select name="rating" id="pages">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="text" name="reviewMessage" placeholder="Review Message">
        <input type='hidden' name='userId' value='<?php echo "$userId"; ?>' />
        <input type='hidden' name='movieid' value='<?php echo "$movieId"; ?>' />
        <input type='hidden' name='movieName' value='<?php echo "$movieName"; ?>' />
        <input type='hidden' name='username' value='<?php echo "$username"; ?>' />
        <input type="submit" name="submit" value="Create Review" />
    </form>
    <?php
    include '../Back-end/read_movie.php';
    $data = new reader();
    // Get movie id out of url
    $res = $data->read($movieId);

    foreach ($res["data"] as $id => $content) {
        echo "<div>";
        echo "<h3 class='reviewTitle'>$content[username] - $content[rating] out of 5 stars</h3>";
        echo "<p class='reviewDescription'>$content[description]";
        echo "</div>";
    }
    ?>

</body>

</html>