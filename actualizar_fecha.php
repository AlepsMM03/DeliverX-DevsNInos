<?php
require_once "conecta_db.php";
if(isset($_POST['submit'])) {
    $fecha_no_compra = $_POST['fecha_no_compra'];
    $query = "UPDATE configuracion_tienda SET fecha_no_compra = '$fecha_no_compra'";
    mysqli_query($conn, $query);
    echo "<script>alert('La fecha de no compra se ha actualizado.');window.location.href='deshabilitar.php';</script>";
}
?>

