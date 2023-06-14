<?php
session_start();
require_once '../Model/usuario.php';
// Actualiza los valores
$coche = new Usuario($_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['usuario'], $_POST['contrasena']);
$coche->update();
$_SESSION['usuario'] = $_POST['usuario'];
$_COOKIE['usuario'] = $_POST['usuario'];
$_SESSION['login'] = true;
setcookie('usuario', $_POST['usuario'], strtotime("+1 year"));
header("location: index.php");
