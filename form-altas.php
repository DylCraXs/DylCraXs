<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="css/formAltas.css">

</head>
<body>
	<style>
        body {

            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
	<div class="container">

		<form class="altaInput" action="altas.php" method="POST" enctype="multipart/form-data">
    		<h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
			<div class="grupoInputs">
			<input type="text" name="apellido" placeholder="Apellido"><br>
			</div>
			<div class="grupoInputs">
			<input type="text" name="nombre" placeholder="Nombre"><br>
    	    </div>
			<div class="grupoInputs">
			<input type="mail" name="mail" placeholder="Mail"><br>
		    </div>
			<div class="grupoInputsfoto">
			<input type="file" name="foto"><br>
		    </div>
			<div class="btn-submit">
			<input type="submit" value="Grabar"><br>
		    </div>
		</form>
	</div>
	
	
</body>
</html>