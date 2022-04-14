<?php

  $cantantes = array('Juan' , 'apellido' , 'Quintero');
 //Funciones de array 
  $numero = array(1,2,3,2,34,5,6);
  //Orden array orden alfabetico
  asort($numero);//sort($numero)
  var_dump($numero);
  echo '<hr>'; 

  //Orden array orden alfabetico inverso
  arsort($numero);
  var_dump($numero);
   echo '<hr>'; 

  //Añadir elementos al array 
  $cantantes[] = 'pepito';  
  array_push($cantantes, 'pepito2');
  var_dump($cantantes);


  //Quitar el ultimo elemtro del array
  array_pop($cantantes);

  //Quitar elemento en especifico
  unset($cantantes[2]);

  //Sacar elemnto Aleatorio del array
  array_rand($cantantes); 

  echo '<hr>'; 
  //Reverse array
  var_dump(array_reverse($numero));

  echo '<hr>'; 
  //Funcion para buscar dentro de un array
  var_dump(array_search('Juan', $cantantes));

  echo '<hr>'; 
  //Contar numero de elementos
  var_dump(count($cantantes));

   echo '<hr>'; 
  //Contar numero de elementos
  var_dump(sizeof($cantantes));
 ?>