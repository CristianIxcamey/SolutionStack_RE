<?php
// These are all the headers to make sure that there are no issues when using the api
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Headers: access");
// header("Access-Control-Allow-Methods: GET");
// header("Access-Control-Allow-Credentials: true");

$start = 'https://api.themoviedb.org/3/';
$key = '?api_key=917bf8547464514e193b8bc4841df69c';

class MovieApi{

    public function getMovies($search){
        $movies = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=917bf8547464514e193b8bc4841df69c&query={$search}");
        $movies = json_decode($movies);
        return $movies;
    }

    public function getMovieData($id)
    {
        $movies = file_get_contents("https://api.themoviedb.org/3/movie/530915?api_key=917bf8547464514e193b8bc4841df69c");
        $movies = json_decode($movies);
        return $movies;
    }


}


?>