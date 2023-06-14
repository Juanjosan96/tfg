<div class="login-page">
  <div class="form">
    <form class="login-form" action="../Controller/validaEditar.php" method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required value="<?= $data['usuario']->nombre; ?>">
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required value="<?= $data['usuario']->apellidos; ?>">
            <input type="text" name="correo" id="correo" placeholder="Correo" required value="<?= $data['usuario']->correo; ?>">
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" required value="<?= $data['usuario']->nombre_usuario; ?>">
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required value="<?= $data['usuario']->contrasena; ?>">
            <button>Editar</button>
      <p class="message">¿Quieres eliminar tu cuenta? </p>
    </form>
    <a href="../Controller/delete.php" class="boton" id="boton-edit" style="background-color:#c93535;">Eliminar</a>
  </div>
</div>