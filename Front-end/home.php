<!-- Requires and pre-load page things -->
<?php
require "header.php";
?>

<link rel="stylesheet" type="text/css" href="style.css">

<div class="page">

    <div class="top">
        <h1>Welcome to Review Everything</h1>
        <p>You can search for any movie you seen and write a review for it.</p>
    </div>

    <div id="popular" class="outer moviesContent">
        <h2>Popular Movies</h2>

        <div class="inner">
            <div class="movie" *ngFor='let movie of popular' [class.selected]="movie === selectedMovie"
                (click)='select(movie)'>
                <img src="{{imageBase}}{{size}}{{movie.poster_path}}" alt="{{movie.title}} poster" height="250">
                <h4>{{movie.title}}</h4>
            </div>
        </div>

    </div>

    <div id="genre" class="outer moviesContent">
        <h2>{{genreName}} <a href="/display/genre/{{genreName}}">See More ></a></h2>

        <div class="inner">
            <div class="movie" *ngFor='let movie of genre' [class.selected]="movie === selectedMovie"
                (click)='select(movie)'>
                <img src="{{imageBase}}{{size}}{{movie.poster_path}}" alt="{{movie.title}} poster" height="250">
                <h4>{{movie.title}}</h4>
            </div>
        </div>
    </div>

    <!-- <div id="keyword" class="outer"></div> -->
</div>

<!-- Requires and pre-load page things -->
<?php
require "footer.php";
?>