<?php
//Esta funcion nos permite capturar la informacion de otro archivo para usarla en el actual
echo '<H1>INCLUDE</H1 >';
//Incluir varias veces si es necesario permite errores
include'../15-FUNCIONES/index.php';
//include('../15-FUNCIONES/index.php');
main(2,4);

echo '<H1>INCLUDE_ONCE</H1 >';
//Solo incluir una vez permite errores
include_once('../01-HOLA-MUNDO/index.php');


//Hace lo mismo que el include pero no permite errores
require('');
//Solo permite incluir una vez el codigo y no permite errores/ Este es el mas recomendado
require_once('');
?>