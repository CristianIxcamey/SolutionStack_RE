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

<h1 id="banner">Showing Results for <?php echo $search ?></h1>
<ul id='allMovies'>
<?php
foreach($results as $movie){

 //Getting movie data
$movieName = $movie->original_title;
$moviePoster = "https://image.tmdb.org/t/p/original".$movie->poster_path;
$movieId = $movie->id;

echo     "<li *ngFor='let movie of list' [class.selected]='movie === selectedMovie' class='movie'>";
//     <!-- printing list of movies that are clickable  -->
echo         "<div class='clickableMovie'>";
echo "<a href='movie.php?id=$movieId>'";
echo             "<div class='moviePosterSection' *ngIf='movie.poster_path != null; else defaultPoster'>";
echo                 "<img class='poster' src=$moviePoster alt='$movieName poster'
                     height='150' weight='75' />";
echo             '</div>';
echo "</a>";


echo             "<h2 class='movieTitle'>$movieName</h2>";
echo             '</div>';
echo     '</li>';
}
?>
</ul>

</body>

</html>