<?php include "templates/navbar.php"?>
<?php require_once "conecta_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $query = "SELECT * FROM usuarios INNER JOIN direcciones
  ON usuarios.usuario_id = direcciones.usuario_id;";
  $resultado = mysqli_query($conn, $query);
  ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Usuario ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>User Type</th>
        <th>Direccion ID</th>
        <th>Edificio</th>
        <th>Salon</th>
        <th>Planta</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
      <tr>
        <td><?php echo $fila['usuario_id']; ?></td>
        <td><?php echo $fila['username']; ?></td>
        <td><?php echo $fila['email']; ?></td>
        <td><?php echo $fila['password']; ?></td>
        <td><?php echo $fila['user_type']; ?></td>
        <td><?php echo $fila['direccion_id']; ?></td>
        <td><?php echo $fila['edificio']; ?></td>
        <td><?php echo $fila['salon']; ?></td>
        <td><?php echo $fila['planta']; ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <?php
  mysqli_free_result($resultado);
  mysqli_close($conn);
  ?>
</body>
</html>