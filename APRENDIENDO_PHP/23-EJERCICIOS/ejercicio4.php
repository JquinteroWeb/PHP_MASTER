<?php
	/*
		Ejercicio 4. Crear un programa en php que tenga 4 variables, array, string, int y booleana y que imprima el tipo de variable
	*/
	$array = array('Hola','Mundo');
	$string = 'hola';
	$int = 1;
	$bol = true;

	if(is_array($array)){
		echo 'Es array'.'<br>';
	}
	if(is_string($string)){
 		echo 'Es String'.'<br>';
	}
	if(is_int($int)){
		echo 'Es int'.'<br>';

	}
	if(is_bool($bol)){

		echo 'Es booleana'.'<br>';
	}
 ?>