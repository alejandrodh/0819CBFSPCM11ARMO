<?php
/**
 *
 */

class Pyme extends Cliente
{
  private $cuit;
  private $rs;

public function  __construct($cuit, $rs, $email, $pass){
  $this->cuit = $cuit;
  $this->rs = $rs;
  parent::__construct($email, $pass);
}

}
