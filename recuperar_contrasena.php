<?php require_once "conecta_db.php";?>

<?php
// Variables para almacenar la nueva contraseña y el mensaje de estado
$new_password = "";
$status_message = "";

// Verificar si se ha enviado un correo electrónico
if (isset($_POST['email'])) {
  $email = $_POST['email'];

  // Consultar la tabla de usuario para encontrar una coincidencia de correo electrónico
  $query = "SELECT * FROM usuarios WHERE email = '$email'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    // Generar una contraseña temporal aleatoria
    $new_password = bin2hex(random_bytes(8));
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Actualizar la contraseña en la tabla de usuario
    $query = "UPDATE usuarios SET password = '$new_password' WHERE email = '$email'";
    mysqli_query($conn, $query);

    // Mostrar un mensaje de éxito
    $status_message = "Su nueva contraseña ha sido generada.";
  } else {
    // Mostrar un mensaje de error si no se encuentra una coincidencia de correo electrónico
    $status_message = "No se ha encontrado ninguna cuenta con el correo electrónico ingresado.";
  }
}

// Cerrar la conexión a la base de datos MySQL
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Recuperar contraseña</title>
  </head>
  <body>
    <?php if (!empty($new_password)) { ?>
      <form>
        <label for="password">Su nueva contraseña es:</label>
        <input type="text" id="password" name="password" value="<?php echo $new_password; ?>" readonly>
        <button onclick="copyPassword()">Copiar contraseña</button>
      </form>
    <?php } ?>
    
    <?php if (!empty($status_message)) { ?>
      <p><?php echo $status_message; ?></p>
    <?php } ?>
    
    <a href="index.php">Iniciar sesion</a>

    <script>
      function copyPassword() {
        var password = document.getElementById("password");
        password.select();
        password.setSelectionRange(0, 99999);
        document.execCommand("copy");
      }
    </script>
  </body>
</html>
