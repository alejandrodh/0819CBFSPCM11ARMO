<?php

/**
 *
 */
class Duenio
{
  //Atributos
  private $nombre;
  private $email;
  private $tel;
  private $mascota;
  private $hobbies;
  private $password;

  // public function __construct($nombre, $email, $tel = "Pedir el teléfono"){
  //     $this->nombre = $nombre;
  //     $this->email = $email;
  //     $this->tel = $tel;
  // }

  public function __construct(Array $datos){
    $this->nombre = $datos['nombre'];
    $this->email = $datos['email'];
    $this->password = $this->encriptarPassword($datos['password']);

    if(!isset($datos["tel"])){
        $this->tel = null;
    } else {
      $this->tel = $datos['tel'];
    }


  }

  //Métodos
  public function setNombre($nombre){
    $this->nombre = $nombre;
    return $this;
  }
  public function setEmail($email){
    $this->email = $email;
    return $this;
  }
  public function setTel(string $tel){
    $this->tel = $tel;
    return $this;
  }
  public function setMascota(Mascota $mascota){
    $this->mascota = $mascota;
    return $this;
  }
  public function addHobbie($hobbie){
    $this->hobbies[] = $hobbie;
    return $this;
  }


  public function getNombre(){
    return $this->nombre;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getTel(){
    return $this->tel;
  }
  public function getMascota(){
    return $this->mascota;
  }

  private function encriptarPassword($password){
    return password_hash($password, PASSWORD_DEFAULT);
  }



}
