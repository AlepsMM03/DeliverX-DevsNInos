<?php require_once "conecta_db.php";?>
<?php include "templates/navbar.php"?>
<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
// Verificar el tipo de usuario
if ($_SESSION['user_type'] != 'i7t7Dn@tNTrJ!xTh') {
    header("Location: index.php");
    exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buscador de registros</title>
</head>
<body>
	<form class="col-md-2" action="" method="post">
    <h1>Buscar por Fecha</h5>
		<input class="form-control" type="date" name="busqueda" placeholder="Buscar usuario"><br>
		<button class="btn btn-success" type="submit" value="Buscar">Buscar</button>
	</form>
	<?php
		// comprobar conexión
	if (!$conn) {
	    die("Conexión fallida: " . mysqli_connect_error());
	}
	if (isset($_POST['busqueda'])) {
		$busqueda = $_POST['busqueda'];
		$consulta = "SELECT * FROM compras WHERE fecha LIKE '%$busqueda%'";
		$resultados = mysqli_query($conn, $consulta);
		if (mysqli_num_rows($resultados) > 0) {
		    echo "<table>
		    		<tr>
		    			<th>Username</th>
		    			<th>Detalle</th>
		    			<th>Total</th>
		                <th>Fecha</th>
		    		</tr>";
		    // datos
		    while($row = mysqli_fetch_assoc($resultados)) {
		        echo "<tr>
		        		<td>".$row["username"]."</td>
		        		<td>".$row["detalle"]."</td>
		        		<td>".$row["total"]."</td>
		                <td>".$row["fecha"]."</td>
		        	  </tr>";
		    }
		    echo "</table>";
		} else {
		    echo "No se han encontrado resultados";
		}
	}
	mysqli_close($conn);
    ?>
    </body>
</html>