<?php
include "../connection.php";
var_dump($_GET);

$tabla = $_GET['type'];
$search = "%" . $_GET['search'] . "%";

$stmt = $db->prepare("SELECT * FROM $tabla WHERE title LIKE :search ");
$stmt->bindvalue(":search", $search);
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Los resultados de busqueda en: <?= $tabla  ?></h1>
    <a href="buscar.php">volver</a>
    <ul>
      <?php if (!$resultados) : ?>
        <li> La busqueda no trajo resultados.</li>

      <?php else: ?>

        <?php foreach ($resultados as $resultado): ?>
          <li> <?= $resultado['title'] ?></li>
        <?php endforeach; ?>

      <?php endif ?>
    </ul>

  </body>
</html>
