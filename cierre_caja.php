<?php require_once "conecta_db.php";?>
<?php include "templates/navbar.php"?>
<?php 
session_start();
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja</title>
</head>
<body>
<div class="col-md-5 bg-success">
<h1>Ganancias de hoy</h1>
        <?php
require_once "conecta_db.php";
// Obtener la fecha actual en formato de MySQL
$hoy = date("Y-m-d");
// Consulta SQL para obtener la suma total de las ventas realizadas hoy
$query = "SELECT SUM(total) AS total_hoy FROM compras WHERE DATE(fecha) = '$hoy'";
$resultado = mysqli_query($conn, $query);
$datos = mysqli_fetch_assoc($resultado);
// Obtener el total de ventas de hoy
$total_hoy = $datos['total_hoy'];
echo "Total de ventas de hoy: $" . $total_hoy;
?>
	</div>
</body>
</html>
</body>
</html>

