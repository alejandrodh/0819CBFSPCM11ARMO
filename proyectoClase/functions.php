<?php

function validarRegistro($datos){
  $errores = [];
  $datosFinales = [];
  //var_dump($datos);

  foreach($datos as $key => $value){
    if($key == "userName" || $key == "email"){
      $datosFinales[$key] = trim($value);
    }else{
      $datosFinales[$key] = $value;
    }
  }
  // Validar userName
  if(strlen($datosFinales['userName']) == 0){
    $errores['userName'] = "El campo es obligatorio.";
  } else if( !ctype_alpha($datosFinales['userName'])){
    $errores['userName'] = "Por favor ingrese caracteres alfabéticos.";
  }

  //validar email
  if(strlen($datosFinales['email']) == 0){
    $errores['email'] = "El campo es obligatorio.";
  } else if(!filter_var($datosFinales['email'], FILTER_VALIDATE_EMAIL)){
    $errores['email'] = "Por favor ingrese un email en formato correcto.";
  } // else if( existeUsuario($email) ){
  //   $errores['email'] = "El email ya se encuentra registrado.";
  // }

 //validar contraseña
  if(strlen($datosFinales['password']) == 0){
    $errores['password'] = "El campo es obligatorio.";
  } else if(strlen($datosFinales['password']) < 4){
    $errores['password'] = "La contraseña debe tener al menos 4 caracteres.";
  }

   //Validar retypePassword
   if(strlen($datosFinales['retypePassword']) == 0){
     $errores['retypePassword'] = "El campo es obligatorio.";
   } else if($datosFinales['password'] !== $datosFinales['retypePassword']){
      $errores['retypePassword'] = "Las contraseñas no coinciden";
    }

    //Validar TYC
    if(!isset($datosFinales['tyc'])){
      $errores['tyc'] = "Por favor acepte los términos y condiciones.";
    }


  return $errores;
}

function nextId(){
  $json = file_get_contents("db.json");
  $usuarios = json_decode($json, true);

  $lastUser = array_pop($usuarios['usuarios']);
  $lastId = $lastUser['id'];

  return $lastId + 1;
}



function crearUsuario(){
  return [
    "id" => nextId(), //tenemos que autoincrementar el nº
    "username" => trim($_POST['userName']),
    "email" => trim($_POST['email']),
    "password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
  ];
}

function guardarUsuario($user){
  $json = file_get_contents("db.json");
  $usuarios = json_decode($json, true);
  $usuarios['usuarios'][] = $user;

  $json = json_encode($usuarios, JSON_PRETTY_PRINT);
  file_put_contents("db.json", $json);

}










?>