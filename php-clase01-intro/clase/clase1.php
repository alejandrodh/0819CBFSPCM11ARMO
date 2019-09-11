<?php
// Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos strings. Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser asi, que imprima "Bienvenido!", sino, que imprima que hay un error en el login.
//
// a.    Modificar al ejercicio anterior, y agregar los "else" necesarios para poder identificar si el error esta en el usuario, la contraseña, o si alguno de los campos está vacío aún.
//

$nombreDeUsuario = "admi";
$contraseniaDeUsuario = 1234;

if($nombreDeUsuario == "" || $contraseniaDeUsuario == ""){
  echo "Por favor complete el campo user o pass";
} else {
  if($nombreDeUsuario !== "admin"){
    echo "Verifique su usuario";
  }else if($contraseniaDeUsuario !== 1234){
    echo "Verifique su contraseña";
  }else{
    echo "¡Bienvenido!";
  }

}

echo "<h1> If Ternario </h1>";
$edad = 19;
$respuesta = ($edad === 19) ? "Soy mayor de edad" : "Soy menor de edad";
echo $respuesta;


echo "<h1> Switch </h1>";

$nota = rand(0,10);

echo "la nota es: $nota <br>";

switch($nota){
  case false:
     echo "Saque cero";
     break;
  case $nota <= 4:
  // case 2:
  // case 3:
  // case 4:
    echo "Reprobado";
    break;
  case 5:
  case 6:
    echo "safamos";
    break;
  case 7:
    echo "bien el 7.";
    break;
  case 8:
  case 9:
    echo "Bien ahí.";
    break;
  case 10:
    echo "Aplausos";
    break;
  // default:
  //   echo "Saque cero";
  //   break;
}




?>
