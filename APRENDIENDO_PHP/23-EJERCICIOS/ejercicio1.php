<?php
/*Ejercicio 1 Hacer array con 8 numero enteros y que haga lo siguiente.
  -recorrerlo y mostrarlo
  -Ordenarlo y mostralo
  -mostrar su longitud
  -Buscar algun elemto

*/

   function mostrarArray($array){
   	 $string = '';
     foreach($array as $value){
 	 	$string .= $value.'<br>';
   	  }
     return $string;
   }
   
   echo '<h1>Ejercicio 1</h1>';
   $numero = array(1,2,3,4,2,3,2);
   echo (mostrarArray($numero));

   echo '<h1>Ejercicio 2</h1>';
   asort($numero);
   echo (mostrarArray($numero));

   echo '<h1>Ejercicio 3</h1>';
   echo (count($numero));
   


   echo '<h1>Ejercicio 4</h1>';
   echo ('El dato esta en la posicion : '.array_search('1', $numero));
 ?>