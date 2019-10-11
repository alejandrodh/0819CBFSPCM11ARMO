<?php
/**
 *
 */
class DbJson
{
  private $json;

  function __construct($file)
  {
    //Ver en clase como resolver si el archivo $file no está creado.
    $this->json = file_get_contents($file);

  }

  public function nextId(){
    $usuarios = json_decode($this->json, true);

    $lastUser = array_pop($usuarios['usuarios']);
    $lastId = $lastUser['id'];

    return $lastId + 1;
  }

  public function guardarUsuario($user){
    $usuarios = json_decode($this->json, true);
    $usuarios['usuarios'][] = $user;

    $json = json_encode($usuarios, JSON_PRETTY_PRINT);
    file_put_contents("db.json", $json);
  }

  public function buscarUsuarioPorEmail($email){
    $usuarios = json_decode($this->json, true);

    foreach ($usuarios['usuarios'] as $usuario) {
      if($usuario['email']=== $email){
        return $usuario;
      }
    }
    return null;
  }

  public function existeUsuario($email){
    return $this->buscarUsuarioPorEmail($email) !== null;
  }

  public function usuariosRegistrados(){
    $data = json_decode($this->json, true);
    $usuarios = $data['usuarios'];

    return $usuarios;
  }


}
