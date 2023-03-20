<?php require_once "conecta_db.php";?>
<?php
session_start();
$usuario_id = $_SESSION['usuario_id'];
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
?>
<?php include "templates/navbar_usuario.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <title>Feed</title>
</head>
<style>
   	div{
    	text-align: center;
    }
    .placeholder-white::-webkit-input-placeholder {
  color: white;
}
.placeholder-white::-moz-placeholder {
  color: white;
}
.placeholder-white:-ms-input-placeholder {
  color: white;
}
.placeholder-white:-moz-placeholder {
  color: white;
}   
 .web{
  /* Estilo predeterminado del div */
}
@media (min-width: 992px) {
   .web{
    margin: 0 auto; /* Centrar el div horizontalmente */
    text-align: center; /* Centrar el contenido del div */
    width: 100%; /* Ocupar todo el ancho de su contenedor */
    max-width: 500px; /* Limitar el ancho máximo del div a 200px */
    /* Agregar la clase col-md-2 de Bootstrap */
    /* Esta clase define que el div ocupa 2 columnas en un diseño de rejilla de Bootstrap */
    @extend .col-md-5;
  }
}
   </style>
<body style="background-color: black; color: white;font-family: 'Dot Matrix', sans-serif;" class="">
    <form style="background-color: black; color: white;" class="web" action="alta_noticias.php" method="post">
<div class="web input-group mb-3">
<input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">
  <input style="background-color: black; color: white;" type="text" class="form-control placeholder-white" name="texto" id="texto"  placeholder="Escribe tu opinion de DeliverX..." required>
  <button class="btn btn-outline-success" type="submit" id="button-addon2">Enviar</button>
</div>
</form>
<?php
$query = "SELECT * FROM noticias  ORDER BY fecha DESC";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
  echo '<div style="background-color: black; color: white;" class="web form-control card border-success mb-3" style="max-width: 18rem;">';
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