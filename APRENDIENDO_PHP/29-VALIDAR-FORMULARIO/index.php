<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envio</title>
</head>
<body>
	<h1>Validar Formulario</h1>

	<?php 
  		if (isset($_GET['error'] )) {
  			$error = $_GET['error'];
  			if ($error) {
  			  	echo "<strong style = 'color:red'>$error</strong>";			
  			 }  			
  		}
	?>
	<form action="procesarInformacion.php" method="POST">

        <label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre.." required pattern="[a-zA-Z]+"> 

		<label for="apellido">Apellido</label>
	    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido.." required pattern="[a-zA-Z]+">	

		<input type="submit" name="">

	</form>

</body>
</html>