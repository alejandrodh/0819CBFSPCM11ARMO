<?php

/**
 *
 */
include "animal.php";

class Mascota extends Animal
{
  private $nombre;


  function __construct($nombre, $especie, $color)
  {
    $this->nombre = $nombre;
    parent::__construct($especie, $color);
  }

  public function setEspecie($especie){
    $this->especie = "soy $especie"; //Si el atributo especie no está seteado como "protected" la clase hija desconocerá al atributo y creará uno nuevo en esta instancia. En el var_dump se verán los 2 atributos iguales con diferente scope. 
  }

}

$mascota = new Mascota("oliverio", "perro", "gris");
$mascota->setEspecie("gato");

var_dump($mascota);
