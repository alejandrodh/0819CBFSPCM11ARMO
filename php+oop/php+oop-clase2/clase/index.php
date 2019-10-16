<?php
//include "mascota.php";
include "salvaje.php";
include "jugar.php";

//$mascota = new Mascota("oliverio", "gato");
$salvaje = new Salvaje("pantera", "negra", "70kg");

echo $salvaje->setEspecie("perro");

//echo Jugar::jugarConJuguete("oliverio", "peluche");

var_dump($salvaje);
