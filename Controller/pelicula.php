<?php
session_start();
require_once '../Model/usuario.php';
$movie_id=$_GET['movie'];

require "../Controller/api.php";
// Se obtiene los datos de la pelicula mediante la API
$background = $resultmovie->backdrop_path;
$titulo=$resultmovie->title;
$sinopsis=$resultmovie->overview;
$fecha_lanzamiento=$resultmovie->release_date;
$duracion=$resultmovie->runtime;
$genero=[];
$_SESSION['nombre']=$titulo;
foreach($resultmovie->genres as $valor){
  array_push($genero,$valor->name);
}

foreach($resultmovietrailer->results as $valor){
    if($valor->type=="Trailer"){
        $trailer = $valor->key;
    }
}

include '../View/result.php';
include '../View/footer.php';
?>
<script src="../View/js/fecha.js"></script>

