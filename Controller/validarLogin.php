<?php
session_start();
require_once '../Model/usuario.php';
// Comprueba que el usuario esta registrado y la contraseña es correcta
$comprobar = new Usuario($_POST['usuario']);
$usuario = $comprobar->comprobarLogin($_POST['usuario'], $_POST['password']);
if (!empty($usuario)) {
  $_SESSION['usuario'] = $_REQUEST['usuario'];
  $_COOKIE['usuario'] = $_REQUEST['usuario'];
  $_SESSION['login'] = true;
  setcookie('usuario', $_REQUEST['usuario'], strtotime("+1 year"));
  header("location: index.php");
} else {
  $_SESSION['login'] = false;
  header("location: login.php");
}
