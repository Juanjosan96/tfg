<?php
require_once '../Model/usuario.php';
require_once '../Model/butaca.php';
require_once '../Model/entrada.php';

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
// Crea los datos en la BD en butaca

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

// Creación de entradas
if(isset($_SESSION['usuario'])){
    $entrada=new Entrada(900,$obtenerid,$_SESSION['nombre'],$_SESSION["butacas"], $_SESSION["fecha"],$_SESSION["hora"],$_SESSION["precio"]);
    $entrada->insertEntrada();

}
else{
    $entrada=new Entrada(900,0,$_SESSION['nombre'],$_SESSION["butacas"], $_SESSION["fecha"],$_SESSION["hora"],$_SESSION["precio"]);
    $entrada->insertEntrada();

}

exit;
?> 