<?php
/**
 *
 */

include "animal.php";

class Salvaje extends Animal
{
  private $peso;

  public function __construct($especie, $color, $peso){
    $this->peso = $peso;
    parent:: __construct($especie, $color);

  }

}
