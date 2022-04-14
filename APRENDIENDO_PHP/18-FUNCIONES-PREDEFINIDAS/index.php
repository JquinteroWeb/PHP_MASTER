<?php
//Debug
$hola = 'hola';  
var_dump($hola);

//Funciones de fecha
echo date("Y.m.d").'<br>';
echo date('d-m-Y').'<br>';
echo date("Y/m/d").'<br>';
echo date('d-m-Y').'<br>';

//Fecha unix
echo time().'<hr>';
echo strtotime('2022-04-13').'<hr>';

//Raiz cuadrada de un numero
$num = 4;
echo sqrt($num).'<hr>';

//Randon
echo rand().'<hr>';

//Redondear
echo round(3.989).'<hr>';
//Dos cifras
echo round(3.989,2).'<hr>';


//Mas Funciones utiles
//Tipo de variable
$num =[1,2];
echo gettype($num).'<hr>';

//Detectar tipos
if(is_int($num)){
  echo 'Es entero'.'<hr>';
}
if(is_array($num)){
  echo 'Es array'.'<hr>';
}
//Validar si una variale existe
if(isset($num))
{echo 'Existe'.'<hr>';
}else{
    echo 'no existe'.'<hr>';
}

//Funcion trim: Se utiliza para quitar los espacios en blanco a los lados de la variable
$frase = 'Hola juan quintero ';
echo trim($frase).'<hr>';

//Funcion Eliminar indices de arrays o variables
$year = 2020;
unset($year);

//Funcion empty : valida si una varibale esta vacia  o si esta en cero

$text = 'w';
if (empty($text)) {
    echo 'Variable vacia'.'<br>';
}else{

    echo 'Tiene texto'.'<hr>';
}
//Funcion para contar caracteres de un string
$cadena ='hola';
echo strlen($cadena).'<hr>';

//Funcion para encontrar caracter en una cadena (indice)
$frase = 'Hola mundo';
echo strpos($frase,"mundo").'<hr>';

//Reemplazar palabras en un string
$frase = str_replace('mundo','vida',$frase);
echo $frase.'<hr>';

//Funcion minuscula a mayuscula
echo strtoupper($frase).'<hr>';
echo strtolower($frase).'<hr>';
?>