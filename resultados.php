<?php require_once "conecta_db.php";?>
<?php
	// comprobar conexión
	if (!$conn) {
	    die("Conexión fallida: " . mysqli_connect_error());
	}
	$busqueda = $_POST['busqueda'];
	$consulta = "SELECT * FROM compras_productos WHERE username LIKE '%$busqueda%'";
	$resultados = mysqli_query($conn, $consulta);
	if (mysqli_num_rows($resultados) > 0) {
	    echo "<table>
	    		<tr>
	    			<th>ID</th>
	    			<th>Usernmae</th>
	    			<th>Detalle</th>
	    			<th>Total</th>
                    <th>Fecha</th>
	    		</tr>";
	    // output data of each row
	    while($row = mysqli_fetch_assoc($resultados)) {
	        echo "<tr>
	        		<td>".$row["id"]."</td>
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
	mysqli_close($conn);
?>