<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/style.css">
    <title>Crea tu cuenta</title>
</head>
<body style="background-color: black;">
<div id="contenedor" style="background-color: black;">
        <div id="central" style="background-color: black;">
            <div id="login" style="background-color: black;">
                <div class="titulo">
                    Registrate
                </div>
                <form class="form-control" style="background-color: black;" action="register.php" method="post">
                    <input style="background-color: black; color: white; padding: 10px;" type="text" id="username" name="username" placeholder="Usuario" required>
                    <input style="background-color: black; color: white; padding: 10px;" type="email" id="email" name="email" placeholder="Email" required>
                    <input style="background-color: black; color: white; padding: 10px;" type="password" id="password" name="password" placeholder="Contraseña" required>
                    <input style="background-color: black; color: white; padding: 10px;" type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar Contraseña" required>
                    <input style="background-color: black; color: white; padding: 10px; margin-top: 10px;" type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
