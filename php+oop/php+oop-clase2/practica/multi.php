<?php
/**
 *
 */

class Multi extends Cliente
{
  private $cuit;
  private $rs;
  private $casaMatriz;

  public function  __construct($cuit, $rs, $casaMatriz, $email, $pass){
    $this->cuit = $cuit;
    $this->rs = $rs;
    $this->casaMatriz = $casaMatriz;
    parent::__construct($email, $pass);
  }


}
