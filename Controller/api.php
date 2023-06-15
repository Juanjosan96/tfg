<?php
$apiKey = 'af7c648ad91e2a16f2da39da7b7f3f54';
$headers = array(
    'apikey: ' . $apiKey,
);
// Acesso a la cartelera actual
$ch = curl_init('https://api.themoviedb.org/3/movie/now_playing?api_key=af7c648ad91e2a16f2da39da7b7f3f54&language=es-ES&page=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
$result = json_decode($response);
$array_valores = [];
$array_id = [];
$contador = count($result->results);
$total=0;

    //DETALLES DE LA PELICULA
if(isset($movie_id)){
    $chmovie = curl_init("https://api.themoviedb.org/3/movie/$movie_id?api_key=af7c648ad91e2a16f2da39da7b7f3f54&language=es-ES");
    curl_setopt($chmovie, CURLOPT_RETURNTRANSFER, 1);
    $responsemovie = curl_exec($chmovie);
    $resultmovie = json_decode($responsemovie);

    // DETALLES DEL TRAILER
if(empty($resultmovie->results)){
    $trailer = curl_init("https://api.themoviedb.org/3/movie/$movie_id/videos?api_key=af7c648ad91e2a16f2da39da7b7f3f54");
curl_setopt($trailer, CURLOPT_RETURNTRANSFER, 1);
$responsetrailer = curl_exec($trailer);
$resultmovietrailer = json_decode($responsetrailer);
}
}





