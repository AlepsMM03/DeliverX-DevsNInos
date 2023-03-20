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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
</head>
<body class="">
    <form class="col-md-5" action="alta_noticias_admin.php" method="post">
<div class="input-group mb-3">
  <input style="" type="text" class="col-md-5 form-control" name="texto" id="texto"  placeholder="Nuevo mensaje a la comunidad..." required>
  <button class="btn btn-outline-success" type="submit" id="button-addon2">Enviar</button>
</div>
</form>
<?php
$query = "SELECT * FROM noticias  ORDER BY fecha DESC";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
  echo '<div style="background-color: white; color: dark;" class="col-md-5 card border-success mb-3" style="max-width: 18rem;">';
  echo '<div class="card-header bg-transparent border-success">' . $row['username'] . '</div>';
  echo '<div class="card-body text-success">';
  echo '<p class="card-text">' . $row['texto'] . '</p>';
  echo '</div>';
  echo '<div class="card-footer bg-transparent border-success">' . $row['fecha'] . '</div>';
  echo '</div>';
}
?>
</body>
</html>