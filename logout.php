<?php 
session_start();
// eliminar todas las variables de sesión
session_unset();
// destruir la sesión
session_destroy();
// Redireccionar al inicio de sesión
header('Location: index.php');
exit;
?>
