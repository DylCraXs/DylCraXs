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
            background-image: url(./wallpaper3.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
	<div class="container">

		<form class="altaInput" action="altas.php" method="POST" enctype="multipart/form-data">
    		<h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
			<div class="grupoInputs">
			<input type="text" placeholder="Apellido"><br>
			</div>
			<div class="grupoInputs">
			<input type="text" placeholder="Nombre"><br>
    	    </div>
			<div class="grupoInputs">
			<input type="text" placeholder="Edad"><br>
		    </div>
			<div class="grupoInputs">
			<input type="file" name="foto"><br>
		    </div>
			<div class="btn-submit">
			<input type="submit" value="Grabar"><br>
		    </div>
		</form>
	</div>
	
	
</body>
</html>