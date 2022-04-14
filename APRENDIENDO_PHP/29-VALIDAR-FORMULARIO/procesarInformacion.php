<?php 
	$error = "Faltan Parametros";
	if((isset($_POST['nombre']) && !empty($_POST['nombre'])) && (isset($_POST['apellido']) && !empty($_POST['apellido']))){
		$error = false;
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
	}else{
		$error = "Faltan Parametros o estan vacios";
		header ("Location:index.php?error=$error");
	}
	preg_match(pattern, subject)
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recibir</title>
</head>
<body>
  <h1>Esta en el form de valdiar</h1>
</body>
</html>