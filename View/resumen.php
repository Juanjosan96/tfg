<head>
    <link rel="stylesheet" type="text/css" href="../View/css/normalize.css">
</head>

        <body>

  <div class="container-resumen">

    <div class="content">
      <h1 class="resumen-texto">Resumen de la compra:</h1>
      <div class="data-container">
        <h1 class="resumen-titulo">1.Nombre de la pelicula:</h1>
        <h2><?php print_r($_SESSION["nombre"]); ?></h2>
        <?php if (!isset($_COOKIE["usuario"])) { ?>
              <h1 class="resumen-titulo">2.Nombre completo:</h1>
        <h2>Anónimo</h2>

        <?php } else {$usuario = Usuario::datosUsuario($_SESSION["usuario"]); ?>

          <h1 class="resumen-titulo">2.Nombre completo:</h1>
        <h2><?php print_r($usuario->apellidos . "," . $usuario->nombre); ?></h2>

        <?php } ?>

        <h1 class="resumen-titulo">3.Asientos:</h1>
        <h2><?php print_r($_SESSION["butacas"]); ?></h2>

        <h1 class="resumen-titulo">4.Fecha:</h1>
        <h2><?php print_r($_SESSION["fecha"]); ?></h2>
        <h1 class="resumen-titulo">5.Hora:</h1>
        <h2><?php print_r($_SESSION["hora"]); ?></h2>
        <h1 class="resumen-titulo">6.Precio:</h1>
        <h2><?php print_r($_SESSION["precio"] . "€"); ?></h2>

      </div>

    </div>

    </div>
     <a href="../Controller/index.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Finalizar</a>

</body>

