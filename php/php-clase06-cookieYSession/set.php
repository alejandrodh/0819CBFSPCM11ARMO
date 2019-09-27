<?php
echo "Seteando cookie";
$usuario = ["nombre"=>"Ale", "curso"=>"fs"];
setcookie("nombreDelaCookie", "ale", time()+30);

?>

<a href="ver.php">ver cookie/session</a>
