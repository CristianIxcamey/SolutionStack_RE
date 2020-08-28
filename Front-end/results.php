<?php
require "header.php";
//getting search result
  $search = $_POST['title']; 

//getting movie from search
  include '../Back-end/movieAPI.php';
$movie = new MovieApi();
$movieData = $movie->getMovies($search);
$results = $movieData->results;
?>
<div class="top">
<h1 id="banner" class="homeHeader">Showing Results for <?php echo $search ?></h1>
</div>
<div id="popular" class="moviesContent">
<?php
foreach($results as $movie){

 //Getting movie data
$movieName = $movie->original_title;
$moviePoster = "https://image.tmdb.org/t/p/original".$movie->poster_path;
$movieId = $movie->id;

if (strlen($movieName)>19) {
    $movieName = substr($movieName, 0, 19);
    $movieName = $movieName.'...';
}

echo "<div class='inner'>";
echo "<a class='movie' href='movie.php?id=$movieId'>";
echo "<img class='homeMoviePoster' src='$moviePoster' alt='$movieName poster'>";
echo "<h4 class='homeMovieTitle'>$movieName</h4>";
echo "</a>";
echo "</div>";

}
?>
</div>


<!-- Requires and pre-load page things -->
<?php
require "footer.php";
?>