<?php 

function suma($num,$num2)
{
    return $num + $num2;
}
function resta($num,$num2){
 return $num - $num2;
}
function multiplicacion($num,$num2){
    return $num * $num2;
   }
function division($num,$num2){
    return $num / $num2;
}

function tabla($num)
{
    echo "<h1>Tabla multiplicar del numero $num </h1>";
    for ($i=0; $i <= 10 ; $i++) { 
        echo '<hr>'."$num x $i = ".($num*$i);
    }
}
//Funcion con parametros opcionales

function sumaTitulo($num,$num2,$titulo=false){
    if($titulo != false){
        echo "<h1>$titulo</h1>";    
    }
    echo '<hr>'.'Suma = '.suma($num,$num2);

}
function retorno($num,$num2){
    return 1+2;
}

function main($num,$num2){
    //Llamado de metodos y imprimir su resultado
    echo '<h1>Operaciones basicas</h1>';
    echo 'Suma = '.suma($num,$num2).'<hr>';
    echo 'Resta = '.resta($num,$num2).'<hr>';
    echo 'Multiplicacion = '.multiplicacion($num,$num2).'<hr>';
    echo 'Division = '.division($num,$num2).'<hr>';
    
    tabla($num);
    tabla($num2);


    //Llammado de funcion con parametros opcionales
    sumaTitulo($num,$num2,'Suma de los dos numeros con funcion de parametros opcionales');
    sumaTitulo($num,$num2);

    //Funcion con retorno
    echo '<hr>'.'Suma con retorno = '.retorno($num,$num2);
}

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    //Captura de datos 
    $num = $_GET['numero1'];
    $num2 = $_GET['numero2'];
    main($num,$num2);

}


?>