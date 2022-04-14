<?php


 //Variables Locales:solo se pueden usar dentro de la funcion donde fue definida a no se de que se retorne
 function local(){
    $hola= 'Hola juan ';
    echo $hola;
 }
 
 //Variables Globles: se declaran fuera de una funciona y se pueden usar dentro y fuera de las funciones
$frase ='Hola Mundo';

function variableGlobal(){

    global $frase;
    echo $frase;

}

variableGlobal();

?>