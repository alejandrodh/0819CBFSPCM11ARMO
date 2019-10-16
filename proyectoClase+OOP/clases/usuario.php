<?php
/**
 *
 */

class Usuario
{
  private $id;
  private $username;
  private $email;
  private $password;

  function __construct(Array $datos)
  {
    global $json;

    if(isset($datos['id'])){
      $this->id = $datos['id'];
      $this->password = $datos['password'];
    } else {
      $this->id = $json->nextId();
      $this->password = password_hash($datos['password'], PASSWORD_DEFAULT);
    }
    $this->username = $datos['username'];
    $this->email = $datos['email'];

  }

  public function getId(){
      return $this->id;
  }
  public function getUsername(){
      return $this->username;
  }
  public function getEmail(){
      return $this->email;
  }
  public function getPassword(){
      return $this->password;
  }

}
