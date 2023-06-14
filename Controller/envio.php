<?php
require_once '../Model/usuario.php';
require_once '../Model/butaca.php';

// INSERTAR VALORES
session_start();
$array = json_decode($_POST['unicos'], true);
$primerArray = explode(".", $array, 2);

$_SESSION['butacas']=$primerArray[1];

if(isset($_SESSION['usuario'])){
    $id = Usuario::numeroDeId($_SESSION['usuario']);
    $obtenerid=$id->id_usuario;
}

$arraySeparado = explode(",", $primerArray[0]);
foreach (explode(",", $primerArray[0])as $valor) {
    
if(isset($_SESSION['usuario'])){
    $butaca = new Butaca(900,$obtenerid,$valor);
    $butaca->insertButaca();
}
else{
    $butaca = new Butaca(900,0,$valor);
    $butaca->insertButaca();
}


}
// echo '<script>window.location.href = "resumen.php";</script>';
exit;
?> 