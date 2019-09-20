<?php
/*
Generar un archivo llamado superficie.php:
Definir una función triangulo() que retorne su superficie.
Definir una función rectangulo() que retorne su superficie.
Definir una función cuadrado() que retorne su superficie.
Utilizando la función pi(), definir una función circulo() que retorne su superficie.
*/

function triangulo($base, $altura){
  global $funcionesEjecutadas; //Primero hay que invocar a la variable.
  $funcionesEjecutadas++; //Luego podemos operarla.

  return ($base * $altura)/2;
}
function rectangulo($lado1, $lado2){
  global $funcionesEjecutadas; //Primero hay que invocar a la variable.
  $funcionesEjecutadas++; //Luego podemos operarla.

  return $lado1 * $lado2;
}
function cuadrado($lado){
  global $funcionesEjecutadas; //Primero hay que invocar a la variable.
  $funcionesEjecutadas++; //Luego podemos operarla.

  return $lado**2;
}
function circulo($radio){
  global $funcionesEjecutadas; //Primero hay que invocar a la variable.
  $funcionesEjecutadas++; //Luego podemos operarla.

  return pi()*($radio**2);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Superficies</h1>
    <p>triángulo: <?= triangulo(10, 20) ?></p>
    <p>rectángulo: <?= rectangulo(10, 20) ?></p>
    <p>cuadrado: <?= cuadrado(20) ?></p>
    <p>círculo: <?= circulo(10) ?></p>















  </body>
</html>
