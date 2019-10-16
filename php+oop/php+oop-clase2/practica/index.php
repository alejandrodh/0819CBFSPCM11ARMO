<?php
include "cliente.php";
include "persona.php";
include "pyme.php";
include "multi.php";

$persona = new Persona("ale", "vivone", "32987234", "2000-12-12", "ale@dh.com", "1234");
$pyme = new Pyme("3409976", "dh", "ale@dh.com", "1234");
$multi = new Multi("3409976", "dh", "Argentina", "ale@dh.com", "1234");

var_dump($persona, $pyme, $multi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mostar datos</h1>
</body>
</html>