<?php

function saludo(){
return 'Buenos dias';
}

function despido(){
    return 'Hasta luego';
}

function noches(){
    return 'Hasta mañama';
}

//Funciones Variables
$horario = 'saludo';
echo $horario();
?>