<?php

$items = [
  "pan" => [2,60],
  "leche" => [40],
  "cereales" => 200,
];

$velocimetro = 60;

function totalDeCompra($arrayDeItems){
  $total = 0;
  foreach ($arrayDeItems as $precio) {
    $total = $total + $precio;
  }
  return $total;
}
$total = totalDeCompra($items);
echo $total;

//echo "El total de la compra es: " . totalDeCompra($items);
//

function viajarEnElTiempo($velocidad){
  if($velocidad >= 55){
    return "Nos fuimos!";
  } else{
    return "Dale gas!!!!!!";
  }
}

function saludar($nombre, $apellido=null){
  return "Hola $nombre $apellido";
}




echo saludar("Karly");
echo viajarEnElTiempo($velocimetro);


function nombreCompleto($nombre,$apellido){
 return "$nombre $apellido";
}
 nombreCompleto("juan","Perez");




?>
