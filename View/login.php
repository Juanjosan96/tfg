<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 -->


<body>
    <div class="body-login" >
        <div class="login-page">
  <div class="form">
    <h2 class="login">Introduce usuario</h2>
    <div class="no_registro">
    <?php
if (!$_SESSION['login']) {
    echo 'Usuario no registrado';
    $_SESSION['login'] = true;
}

?>
</div>
    <form class="login-form" action="../Controller/validarLogin.php" method="post">
      <input type="text" placeholder="Usuario"  name="usuario"/>
      <input type="password" placeholder="Contraseña" name="password"/>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Iniciar Sesión</button>
      <p class="message">¿No estás registrado? <a href="../Controller/registrar.php">Crear una cuenta</a></p>
    </form>
  </div>
</div>


    </div>
</body>

</html>