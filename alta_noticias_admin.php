<?php require_once "conecta_db.php";?>
<?php
session_start();
// Verificar si hay un error de conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
// Preparar la consulta
$username = $_SESSION['username'];
$texto = $_POST['texto'];
$query = "INSERT INTO noticias (username, texto, fecha) VALUES ('$username', '$texto', now())";
// Ejecutar la consulta
if ($conn->query($query) === TRUE) {
  header('Location: noticias_admin.php');
} else {
    echo "<script>alert('No se pudo registrar'); window.location.href='noticias.php';</script>";
}
// Cerrar la conexión
$conn->close();
?>