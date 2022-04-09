
<?php
//OPERADORES ARITMETICOS
/*
suma : +
resta : -
multiplicacion : *
division : /
modulo : %
potencia : **
*/

//EJEMPLOS
$numero1 = 2;
$numero2 = 3;
echo "Numeros: $numero1 - $numero2".'<hr>';
//SUMA
echo 'Suma: '.($numero1+$numero2).'<hr>';

//MULTIPLICACION
echo 'Multiplicacion: '.($numero1*$numero2).'<hr>';

//DIVISION
echo 'Division: '.($numero1/$numero2).'<hr>';

//RESTA
echo 'Resta: '.($numero1-$numero2).'<hr>';

// OTENCIA
echo 'Potencia: '.($numero1**$numero2).'<hr>';

//MODULO
echo 'Modulo: '.($numero1%$numero2).'<hr>';

//OPERADORES DE INCREMENTO Y DECREMETO
/*
 Incremento : ++
 Decremento : --
*/
//Incremento
$numero3 = 12;
$numero3++;
//Decremento
$numero4=15;
$numero4--;
//PRE-INCREMENTO
$numero5 = 13;
++$numero5;
//PRE-DECREMENTO
$numero6 = 13;
--$numero6;
echo 'Numero Tres Con Incremento: '.$numero3.'<hr>';
echo 'Numero Cuatro Con Decremento: '.$numero4.'<hr>';
echo 'Numero Cuatro Con pre-Incremento: '.$numero5.'<hr>';
echo 'Numero Cuatro Con pre-Decremento: '.$numero6.'<hr>';
?>