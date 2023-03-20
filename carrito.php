<?php
require_once "conecta_db.php";
session_start();
if(isset($_POST['comprar'])) {
    date_default_timezone_set('America/Mexico_City');
    $hora_actual = date('H:i:s');
    $limite1 = '15:00:00';
    $limite2 = '24:00:00';
    $dia_actual = date('N');
    $query = "SELECT fecha_no_compra FROM configuracion_tienda";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $fecha_no_compra = $row['fecha_no_compra'];
    if ($dia_actual == date('N', strtotime($fecha_no_compra))) {
        echo "<script>alert('Hoy no se pueden hacer compras. Intente de nuevo mañana.');window.location.href='order.php';</script>";
        exit();
    }
    if($hora_actual >= $limite1 && $hora_actual <= $limite2 && $dia_actual <= 5) {
        $vacio = true;
        $query = "SELECT * FROM dulces";
        $result = mysqli_query($conn, $query);
        $total = 0;
        $detalle_compra = "";
        while($row = mysqli_fetch_assoc($result)){
            $nombre = $row['nombre'];
            $cantidad = $_POST[$nombre];
            $precio = $row['precio'];
            if($cantidad > 0) {
                $vacio = false;
                $subtotal = $cantidad * $precio;
                $total += $subtotal;
                $detalle_compra .= $nombre . " - Cantidad: " . $cantidad . " - Subtotal: $" . $subtotal . "\n";
            }
        }
        if(!$vacio) {
            $usuario_id = $_SESSION['usuario_id'];
            $username = $_SESSION['username'];
            $direccion = $_POST['direccion'];
            $direccion = explode(",", $direccion);
            $edificio = $direccion[0];
            $salon = $direccion[1];
            $planta = $direccion[2];
            $direccion_completa = implode(',', $direccion);
            $alert = $_POST['alert'];
            $status = $_POST['status'];
            $query = "INSERT INTO compras (usuario_id, username, direccion, detalle, total, fecha, alert, status) VALUES ('$usuario_id','$username','$direccion_completa', '$detalle_compra', '$total', now(),'$alert', '$status')";
            mysqli_query($conn, $query);
            echo "<script>alert('Compra realizada con éxito. Total: $" . $total . "');window.location.href='order.php';</script>";
        } else {
            echo "<script>alert('La orden de compra está vacía.');window.location.href='order.php';</script>";
        }
    } else {
        if($dia_actual > 5) {
            echo "<script>alert('No se pueden hacer compras los fines de semana.');window.location.href='order.php';</script>";
        } else {
            echo "<script>alert('No se pueden hacer compras antes de las 3:30pm y después de las 6pm.');window.location.href='order.php';</script>";
        }
    }
}
?>