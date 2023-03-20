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
    <link rel="shortcut icon" href="icon.png">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <title>Compras</title>
  <script>
    $(document).ready( function () {
    $('#tabla_paginacion').DataTable();
} );
  </script>
</head>
<body>
  <div class="centrar col-md-5">
  <h1>Compras Realizadas</h1>
    <div class="col-md-12">
  <div class="table-responsive">
<table title="Compras" class="table table-striped table-bordered" style="width:100%">
  <thead class="table-dark">
    <tr>
      <th>Usuario</th>
      <th>Direccion</th>
      <th>Detalle</th>
      <th>Total</th>
      <th>Fecha</th>
      <th>Status</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
        // Consulta SQL para recuperar los datos de las compras
        $query = "SELECT * FROM compras WHERE fecha >= CURRENT_DATE() AND status = 'Pendiente'";
        $result = mysqli_query($conn, $query);
            // Recorrido de los resultados de la consulta y generación de la tabla HTML
    while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <th><?php echo $row['username']; ?></th>
  <th><?php echo $row['direccion']; ?></th>
  <th><?php echo $row['detalle']; ?></th>
  <th><?php echo $row['total']; ?></th>
  <th><?php echo $row['fecha']; ?></th>
  <th><?php echo $row['status']; ?></th>
  <td>
    <form method="post" action="marcar_compra.php">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <?php if ($row['status'] == 'Pendiente') { ?>
        <button type="submit" class="btn btn-primary">Marcar como completada</button>
      <?php } else { ?>
        <button type="submit" class="btn btn-secondary" disabled>Completada</button>
      <?php } ?>
    </form>
  </td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
