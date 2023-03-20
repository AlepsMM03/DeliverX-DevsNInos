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
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <title>Compras</title>
  <style>
   	div{
    	text-align: center;
    }
   </style>
</head>
<body>
  <div class="col-md-5">
  <h1>Alerta de Compras</h1>
    <div class="col-md-12">
  <div class="table-responsive">
  <table id="tabla_paginacion"  class="table table-danger">
    <tr>
      <th>Alerta</th>
      <th>Fecha</th>
    </tr>
    <?php
// Crear la consulta SQL para obtener las compras del usuario
$sql = "SELECT alert, fecha FROM compras WHERE fecha >= CURRENT_DATE() AND status = 'Pendiente'";
// Ejecutar la consulta
$result = mysqli_query($conn, $sql);
// Recorrer las compras y mostrarlas en la tabla
while($compra = mysqli_fetch_assoc($result)) {
    echo '<tr>
            <td>' . $compra['alert'] . '</td>
            <td>' . $compra['fecha'] . '</td>
        </tr>';
}
// Cierre de la conexión a la base de datos
mysqli_close($conn);
?>
</table>
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
//Función actualizar
function actualizar(){location.reload(true);}
//Función para actualizar la pagina cada 30 segundos(30000 milisegundos)
setInterval("actualizar()",30000);
  </script>
</body>
</html>