<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../View/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../View/css/app.css">
    <link rel="stylesheet" type="text/css" href="../View/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../View/css/normalize.css">
    
</head>


<?php

require_once '../View/header.php';

?>

<body>

    <section class="info-pelicula" id="infoPelicula" style="background-image: url('https://image.tmdb.org/t/p/w1920_and_h800_multi_faces//<?=$background?>');"><div class="bg-color">
    <div class="info-pelicula__container">
      <div class="container__trailer">
        <iframe class="youtube-video" src="https://www.youtube.com/embed/<?=$trailer?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
      </div>
      <div class="container__info">
        <h2><?php print_r($titulo);?></h2>
        <span>
          <i class="far fa-bookmark"></i>   
         Género: <?php $texto = implode(", ", $genero); 
         echo $texto;
          ?>
        </span>
        <span>
          <i class="far fa-calendar-alt"></i>Estreno: <?php print_r($fecha_lanzamiento);?>
        </span>
        <span>
          <i class="far fa-clock"></i>Duración: <?php print_r($duracion);?> min
        </span>
        <h3 class="sinop">Sinopsis</h3>
        <h3 class="sinopsis">
        <?php print_r($sinopsis);?>  
        </h3>
    </div>
  </div></section>

<div class="datos">
    <h2>Seleccione una fecha:</h2>
    <div class="bloque-container">

        <div class="bloque bloque-fecha" onclick="mostrarInformacionFecha(this)"></div>
        <div class="bloque bloque-fecha" onclick="mostrarInformacionFecha(this)"></div>
        <div class="bloque bloque-fecha" onclick="mostrarInformacionFecha(this)"></div>
        <div class="bloque bloque-fecha" onclick="mostrarInformacionFecha(this)"></div>
        <div class="bloque bloque-fecha" onclick="mostrarInformacionFecha(this)"></div>
    </div>

    <h2>Seleccione una hora:</h2>
    <div class="bloque-container">
        <div class="bloque bloque-hora" onclick="mostrarInformacionHora(this)">09:00</div>
        <div class="bloque bloque-hora" onclick="mostrarInformacionHora(this)">12:00</div>
        <div class="bloque bloque-hora" onclick="mostrarInformacionHora(this)">15:00</div>
        <div class="bloque bloque-hora" onclick="mostrarInformacionHora(this)">18:00</div>
        <div class="bloque bloque-hora" onclick="mostrarInformacionHora(this)">21:00</div>
    </div>

    <h2>Selecciona una cantidad:</h2>
<div class="bloque-container">
  <div id="cantidad-container">
    <h2 class="cantidad-unidad">9€/Unidad</h2>
    <button id="boton-decrementar" onclick="decrementarCantidad()">-</button>
    <span id="cuadro-cantidad" data-cantidad="9">1</span>
    <button id="boton-incrementar" onclick="incrementarCantidad()">+</button>
  </div>
</div>

<h2><div id="result-container"></div></h2>
<button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"id="boton-enviar" onclick="enviarDatos()" disabled>Enviar</button>

</body>

</html>

