<!-- Requires and pre-load page things -->
<?php
require "header.php";

include '../Back-end/movieAPI.php';
$movie = new MovieApi();
$moviesData = $movie->getTrending();
?>

<link rel="stylesheet" type="text/css" href="style.css">

<div class="homePage">

    <div class="top">
        <h1>Welcome to Review Everything</h1>
        <p>You can search for any movie you seen and write a review for it.</p>
    </div>

    <h2 class="homeHeader">Popular Movies</h2>
    <div id="popular" class="moviesContent">
        <?php
        $temp = 0;
        foreach ($moviesData->results as $id => $content) if ($temp++ < 12) {
            $title = $content->original_title;
            if (strlen($title)>19) {
                $title = substr($title, 0, 19);
                $title = $title.'...';
            }
            echo "<div class='inner'>";
            echo "<a class='movie' href='movie.php?id=$content->id'>";
            echo "<img class='homeMoviePoster' src='https://image.tmdb.org/t/p/original/$content->poster_path' alt=''>";
            echo "<h4 class='homeMovieTitle'>$title</h4>";
            echo "</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<!-- Requires and pre-load page things -->
<?php
require "footer.php";
?>