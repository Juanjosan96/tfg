<?php
// Cierra sesion y las cookies
session_start();
session_destroy();
setcookie('usuario',null,-1);
setcookie('rol',null,-1);
header("location: index.php");
?>