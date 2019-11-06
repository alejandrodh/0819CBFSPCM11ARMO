<?php

//PDO es una libreria de php.

$dsn = "mysql:host=127.0.0.1;dbname=movies_db;port=3306";
$user = "root";
$pass = "root"; //Para Linux/ Apple
//$pass = ""; Para Windows

// $db = new PDO($dsn, $user, $pass); //Resuelve la conexión.
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL

try {
  $db = new PDO($dsn, $user, $pass); //Resuelve la conexión.
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL
} catch (\Exception $e) {
  echo $e->getMessage();
  //var_dump($e);
}
