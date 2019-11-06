<?php

include "connection.php";
echo "<h1> Consultas </h1>";

//INSERT CON PDO
//$queryInsert = $db->prepare("INSERT INTO actors
//              VALUES(default, null, null,'Gonza', 'Zevallos','9','6' )");
//$queryInsert->execute();

$stmt = $db->prepare("SELECT * FROM actors");
$stmt->execute();
$actores = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($actores);

//Seguridad

$stmt2 = $db->prepare("INSERT INTO actors
              VALUES(null, null, null,:nombre, :apellido,:rating,:peli_fav )");

$stmt2->bindValue(":nombre", "Ale");
$stmt2->bindValue(":apellido", "Vivone");
$stmt2->bindValue(":rating", "1");
$stmt2->bindValue(":peli_fav", "10");

$stmt2->execute();
