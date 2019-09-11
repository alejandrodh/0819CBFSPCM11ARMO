<?php
$alumno = [
  "nombre"=>"Oscar",
  "curso"=> "Full Stack",
  "sede"=>" Monroe",
  "profesores" => ["Ale", "Karly", "Gonza"],
];


$random=[rand(1,10)];
for ($i=0; $i <10 ; $i++) {
  $num = rand(1,100);
  $random[] = $num;
}
var_dump($random);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "head.php"?>
  <body>
    <?php include "nav.php" ?>
    <h1>Bucles y html embebido</h1>
    <ul>
      <?php foreach ($alumno as $label => $data): ?>

        <?php if ($label == "profesores"): ?>

          <li><?= $label  .": " ?></li>
          <ul>
            <?php for ($i=0; $i < count($data) ; $i++) :?>
            <li><?= $data[$i]  ?></li>
            <?php endfor ?>
          </ul>

        <?php else: ?>

        <li> <?php echo $label .": " . $data?> </li>

        <?php endif ?>

      <?php endforeach ?>
    </ul>








</html>
