


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../View/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../View/css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../View/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../View/css/fontawesome-all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../View/js/funciones.js"></script>
    <script src="https://kit.fontawesome.com/aeab091674.js" crossorigin="anonymous"></script>

</head>
<body>
<header></header>
    <div class="hero">
        <div class="logo">
            <img class="logo__img" src="../View/img/logo.svg" alt="logo" onclick="redireccionar()">
            <span class="logo__span" onclick="redireccionar()">CineDaw</span>
        </div>

        <div class="nav-hero">
            <a href="../Controller/index.php">Cartelera</a>
            <?php
if (isset($_COOKIE['rol'])) {
    if ($_COOKIE['rol'] == 'administrador') {
        ?>
                    <a href="../Controller/importe.php">Importar</a>
                    <a href="../Controller/exporte.php">Exportar</a>
                    <a href="../Controller/create.php">Añadir</a>
            <?php
}
}
?>
            <?php
if (!isset($_COOKIE['usuario'])) {
    ?>
                <a href="../Controller/login.php">Iniciar sesión</a>
                <a href="../Controller/registrar.php">Registrarte</a>
            <?php
} else {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
    ?>

             <a href="../Controller/edit.php">Perfil</a>
                <a href="../Controller/cerrar.php">Cerrar sesión</a>
            <?php
}
?>
        </div>
        <div class="mobile-menu" id="mobile-menu" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
</div>



</header>
</body>
<script>
function toggleMenu() {
  var menu =  document.querySelector('.nav-hero');
  var mobileMenu = document.getElementById("mobile-menu");
  mobileMenu.classList.toggle("active");
  if (menu.style.display === "flex") {
    menu.style.display = "none";
  } else {
    menu.style.display = "flex";
  }
}

</script>
</html>
