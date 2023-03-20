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
// Verificar si se ha enviado el formulario de deshabilitar
if (isset($_POST['deshabilitar'])) {
  $id = $_POST['deshabilitar'];
  // Actualizar estado del producto a deshabilitado
  $query = "UPDATE dulces SET habilitado = 0 WHERE id = $id";
  mysqli_query($conn, $query);
}
// Verificar si se ha enviado el formulario de habilitar
if (isset($_POST['habilitar'])) {
  $id = $_POST['habilitar'];
  // Actualizar estado del producto a habilitado
  $query = "UPDATE dulces SET habilitado = 1 WHERE id = $id";
  mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshabilitar/Habilitar Producto</title>
</head>
<body >
  <div class="col-md-5">
    <table class="col-md-5 border">
    <h1>Deshabilitar/Habilitar Productos</h1>
        <thead>
            <tr class="border">
                <th class="border">Nombre</th>
                <th class="border">Precio</th>
                <th class="border">Estado</th>
                <th class="border">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM dulces";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td class="border"><?php echo $row['nombre']; ?></td>
                    <td class="border">$<?php echo $row['precio']; ?></td>
                    <td class="border"><?php echo $row['habilitado'] ? 'Habilitado' : 'Deshabilitado'; ?></td>
                    <td class="border">
                        <?php if ($row['habilitado']): ?>
                        <form action="" method="post">
                            <input type="hidden" name="deshabilitar" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Deshabilitar" class="btn btn-danger">
                        </form>
                        <?php else: ?>
                        <form action="" method="post">
                            <input type="hidden" name="habilitar" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Habilitar" class="btn btn-success">
                        </form>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
</body>
</html>