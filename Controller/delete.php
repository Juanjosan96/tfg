<?php
session_start();
require_once '../Model/usuario.php';
$data['coche'] = Usuario::getUsuarioPorIdBorrado($_SESSION['usuario']);
$data['coche']->delete($_SESSION['usuario']);
header("location: cerrar.php");

