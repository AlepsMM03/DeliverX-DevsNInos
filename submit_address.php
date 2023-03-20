<?php require_once "conecta_db.php";?>
<?php
session_start();
// Obtener el ID de usuario de la sesión actual
$usuario_id = $_SESSION['usuario_id']; // obtener el ID del usuario logeado
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $edificio = $_POST['edificio'];
    $salon = $_POST['salon'];
    $planta = $_POST['planta'];
    $usuario_id = $_POST['usuario_id'];
    $sql = "INSERT INTO direcciones (edificio, salon, planta, usuario_id) 
            VALUES ('$edificio', '$salon', '$planta', '$usuario_id')"; 
    // Ejecutar la consulta SQL
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Dirección registrada con éxito.');window.location.href='order.php';</script>";
      exit;
    } else {
      echo "<script>alert('Dirección no registrada, intentelo nuevamente.');window.location.href='direcciones.php';</script>";
    }
    mysqli_close($conn);
}
?>
