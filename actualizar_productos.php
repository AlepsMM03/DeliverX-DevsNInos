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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Actualizar Producto</title>
</head>
<body>
<table class="table">
    <h1>Actualizar Productos</h1>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            //consulta para obtener los productos de la tabla
            $query = "SELECT id, nombre, precio FROM dulces";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['precio'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary editar" data-toggle="modal" data-target="#actualizarModal<?php echo $row['id'] ?>">Editar</button>
                </td>
            </tr>
            <div class="modal fade" id="actualizarModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="actualizarModalLabel<?php echo $row['id'] ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-inline" action="actualizar.php" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="actualizarModalLabel<?php echo $row['id'] ?>">Actualizar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'] ?>"><br>
                                <label for="precio">Precio:</label>
                                <input type="number" class="form-control" name="precio" value="<?php echo $row['precio'] ?>"><br>
                                <input class="btn btn-success" type="submit" value="Actualizar" name="actualizar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </tbody>
</table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
