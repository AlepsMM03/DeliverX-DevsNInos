<?php
require_once "conecta_db.php";
?>
<?php
    // Iniciar sesión
    session_start();

    // Verificar si el usuario y contraseña son válidos
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Verificar si el nombre de usuario existe en la base de datos
        $query = "SELECT * FROM usuarios WHERE username='$username'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $hash = $user['password'];
            $usuario_id = $user['usuario_id'];
            $user_type = $user['user_type'];
            // Verificar si la contraseña es correcta
            if(password_verify($password, $hash)){
                // Iniciar sesión
                $_SESSION['username'] = $username;
                $_SESSION['user_type'] = $user_type;
                $_SESSION['usuario_id'] = $usuario_id;
                if($user_type == "i7t7Dn@tNTrJ!xTh"){
                  // Redirigir al usuario a la página de administrador
                  header("Location: compras_admin.php");
                }elseif($user_type == "regular"){
                  // Redirigir al usuario a la página de compras
                  header("Location: order.php");
                }
            }else{
                echo "<script>alert('Usuario o contraseña incorrectos');window.location.href='index.php';</script>";
            }
        }else{
            echo "<script>alert('Usuario o contraseña incorrectos');window.location.href='index.php';</script>";
        }
    }
?>
