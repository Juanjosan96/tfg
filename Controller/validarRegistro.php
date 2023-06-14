<?php
session_start();
require_once '../Model/usuario.php';
// Comprueba que no existe el usuario que va a registrar y se inserta en la BD
$comprobar = new Usuario($_POST['usuario']);
$usuario=$comprobar->comprobarRegistro($_POST['usuario']);

if(!$usuario){
    $_SESSION['usuario'] = $_POST['usuario'];
    $_COOKIE['usuario'] = $_POST['usuario'];
    $_SESSION['repetido']=false;
    setcookie('usuario', $_POST['usuario'], strtotime("+1 year"));
    $usuario = new Usuario($_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['usuario'], $_POST['contrasena']);
    $usuario->insert();
    header("location: index.php");
}
else{
  $_SESSION['repetido']=true;
  header("location: registrar.php");
}








