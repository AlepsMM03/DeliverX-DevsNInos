<?php require_once "conecta_db.php";?>
<?php
// Verificación de la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
$id = $_POST['id'];
// Recuperación de la información del formulario
// Actualización del estado de la compra
$query = "UPDATE compras SET status = 'Completada' WHERE id = $id";
$result = mysqli_query($conn, $query);
// Verificación de la actualización
if ($result) {
   echo "<script>alert('La compra se ha marcado como completada'); window.location.href='compras_admin.php';</script>";
} else {
    echo "<script>alert('Error al intentar marcar la compra como completada'); window.location.href='compras_admin.php';</script>";
}



   

