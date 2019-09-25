<?php

$contrasenia = password_hash($_POST['password'], PASSWORD_DEFAULT);
echo " 'hola', encriptado es: ";
echo $contrasenia;

var_dump($contrasenia, $_POST);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>formulario</h1>
    <form class="" action="" method="post">
      <input type="password" name="password" value="" placeholder="contrasenia">
      <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>
