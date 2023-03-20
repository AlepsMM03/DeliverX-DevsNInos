<?php require_once "conecta_db.php";?>
<?php
// Verificación de la conexión a la base de datos
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Verificación de la acción de agregar un dulce
if (isset($_POST['agregar_productos'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    // Inserción de un nuevo dulce en la tabla
    $query = "INSERT INTO dulces (nombre, precio) VALUES ('$nombre', '$precio')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Producto agregado con éxito'); window.location.href='agregar_productos.php';</script>";
    } else {
        echo "<script>alert('Error al agregar el producto'); window.location.href='agregar_productos.php';</script>";
    }
}
// Cierre de la conexión a la base de datos
mysqli_close($conn);
?>