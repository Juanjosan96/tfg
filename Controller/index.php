<?php
// Crear sesiones de rol y login
session_start();
$_SESSION['repetido'] = false;
if (!isset($_COOKIE['rol'])) {
    $_SESSION['rol'] = '';
    $_COOKIE['rol'] = '';
}
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = true;
}
if (!isset($_SESSION['matricularepe'])) {
    $_SESSION['matricularepe'] = '';
}
// $data['coche'] = Coche::getCocheUltimos();
require_once '../View/header.php';
include '../View/index.php';
include_once '../View/footer.php';



