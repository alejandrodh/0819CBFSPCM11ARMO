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

    $this->id = $json->nextId();
    $this->username = $datos['userName'];
    $this->email = $datos['email'];
    $this->password = password_hash($datos['password'], PASSWORD_DEFAULT);
  }



}
