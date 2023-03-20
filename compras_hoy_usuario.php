<?php require_once "conecta_db.php";?>
<?php include "templates/navbar_usuario.php"?>
<?php
session_start();
    // Obtener el ID del usuario logueado
    $username = $_SESSION['username'];
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
  <title>Compras</title>
  <style>
   	div{
    	text-align: center;
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
<body style="background-color: black; color: white;font-family: 'Dot Matrix', sans-serif;">
  <div style="background-color: black; color: white;" class="web">
  <h1>Compras de hoy</h1>
    <div class="col-md-12">
  <div class="table-responsive">
  <table title="Compras de productos" style="background-color: black; color: white;" class="table">
  <h3>Compras realizadas de: <span class="badge text-bg-light "><?php echo $_SESSION["username"]; ?></span></h3>
  <thead class="table-dark">
    <tr>
      <th>Detalle</th>
      <th>Total</th>
      <th>Fecha</th>
        <th></th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
        // Obtener el ID del usuario logueado
  $usuario_id = $_SESSION['usuario_id'];
  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
  }
  // Crear la consulta SQL para obtener las compras del usuario
  $sql = "SELECT * FROM compras WHERE usuario_id= '$usuario_id' AND fecha >= CURRENT_DATE()";
  // Ejecutar la consulta
  $result = mysqli_query($conn, $sql);
  // Recorrer las compras y mostrarlas en la tabla
  while($compra = mysqli_fetch_assoc($result)) {
    echo '<tr>
            <td>' . $compra['detalle'] . '</td>
            <td>$' . $compra['total'] . '</td>
            <td>' . $compra['fecha'] . '</td>
            <td><span class="spinner-grow spinner-grow-sm"></span></td>
            <td>' . $compra['status'] . '</td>
          </tr>';
  }
  // Cierre de la conexión a la base de datos
  mysqli_close($conn);
?>
</div>
</div>
</div>
<script>
$(document).ready(function() {
    $('#tabla_paginacion').DataTable({
        columnDefs: [
            { targets: [0, 1, 2, 3], className: 'dt-center' }
        ]
    });
});
  </script>
</body>
</html>