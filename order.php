<?php
session_start(); // Activar la sesión para acceder a las variables de sesión
require_once "conecta_db.php";
include "templates/navbar_usuario.php";

$usuario_id = $_SESSION['usuario_id']; // Obtener el ID del usuario logeado
$username = $_SESSION['username'];
$total = 0;

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

// Verificar el tipo de usuario
if ($_SESSION['user_type'] != 'regular') {
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
    <link rel="shortcut icon" href="icon.png">
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <title>Order</title>
    <script src="">
    function ocultarPagina() {
  document.body.style.display = "none";
}
    </script>
    <style>
div .web{
  /* Estilo predeterminado del div */
}
@media (min-width: 992px) {
  div .web{
    margin: 0 auto; /* Centrar el div horizontalmente */
    text-align: center; /* Centrar el contenido del div */
    width: 100%; /* Ocupar todo el ancho de su contenedor */
    max-width: 300px; /* Limitar el ancho máximo del div a 200px */
    /* Agregar la clase col-md-2 de Bootstrap */
    /* Esta clase define que el div ocupa 2 columnas en un diseño de rejilla de Bootstrap */
    @extend .col-md-3;
  }
}
   </style>
   
</head>
<body style="background-color: black; color: white; font-family: 'Dot Matrix', sans-serif;" id="contenido">
    <div style="background-color: black; color: white;" class="">
    <form class="web" action="carrito.php" method="post" style="background-color: black; color: white;" class="form-control" onsubmit="return confirm('¿Estás seguro(a) de que deseas realizar la compra?')">
    <div style="background-color: black; color: white;" id="session">
    <br>
    <div class="bg- text-white px-3 py-1 rounded" style="font-family: 'Dot Matrix', sans-serif;">
  <h5 class="mb-0"><?php echo $_SESSION["username"]; ?></h5>
</div>

<br> 
</div>
<div>
<input type="hidden" name="username" value="<?php echo $username; ?>">
<input type="hidden"  readonly class="form-control mb-3" name="status" id="status" value="Pendiente">
</div>
  <?php
// Crear la consulta SQL para obtener las direcciones del usuario
$sql = "SELECT * FROM direcciones WHERE usuario_id = '$usuario_id'";
// Ejecutar la consulta
$result = mysqli_query($conn, $sql);
// Crear el input para mostrar las direcciones
echo '<select class="form-control text-bg-dark" name="direccion" id="direccion" required>';
// Agregar opción por defecto indicando que no hay direcciones
echo '<option value="">Selecciona una dirección</option>';
// Verificar si hay direcciones para mostrar
if(mysqli_num_rows($result) > 0) {
    // Recorrer las direcciones y mostrarlas en el input
    while($direccion = mysqli_fetch_assoc($result)) {
        echo '<option  value="' . $direccion['edificio'] . ',' . $direccion['salon'] . ',' .$direccion['planta'] . '">' . $direccion['edificio'] . ' ' .$direccion['salon'] .' ' .$direccion['planta'] . '</option>';
    }
}
// Cerrar el input
echo '</select>';
// Si no hay direcciones, mostrar un mensaje
if(mysqli_num_rows($result) == 0) {
    echo '<p>No hay direcciones para mostrar, por favor agrega una.</p>';
}
// Cerrar conexión
mysqli_close($conn);
  ?>
<br>
<input type="hidden"  readonly class="form-control mb-3" name="alert" id="alert" value="Nueva Compra">
<input type="hidden" name="username" value="<?php echo $username; ?>">
<div class="alert alert-dark  fade show" role="alert">Escoge lo que vas a comprar.
</div>
<?php 
    //conexion a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'deliverx');
    //consulta para obtener los dulces de la tabla
    $query = "SELECT * FROM dulces WHERE habilitado = '1'";
    $result = mysqli_query($conn, $query);
?>
<table class="table text-white">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <tr>
        <td><?php echo $row['nombre'] ?></td>
        <td><input readonly style="background-color: black; color: white; padding: 10px;" class="form-control" type="number" id="<?php echo $row['nombre'] ?>" name="<?php echo $row['nombre'] ?>" value="0" min="0" max="10" data-precio="<?php echo $row['precio'] ?>"></td>
        <td>$<?php echo $row['precio'] ?></td>
        <td>
          <button class="btn btn-info border" type="button" onclick="incrementar('<?php echo $row['nombre'] ?>')">+</button>
          <button class="btn btn-danger" type="button" onclick="decrementar('<?php echo $row['nombre'] ?>')">-</button>
        </td>
      </tr>
    <?php } ?>
  </tbody>
  <span class="badge text-bg-success" id="total"></span>
</table>
<div>
  <input type="submit"  class="btn btn-light mt-4" value="Comprar" name="comprar">
 </div>
</form>
<script src="js/script.js"></script>
</body>
</html>