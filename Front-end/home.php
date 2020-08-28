<!-- Requires and pre-load page things -->
<?php
require "header.php";

include '../Back-end/movieAPI.php';
$movie = new MovieApi();
$moviesData = $movie->getTrending();
?>


<div class="page">

    <div class="top">
        <h1>Welcome to Review Everything</h1>
        <p>You can search for any movie you seen and write a review for it.</p>
    </div>

    <h2>Popular Movies</h2>
    <div id="popular" class="outer moviesContent">
        <?php
        $temp = 0;
        foreach ($moviesData->results as $id => $content) if ($temp++ < 10) {
            echo "<div class='inner'>";
            echo "<a class='movie' href='movie.php?id=$content->id'>";
            echo "<img src='https://image.tmdb.org/t/p/original/$content->poster_path' alt='' height='250'>";
            echo "<h4>$content->original_title</h4>";
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