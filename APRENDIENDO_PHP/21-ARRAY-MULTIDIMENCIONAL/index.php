<?php
  $result = array(
  	 array(
  	 	'nombre'=>'juan',
  	 	'apellido'=>'quintero'
  	 ),
  	  array(
  	 	'nombre'=>'pepito',
  	 	'apellido'=>'quintero'
  	 ),
  	   array(
  	 	'nombre'=>'sultanito',
  	 	'apellido'=>'quintero'
  	 )

  );

  foreach ($result as $cliente) {
  	 echo $cliente['nombre'].'-'.$cliente['apellido'].'<br>';
  }



 ?>