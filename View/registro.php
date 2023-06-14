<body>
  <div class="login-page">
  <div class="form">
  <div class="no_registro">
  <h3>Creación nueva cuenta</h3>
        <?php
if ($_SESSION['repetido']) {
    echo 'Usuario ya registrado';
}
?>
     </div>
    <form class="login-form" action="../Controller/validarRegistro.php" method="post">
    <input type="text" placeholder="Nombre" name="nombre" required/>
      <input type="text" placeholder="Apellidos"  name="apellidos" required/>
      <input type="text" placeholder="Usuario"  name="usuario" required/>
      <input type="password" placeholder="Contraseña" name="contrasena" required/>
      <input type="text" placeholder="Correo electrónico"  name="correo" required/>

      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Registrarse</button>
      <p class="message">¿Tienes cuenta? <a href="../Controller/login.php">Inicia Sesión</a></p>
    </form>
  </div>
</div>
