<?php
$con=mysqli_connect("localhost","-----Server------","-----Password-----","-----DataBase-----");
if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

	
?>
<?php
	session_start();
	if($_SESSION['log']==1){
	$resultado = $con->query("SELECT * FROM DatosAsistente; ");
	echo "Orden del conjunto de resultados<br>";
	$resultado->data_seek(0);
	echo "<table>";
		echo "<tr>";
			echo "<td>Nombres </td>";
                        echo "<td>Tipo de documento </td>";
                        echo "<td>Documento </td>";
                        echo "<td>Genero </td>";
                        echo "<td>Correo electronico </td>";
                        echo "<td>Entidad </td>";
			echo "<td>Ocupación </td>";
                        echo "<td>Telefono </td>";
			echo "<td>Direccion </td>";
		echo "</tr>";
	while ($fila = $resultado->fetch_assoc()) {
	echo " <tr><td> " . $fila['Nombre'] . "</td>";
	echo " <td>" . $fila['TipoDocumento'] . "</td>";
	echo " <td> " . $fila['Documento'] . "</td>";
	echo " <td> " . $fila['Genero'] . "</td>";
	echo " <td> " . $fila['Correo'] . "</td>";
	echo " <td> " . $fila['Entidad'] . "</td>";
	echo " <td> " . $fila['TipoAsistente'] . "</td>";
	echo " <td> " . $fila['Telefono'] . "</td><";
	  echo " <td> " . $fila['Direccion'] . "</td></tr>";
	} 
	echo "</table>";
	}
	else
	{	
		 header('Location: admin.php');
		
	}
?>

<form action="comp.php">
<input type="submit" value="Salir">
</form>
