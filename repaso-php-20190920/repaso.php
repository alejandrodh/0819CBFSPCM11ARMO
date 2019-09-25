<?php
$string = "true";
$integer = 87654.987;
$boolean = false;
$array = [
  $string,
  $integer,
  $boolean,
  ["hola", 1223,90876, false]
];

$arrayAsoc = [
  "nombre" => "Ale",
  "curso" => "fullstack",
  "hobbies" => ["tenis","futbol","ski", "golf"],
  "familia" => [
    "esposa" =>"Martina",
    "hijos" => ["Trini", "Fran","Felipe"]
  ]
];
//$arrayAsoc["familia"]["hobbies"][]="golf";
?>
<ul>
<?php foreach ($arrayAsoc as $posicion => $dato) :?>
  <?php if ($posicion == "hobbies"): ?>
    <ul>
    <?php for ($i=0; $i<count($dato); $i++):?>
        <li><?= $dato[$i] ?></li>
    <?php endfor ?>
    </ul>
  <?php elseif($posicion == "familia"): ?>
      <?php foreach ($dato as $title => $name): ?>
        <?php if ($title == "hijos"): ?>
          <ul>
            <?php foreach ($name as $hijos): ?>
              <li>hijos</li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <li><?= $title ?>: <?= $name ?></li>
        <?php endif ?>
      <?php endforeach; ?>
  
  <?php else: ?>
    <li> <?= $posicion ?> : <?= $dato ?></li>
  <?php endif ?>
<?php endforeach ?>
</ul>





<?php /*
echo($arrayAsoc["familia"]["hobbies"][2]);





var_dump($string, $integer, $boolean, $array);

echo($boolean);
echo($array[1]);
for ($i=0; $i < count($array) ; $i++) {
  $array[$i];
}
foreach ($arrayAsoc as $key => $value) {
  // code...
}*/
?>
