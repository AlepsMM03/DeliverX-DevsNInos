<?php require_once "conecta_db.php";?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
if (isset($_POST['password']) && isset($_POST['confirm'])) {
  // validar que la nueva contraseña sea válida
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];

  if ($password == $confirm) {
    // encriptar la nueva contraseña
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // actualizar la contraseña en la base de datos
    $username = $_SESSION['username'];
    $query = "UPDATE usuarios SET password = '$hash' WHERE username = '$username'";
    $conn->query($query);

    echo "<script>alert('La contraseña ha sido actualizada');window.location.href='cambiar_cont.php';</script>";
  } else {
    echo "<script>alert('La nueva contraseña y la confirmación no coinciden.');window.location.href='cambiar_cont.php';</script>";
  }
}

?>
