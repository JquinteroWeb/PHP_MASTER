<?php 

//Ejercicio 2 

//Permitir que se permita agregar valores a un array hasta que sean 12 datos maximo
$numero = [];
for ($i=0; $i < 120; $i++) { 
	array_push($numero,$i);
}
foreach($numero as $value){
	echo $value.'<hr>';

}
?>