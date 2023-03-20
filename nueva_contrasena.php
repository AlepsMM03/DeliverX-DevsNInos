<?php
  // Incluir el archivo de conexión a la base de datos
  require_once "conecta_db.php";
  // Verificar si se ha enviado la nueva contraseña
  if(isset($_POST['new_password'])){
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    // Actualizar la contraseña en la base de datos
    $query = "UPDATE usuarios SET password = '" . password_hash($new_password, PASSWORD_DEFAULT) . "' WHERE email = '$email'";
    mysqli_query($conn, $query);
    // Iniciar sesión con la nueva contraseña
    session_start();
    $_SESSION['username'] = $email;
    // Redirigir al usuario a la página de compras
    header("Location: order.php");
  }
?>

