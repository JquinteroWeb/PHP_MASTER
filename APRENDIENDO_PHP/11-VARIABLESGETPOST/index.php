<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>FORMULARIO PHP POST</h1>
  <form action="get.php" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre....">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido"placeholder="Apellido....">
    <input type="submit" value="Enviar">    
  </form>
  <h1>FORMULARIO PHP GET</h1>

  <form action="get.php" method="GET">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre....">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido"placeholder="Apellido....">
    <input type="submit" value="Enviar">    
  </form>
</body>
</html>