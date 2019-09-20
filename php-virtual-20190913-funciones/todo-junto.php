<?php
// Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.

/*
Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento. ¿Esto está permitido? ¿Qué sucede?

En caso de que el ejercicio anterior haya fallado, modificar la variable con la palabra reservada global para que sí funcione.
*/
$funcionesEjecutadas = 0;

include "funciones.php"; //Acá hay una función que devuelve el numero mayor de 3.
include "superficie.php";//Acá está la función que calcula 1 superficie circular.

$circ1 = circulo(1);
$circ2 = circulo(2);
$circ3 = circulo(3);

$elMayor = mayor($circ1, $circ2, $circ3);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Archivo "todo-junto.php"</h1>
    <p>Círulo 1: <?= $circ1 ?></p>
    <p>Círulo 2: <?= $circ2 ?></p>
    <p>Círulo 3: <?= $circ3 ?></p>
    <p>El círculo mayor es: <?= $elMayor ?></p>

    <p>Cantidad de funciones ejecutadas: <?= $funcionesEjecutadas ?></p>
  </body>
</html>
