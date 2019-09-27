<?php
echo "<pre>";
var_dump($_GET);
echo "</pre>";
//nombre=ale&curso=fullstack
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>$_GET</h1>
    <?php if(isset($_GET['nombre'])): ?>
      <p>nombre: <?= $_GET['nombre']  ?></p>
    <?php else: ?>
      <p>nombre: </p>
    <?php endif?>
  </body>
</html>
