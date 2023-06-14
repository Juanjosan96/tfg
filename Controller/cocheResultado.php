<?php
session_start();
require_once '../Model/usuario.php';
// Muestra los datos de un solo coche
$movie_id=$_GET['movie'];
// $_SESSION['nombre']=$_GET['name'];
// print_r($matricula);
// die();
// $data['coches']=Usuario::getUsuarioPorId($matricula);
// $_SESSION['nombreUsuario']=$data['coches']->getMatricula();


    //DETALLES DE LA PELICULA
//   $ch = curl_init('https://api.themoviedb.org/3/movie/now_playing?api_key=af7c648ad91e2a16f2da39da7b7f3f54&language=es-ES&page=1');
$ch = curl_init("https://api.themoviedb.org/3/movie/$movie_id?api_key=af7c648ad91e2a16f2da39da7b7f3f54&language=es-ES");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
$result2 = json_decode($response);
//   print_r($result2);


$background = $result2->backdrop_path;
$titulo=$result2->title;
$sinopsis=$result2->overview;
$fecha_lanzamiento=$result2->release_date;
$duracion=$result2->runtime;
$genero=[];
$_SESSION['nombre']=$titulo;
foreach($result2->genres as $valor){
   
  array_push($genero,$valor->name);
      

}
// DETALLES DEL TRAILER
$ch = curl_init("https://api.themoviedb.org/3/movie/$movie_id/videos?api_key=af7c648ad91e2a16f2da39da7b7f3f54&language=es-ES");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    $result2 = json_decode($response);
    if(empty($result2->results)){
        $ch = curl_init("https://api.themoviedb.org/3/movie/$movie_id/videos?api_key=af7c648ad91e2a16f2da39da7b7f3f54");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    $result2 = json_decode($response);
    }

foreach($result2->results as $valor){
    if($valor->type=="Trailer"){
        $trailer = $valor->key;
    }
}

include '../View/result.php';


include '../View/footer.php';
?>
<script src="../View/js/fecha.js"></script>

