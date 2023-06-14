<?php
session_start();
require_once '../Model/usuario.php';
// Se obtiene los datos del coche mediante la matricula
$data['usuario'] = Usuario::getUsuarioPorId($_SESSION['usuario']);
// print_r($data['usuario']);
require_once '../View/header.php';
include '../View/formularioEdit.php';
include_once '../View/footer.php';
