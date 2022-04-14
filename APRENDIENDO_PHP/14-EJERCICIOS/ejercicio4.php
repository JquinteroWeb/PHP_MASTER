<?php
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    echo '<h1>Calculadora</h1>';
    $numero1= $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo "Multiplicacion de $numero1 x $numero2 = ".($numero1*$numero2).'<br>';
    echo "Division de $numero1 / $numero2 = ".($numero1/$numero2).'<br>';
    echo "Suma de $numero1 + $numero2 = ".($numero1+$numero2).'<br>';
    echo "Resta de $numero1 - $numero2 = ".($numero1-$numero2).'<br>';

}else{
    echo 'Ingrese bien los valores';
}


?>