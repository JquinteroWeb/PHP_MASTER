<?php 
//Sessiones

/*
Una session lo que hace es almacenar y persistir los datos del usuario mientras esta navegando por nuestra web hasta que cierra sesion o el navegador
*/

//Iniciar sesion
session_start();

//Agregar datos a la variable de sesion
$_SESSION['USUARIO'] = 'JUAN';

echo $_SESSION['USUARIO'];

//Cerrar Sesion
?>