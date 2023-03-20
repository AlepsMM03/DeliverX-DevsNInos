<?php require_once "conecta_db.php";?>
<?php
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM dulces WHERE id = $id";
        mysqli_query($conn, $query);
        header("Location: eliminar_productos.php");
    }
?>
