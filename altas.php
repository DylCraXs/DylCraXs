
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>


<?php 

include 'menu.php';

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion



if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "gestionsubir";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO persona(apellido, nombre, edad,foto) VALUES ('$ape','$nom','$ed','$contenido')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
		echo "<center><h1>se ha insertado un registro <h1><center>"."<br>";

}else{
	echo "<center><h1>NO se ha generado un registro <h1><center>"."<br>";
}

}
else
print "No se puede subir el archivo";

 ?>
