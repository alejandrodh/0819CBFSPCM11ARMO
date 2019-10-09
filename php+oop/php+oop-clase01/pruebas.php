<?php
include "duenio.php";
include "mascota.php";

// $ale = new Duenio("Ale", "ale@dh.com");
$array = ["nombre"=>"ale", "email"=>"ale@dh.com", "password" => 1234];
$ale = new Duenio($array);
// $ale->setNombre("Ale")->setEmail("ale@dh.com");

$mascota = new Mascota;
$mascota->nombre = "Oliverio";
$mascota->especie = "gato";

$ale->setMascota($mascota);
$ale->addHobbie("fútbol");

var_dump($ale);

echo $ale->getNombre();
echo $ale->getEmail();
