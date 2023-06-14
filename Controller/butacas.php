<?php 
session_start();
require_once '../Model/butaca.php';
if (isset($_POST['datos'])) {
  // Obtener los datos enviados
  $datos = json_decode($_POST['datos'], true);
  // Acceder a los valores individuales
  $fecha = $datos['fecha'];
  $hora = $datos['hora'];
  $cantidad = $datos['cantidad'];
  $precio = $datos['precio'];
  $_SESSION['fecha']=$fecha;
  $_SESSION['hora']=$hora;
  $_SESSION['precio']=$precio;
} else {

  // No se han recibido los datos esperados
  echo "No se han recibido los datos esperados.";
}




// die();
$_SESSION['butaca']=[];
$butaca1 = Butaca::getTodosButacas();
$array = [];
$salida = true;
$j = 0;
$countTotal = count($butaca1);
$countTotal--;
$ñ = 0;
$c = 0;
$resultEntrada = [];
$entrada = true;
$num_butaca;
$h = 0;
$ñ = 0;
$c = 0;
$resultEntrada = [];
$entrada = true;
$num_butaca;
$totalSeats = 60;
$rows = 6;
$columns = 10;
$middleColumn = ceil($columns / 2)+1;
$h = 0;        
include_once '../View/butacasprueba.php';

?>
<script>
var cantidad = <?php echo $cantidad; ?>;
</script>
<?php
 require_once '../View/footer.php';

?>