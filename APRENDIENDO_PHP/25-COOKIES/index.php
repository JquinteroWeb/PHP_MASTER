<?php 
//Datos almacenados del usuario en el navegador o ordenador del usuario que visita nuestra web con el fin de recordar sus datos o rastrear su actividad


//Crear cookies
//setcookie('USUARIO','VALOR SOLO PUEDE SER TEXTO','CADUCIDAD');

//Cookie basica
setcookie("micookie",'Hola que hace');

//Cookie con expiracion
setcookie('UNYEAR','MI COOKIE DE 365 DIAS',time()+(60*60*24*365));


?>
<a href="verCookies.php">Ver cookies</a>