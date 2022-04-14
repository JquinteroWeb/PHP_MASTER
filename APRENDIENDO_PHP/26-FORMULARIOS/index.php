 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Formulario</title>
 </head>
 <body>
 	<h1>Formulario</h1>
 	<form action="" method="POST">

 	    <label for="TXT_NOMBRE">Nombre</label>
 		<input type="text" name="TXT_NOMBRE" autofocus> 
 		<label for="TXT_APELLIDO">Apellido</label>
 		<input type="text" name="TXT_APELLIDO" disabled> 
 		<label for="TXT_DIRECCION">Email</label>
 		<input type="text" name="TXT_EMAIL" minlength="5" pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$" required placeholder="Ingresa tu Email..."> 
 		<input type="submit" name="" value="Enviar"> 
 				

 	</form>
 </body>
 </html>