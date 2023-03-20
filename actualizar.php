<?php require_once "conecta_db.php";?>
<?php 
    if(isset($_POST['actualizar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $query = "UPDATE dulces SET nombre='$nombre', precio='$precio' WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if($result) {
            echo "<script>alert('Producto actualizado con éxito'); window.location.href='actualizar_productos.php';</script>";
        } else {
            echo "<script>alert('Error al actualizar el producto'); window.location.href='actualizar_productos.php';</script>";
        }
    }
?>