<?php
//BUCLE WHILE
echo '<hr>'.'BUCLE WHILE';
$a=1;
while ($a <= 10) {
   echo "i = $a";
   if ($a != 10){
    echo '<br>';
   }
   $a++;
}

//BUCLE FOR
echo '<hr>'.'BUCLE FOR';
$a = 5;
for ($i=0; $i <= 10 ; $i++) { 
    echo "$a x $i = ".($a*$i).'<br>';
}

//BUCLE DO-WHILE
echo '<hr>'.'BUCLE DO-WHILE';
$i = 1;
$a = 5;
do {
    echo "$a x $i = ".($a*$i).'<br>'; 
    $i++;
} while ($i <= 10);

//EJERCICIO
echo '<hr>';
echo 'TABLA DE VARIABLE PASADA POR GET'.'<br>';
if (isset($_GET['numero'])) {
    try{
        $a = (int)$_GET['numero'];
        for($i=1;$i<=10;$i++){
            echo "$a x $i = ".($a*$i).'<br>';      

        }
    }catch(Exception $e){
        echo 'Error';
    }
    
}

//Ejecicio
$numero = [];
for ($i=0; $i < 10; $i++) { 
    $numero[]= $i;
}

echo "<h2>Foreach</h2>";
foreach($numero as $value){
     echo $value.'<hr>';
}
?>