<?php

/**
 *
 */
abstract class Animal
{
  private $especie; //Si el atributo no esta seteado como "protected" la clase hija no lo reconoce y no lo puede pisar.
  private $color;

  public function __construct($especie, $color)
  {
    $this->especie = $especie;
    $this->color = $color;
  }


  public function setEspecie($especie){
    $this->especie = $especie;
  }
  public function setColor($color){
    $this->color = $color;
  }

  public function getEspecie(){
    return $this->especie;
  }

  public function getColor(){
    return $this->color;
  }


}
