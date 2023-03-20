<?php require_once "conecta_db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Recuperar contraseña</title>
</head>
<body>
<form class="form-control" action="recuperar_contrasena.php" method="POST">
<h5>Recuperar contraseña</h5>
  <label for="email">Ingrese su correo electrónico:</label>
  <input class="form-control" type="email" name="email" id="email" required><br>
  <button class="btn btn-dark" type="submit">Recuperar contraseña</button>
</form>
</body>
</html>