<?php require_once "conecta_db.php";?>

<?php
// Recolectar información del formulario
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password']; // Nueva variable para confirmar la contraseña

// Verificar si el nombre de usuario ya existe en la base de datos
$query = "SELECT * FROM usuarios WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Si el nombre de usuario ya existe, enviar una alerta de error
    echo "<script>alert('El nombre de usuario ya existe, por favor elige otro'); window.location.href='nuevo_usuario.php';</script>";
} else {
    // Verificar si las contraseñas coinciden
    if ($password !== $confirm_password) {
        // Si las contraseñas no coinciden, enviar una alerta de error
        echo "<script>alert('Las contraseñas no coinciden, por favor verifica'); window.location.href='nuevo_usuario.php';</script>";
    } else {
        // Verificar si el correo tiene la extensión correcta
        if (strpos($email, '@alumnos.utzac.edu.mx') === false && strpos($email, '@utzac.edu.mx') === false) {
            // Si el correo no tiene la extensión correcta, enviar una alerta de error
            echo "<script>alert('El correo debe ser @alumnos.utzac.edu.mx o @utzac.edu.mx'); window.location.href='nuevo_usuario.php';</script>";
        } else {
            // Encriptar la contraseña
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            // Si el nombre de usuario no existe, las contraseñas coinciden, y el correo tiene la extensión correcta, registrar al usuario en la base de datos
            $query = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password_hash')";
            if (mysqli_query($conn, $query)) {
                // Si el registro fue exitoso, enviar una alerta de registro exitoso
                echo "<script>alert('Registro exitoso'); window.location.href='index.php';</script>";
            } else {
                // Si el registro falló, enviar una alerta de error
                echo "<script>alert('Error al registrarse'); window.location.href='index.php';</script>";
            }
        }
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
