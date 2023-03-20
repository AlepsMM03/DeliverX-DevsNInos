<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.cdnfonts.com/css/dot-matrix" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="">
    <title>DeliverX</title>
</head>
<body style="font-family: 'Dot Matrix', sans-serif;">
<style>
   	div .alert{
    	text-align: center;
    }
   </style>
<div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Deliverx
                    </div>
                    <div  class="alert alert-success  fade show" role="alert">
  <strong>Hola!</strong> Recuerda que este servicio sólo esta disponible dentro de la UTZAC.
</div>
    <form style="background-color: black; font-family: 'Dot Matrix', sans-serif;"id="loginform" class="form-control" action="login.php" method="post">
        <input style="background-color: black; color: white; padding: 10px; font-family: 'Dot Matrix', sans-serif;" type="text" id="username" name="username" placeholder="Usuario"  required>
        <input style="background-color: black; color: white; padding: 10px; font-family: 'Dot Matrix', sans-serif;" type="password" id="password" name="password" placeholder="Contraseña"  required>
        <button style="font-family: 'Dot Matrix', sans-serif;" type="submit" class="border" value="Iniciar sesión" name="login">Entrar</button>
    </form>
    <div class="pie-form">
                      <!-- <a href="contrasena_olvidada.php">¿Perdiste tu contraseña?</a> -->
                        <a href="nuevo_usuario.php">¿No tienes Cuenta? Registrate aquí</a><br>
                        <a href="politica_privacidad.php">Política de Privacidad</a>
                        <a href="terminos_condiciones.php">Términos y Condiciones</a>
                        <p class="badge text-bg-dark">Devs Niños</p>
                    </div>
                </div>
            </div>
        </div>
</body>
<script type="text/javascript">
		document.oncontextmenu = function(){ return false; }
	</script>
</html>
