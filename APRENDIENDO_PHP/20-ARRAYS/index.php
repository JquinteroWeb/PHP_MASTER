<?php 

//Array
//Formas de declarar un array
//Se pueden agregar tanto indexes numericos o alfanumericos
//Indice numerico
$estudiante = array(1,2,3,4,5,'fin',true,[1,2,3,4]);
var_dump($estudiante);

echo '<hr>';
//Indice numerico
$estudianteDos = [1,2,3,4,5,'fin',true,[1,2,3,4]];
var_dump($estudianteDos);

echo '<hr>';
//Indeice alfa array asociativo
$estudianteTres = ['nombre' => 'juan','apellido' => 'Quintero'];
//$estudianteTres = array('nombre' => 'juan','apellido' => 'Quintero');
var_dump($estudianteTres);

echo '<hr>';
//Ejecicio
$numero = [];
for ($i=0; $i < 10; $i++) { 
    $numero[]= $i;
}
var_dump($numero);

for($i = 0; $i < count($numero) ; $i++){
  echo $numero[$i].'<hr>';
}
echo "<h2>Foreach</h2>";
foreach($numero as $value){
     echo $value.'<hr>';
}



?>