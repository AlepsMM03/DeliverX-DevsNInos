<?php require_once "conecta_db.php";?>
<?php
session_start();
// Verificar si hay un error de conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
// Preparar la consulta
$username = $_SESSION['username'];
$usuario_id = $_SESSION['usuario_id'];
$texto = $_POST['texto'];
// Ejecutar la consulta
$query = "INSERT INTO noticias (usuario_id, username, texto, fecha) VALUES ('$usuario_id','$username', '$texto', now())";
if ($conn->query($query) === TRUE) {
  header('Location: noticias.php');
} else {
    echo "<script>alert('No se pudo registrar'); window.location.href='noticias.php';</script>";
}
// Cerrar la conexión
$conn->close();
?>