<?php require_once "conecta_db.php";?>
<?php
session_start();
$usuario_id = $_SESSION['usuario_id']; // obtener el ID del usuario logeado

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
    <title>Agregar Direccion</title>
</head>
<body style="background-color: black; color: white; font-family: 'Dot Matrix', sans-serif;">
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
    max-width: 200px; /* Limitar el ancho máximo del div a 200px */
    /* Agregar la clase col-md-2 de Bootstrap */
    /* Esta clase define que el div ocupa 2 columnas en un diseño de rejilla de Bootstrap */
    @extend .col-md-2;
  }
}

   </style>
   <div style="background-color: black; color: white;" class="web" >
    <h1>Agregar Direccion</h1>
    <form style="background-color: black; color: white;" class="form-control" action="submit_address.php" method="post">
  <input style="background-color: black; color: white;" class="form-control placeholder-white" type="text" id="edificio" name="edificio" placeholder="Edificio" required>
  <br>
  <input style="background-color: black; color: white;" class="form-control placeholder-white" type="text" id="salon" name="salon" placeholder="Salon/Cubiculo" required>
  <br>
  <select style="background-color: black; color: white;" class="form-control" id="planta" name="planta" required>
    <option value="" disabled selected>Planta</option>
    <option value="Alta">Alta</option>
    <option value="Baja">Baja</option>
</select>

  <br><input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">


  <button class="btn btn-dark" type="submit" value="Submit">Registrar</button>
</form>
</div>
</body>
</html>
