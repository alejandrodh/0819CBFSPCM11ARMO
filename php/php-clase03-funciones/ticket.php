<?php
include "funciones.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Su ticket</h1>
    <ul>
    <?php foreach ($items as $item => $precio):?>
      <li><?=$item ?>: $<?= $precio ?></li>
    <?php endforeach ?>
    </ul>
    <p>El total es: <?= totalDeCompra($items) ?></p>
  </body>
</html>
