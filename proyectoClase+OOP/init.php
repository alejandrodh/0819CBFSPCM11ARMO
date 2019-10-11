<?php
//Todo lo necesario para instanciar clases.

include "clases/dbjson.php";
include "clases/usuario.php";
include "clases/auth.php";

$data = "db.json";
$auth = new Auth;
$json = new DbJson($data);
