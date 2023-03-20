<?php require_once "conecta_db.php";?>
<?php
  // Mostrar la sección para ingresar la nueva contraseña
  if(isset($_GET['new_password'])){
?>
    <h2>Ingresa tu nueva contraseña para iniciar sesión</h2>
    <form method="post" action="nueva_contrasena.php">
      <label for="new_password">Nueva contraseña:</label>
      <input type="text" id="new_password" name="new_password">
      <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
      <button type="submit">Iniciar sesión</button>
    </form>
<?php
  }
?>
