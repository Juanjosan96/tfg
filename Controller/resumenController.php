<?php 

session_start();
require_once '../Model/usuario.php';
require_once '../View/header.php';
if(isset($_SESSION["usuario"])){
    $usuario = Usuario::datosUsuario($_SESSION["usuario"]); 

}
include_once '../View/resumen.php';
include_once '../View/footer.php';
?>