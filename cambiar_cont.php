<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
?>
<?php include "templates/navbar_usuario.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <title>Actualizar contraseña</title>
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
</head>
<body class="" style="background-color: black; color: white;font-family: 'Dot Matrix', sans-serif;">
<form style="background-color: black; color: white;" class=" web form-control" action="updatePassword.php" method="post">
<h1>Actualizar contraseña</h1>
  <input style="background-color: black; color: white;" class="form-control placeholder-white" type="password" name="password" placeholder="Nueva contraseña:" required><br>
  <input style="background-color: black; color: white;" class="form-control placeholder-white" type="password" name="confirm" placeholder="Confirmar contraseña:" required><br>
  <button class="btn btn-dark" type="submit">Actualizar contraseña</button>
</form>
</body>
</html>