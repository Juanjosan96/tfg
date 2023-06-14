<!DOCTYPE html>
<?php
require_once '../View/header.php';
?>

<body>
        <div id="container">
    <div id="seating">

    <h1 class="pantalla text-xl">Pantalla/Escenario</h1>
      <?php

        for ($i = 1; $i <= 6; $i++) {
            echo '<div class="row">';
            echo '<div class="row-number">' . $i . '</div>'; // Agrega el número de fila
            $num_butaca=1;
            $salida = true;

            for ($j = 1; $j <= 10; $j++) {
                $num_butaca++;
                $h++;
                if ($j == $middleColumn) {
                  echo '<div class="gap"></div>'; // Separacion de las columnas
                }
                if ($countTotal >= $c && $entrada) {
                         if (!empty($butaca1[0])&&$h == $butaca1[$c]->getnumero()) {
                        $c++;
                        array_push($resultEntrada, $h);
                        ?>
        <div class="row-number"><img alt="" src='../View/img/butacaRoja.PNG?valor=<?=$h?> ' onclick="red(this)" id="color<?=$h?> "  class="<?=$i?>,<?=$j?> "  /></div>
                <?php
        } 
      else {
                        ?>
        <div class="row-number"><img alt="" src='../View/img/butacaGris.PNG?valor=<?=$h?> ' onclick="red(this)" id="color<?=$h?>" class="<?=$i?>,<?=$j?> "  /></div>
        <?php
        }
                } else {
                    ?>
        <?php
        $entrada = false;
                }        
            }
        
            echo '</div>';
        }
        ?>


    </div>
    <div id="summary">
      <h2>Resumen</h2>
      <ul id="selectedSeats"></ul>
      <button id="enviarDatos" class="buy-button" onclick="envio()">Comprar</button>
    </div>
  </div>
    <script type="text/javascript"></script>

    <div id="container-icons">
      <div class="icons">
        <span>Disponible:</span><img src="../View/img/butacaGris.PNG" alt="Icon 1">
        <span>Ocupado:</span><img src="../View/img/butacaRoja.PNG" alt="Icon 1">
        <span>Seleccionado:</span><img src="../View/img/butacaVerde.PNG" alt="Icon 1">
      </div>
    </div>
 <?php 
 

 ?>
</body>
</html>

