<?php require_once "conecta_db.php";?>
<?php include "templates/navbar.php"?>
<?php 
// Iniciar sesión
session_start();
// Verificar si el usuario está registrado
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
// Verificar el tipo de usuario
if ($_SESSION['user_type'] != 'i7t7Dn@tNTrJ!xTh') {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshabilitar Compras</title>
</head>
<body>
<form action="actualizar_fecha.php" method="post" class="col-md-5">
    <h2>Fecha de no compra:</h2>
    <input type="date" id="fecha_no_compra" name="fecha_no_compra" class="form-control"><br>
    <button class="btn btn-danger" type="submit" name="submit" value="Actualizar">Deshabilitar</button>
</form>
</body>
</html>