<?php
/*
Igual : ==
Estrictamente igual : ===
Diferente : !=
Diferente <>
Mayor : >
Menor : <
Menor igual : <=
Mayor igual =>
//OPERADORES LOGICOS
&&,AND =>Y
||,OR =>O
!,NOT  =>NEGACION

*/
$num = 12;
if ($num == 12) {
   echo 'Numero igual a 12';
}
echo '<hr>';

$num = 13;
if ($num == 12) {
   echo 'Numero igual a 12';
}else {
   echo 'Es diferente a 12';
}

echo '<hr>'; 

$dia = 2;
if ($dia == 1) {
    echo 'Lunes';
}elseif($dia == 2){
   echo 'Martes';
}elseif ($dia == 3) {
    echo 'Miercoles';
}elseif ($dia == 4) {
   echo 'Jueves';
}else{
    echo 'Fin de Semana';
}

echo '<hr>'; 

$dia = 8;
 switch($dia){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    default:
        echo 'Finde';
        break;
 }

?>