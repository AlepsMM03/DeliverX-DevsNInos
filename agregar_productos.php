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
    <title>Alta Productos</title>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alta de Productos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="alta_productos.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del producto">
          </div><br>
          <div class="form-group">
            <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio del producto">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="agregar_productos">Agregar Producto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="btnModal" style="display:none;">Abrir Modal</button>
<script>
// Código para mostrar automáticamente el modal
window.onload = function() {
  document.getElementById('btnModal').click();
}
</script>
</body>
</html>

