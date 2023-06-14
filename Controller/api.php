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
$prueba = '';
$contador = count($result->results);
    // $ch = curl_init('https://api.themoviedb.org/3/movie/now_playing?api_key=af7c648ad91e2a16f2da39da7b7f3f54&language=es-ES&page=1');
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // $response = curl_exec($ch);
    $result2 = json_decode($response);
    $total=0;




