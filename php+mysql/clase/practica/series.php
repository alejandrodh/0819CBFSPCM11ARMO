<?php
include "../connection.php";
//Crear el archivo series.php que con un statement consulte a la BD de todas la series y los muestre como un listado (div, li).
//Adicionar que tenga un link que vaya a serie.php.

$stmt = $db->prepare("SELECT * FROM series");
$stmt->execute();

$series = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($series);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Lista de series</h1>
    <ul>
      <?php foreach ($series as $serie): ?>
        <li>
          <a href="serie.php?id=<?= $serie['id']  ?> "> <?= $serie['title']  ?> </a>
        </li>
      <?php endforeach; ?>
    </ul>

  </body>
</html>
