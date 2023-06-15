<?php
// Crear sesiones de rol y login
session_start();
$_SESSION['repetido'] = false;
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = true;
}
require_once '../View/header.php';
include '../View/index.php';
include_once '../View/footer.php';



