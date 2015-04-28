<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Refresh" content="5;url=../formulario.html" >
</head>
<body>
<?php
if (isset($_POST)) 
{
	
	//header('Location: form-asistente.html');  
}

$con=mysqli_connect("localhost","-----Server------","-----Password-----","-----DataBase-----");
if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$documento=$_POST["documento"];
	$nombre =$_POST["nombre"];
	$genero=$_POST["genero"];
	$entidad=$_POST["n_entidad"]; 
	$tipoasistente =$_POST["t_asistente"];
	$tipodocumento=$_POST["tipodocumento"];
	$correo=$_POST["correo"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];
	$mensaje="Felicitaciones $nombre su informacion ha sido registradada satisfactoriamente.";
$sql = "INSERT INTO DatosAsistente (Documento ,Nombre,Correo ,Genero,Entidad,TipoAsistente ,TipoDocumento,Telefono,Direccion) 
	VALUES (\"$documento\",\"$nombre\" ,\"$correo\", \"$genero\",\"$entidad\", \"$tipoasistente\", \"$tipodocumento\",\"$telefono\",\"$direccion\")";
if (mysqli_query($con, $sql)) 
	{
		echo "Gracias por inscribirte al simposio de emprendimiento. ";
		mail($correo, 'Registro V Simposio de emprendimiento', $mensaje, "From: acm@javeriana.edu.co");
	} 
else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
mysqli_close($con);

unset($_POST);
?>
</body>
</html>
