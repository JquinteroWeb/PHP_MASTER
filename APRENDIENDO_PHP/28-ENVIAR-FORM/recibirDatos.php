<?php 
if(isset($_POST['nombre']) &&
	!empty($_POST['nombre'])){
	var_dump($_POST['nombre']);  
}else{
	echo 'No existe el dato';
}
?>