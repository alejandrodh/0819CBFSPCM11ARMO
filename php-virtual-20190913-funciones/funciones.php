<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*
    Generar un archivo llamado funciones.php:
    Definir una función mayor() que reciba 3 números y devuelva el mayor.
    Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.
    */
    function mayor($num1, $num2, $num3=100){
      global $funcionesEjecutadas; //Primero hay que invocar a la variable.
      $funcionesEjecutadas++; //Luego podemos operarla.

      if ($num1 > $num2){
        $elMayor = $num1;
        } else {
          $elMayor = $num2;
        }
        if ($elMayor < $num3){
          $elMayor = $num3;
        }
        return $elMayor;
    }

    $numero1 = 20;
    $numero2 = 30;
    $numero3 = 10;

//Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.
//Modificar tabla para que si recibe un sólo parámetro utilice el número 100.
    function tabla($base, $limite = 100){
      global $funcionesEjecutadas; //Primero hay que invocar a la variable.
      $funcionesEjecutadas++; //Luego podemos operarla.

      $tabla = [];
        for($i=$base; $i<=$limite ; $i++){
          $tabla[] = $i;
        }
      return $tabla;
    }
    $desde = 90;
    $hasta = 110;

    ?>
    <h2>Ejercicio 1 - Numero mayor</h2>
    <p>Los numero elegidos son:</p>
    <ul>
      <li>Numero 1: <?= $numero1 ?></li>
      <li>Numero 2: <?= $numero2 ?></li>
      <li>Numero 3: <?= $numero3 ?></li>
    </ul>
    <p>El numero mayor es: <?= mayor($numero1, $numero2, $numero3) ?> </p>
    <p>Pasamos solo 2 números. El tercero es 100: <?= mayor($numero1, $numero2) ?> </p>

<h2> Tabla</h2>
<p>Desde: <?= $desde?> Hasta: <?= $hasta ?></p>
<?php
  var_dump(tabla($desde, $hasta));
  var_dump(tabla($desde));
?>

<?php
/*

Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de la cadena: "Me encanta php, a mi también me encanta php!" Buscan en el manual de php la función y la prueban.

Tomando la maqueta de Craftsy ya armada modificar el ejercicio para que los siguientes recursos no esten duplicados sino que deben ser reutilizados:
Header
Footer
Hojas de estilos (Elementos repetidos en <head>)

Agregar además soporte en Craftsy para que los artículos provengan de un Array similar a como lo hicimos en Kitchening.

Modificar el array de artículos para que además tengan un “precio”

Generar una función descripcionLarga que dado un artículo devuelva un String que tenga la descripción del artículo y el precio.

Modificar la maqueta para que en el espacio donde se imprimen las descripciones de los artículos se imprima la descripcionLarga

Agregar un valor booleano a los “articulos” que sea “estaEnOferta”. Si el artículo está en oferta se le hace un 20% de descuento al precio original. Generar una función para calcular los precios finales y mostrarlos en la visualización del usuario.
*/

?>
</body>
</html>
