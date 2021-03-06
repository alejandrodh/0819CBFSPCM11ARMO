<?php
include "functions.php";
//var_dump($_SESSION); //Para ver que realmente está cargado el dato en sesión.

if(isset($_COOKIE['email'])){
  //Si está seteada la cookie es porque el usuario tildó recordarme. Vamos a loguerarlo desde la cookie.
  loguearUsuario($_COOKIE['email']);
}

if (usuarioLogueado()) {
  $usuario = buscarUsuarioPorEmail($_SESSION['email']);  // code...
}





?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/master.css">
    <title>Home Page</title>
  </head>
  <body>
    <div class="container">
      <h1>Home Page</h1>
      <div class="d-flex justify-content-between">
        <?php if(!usuarioLogueado()): ?>
          <a class="btn btn-success" href="login.php">Login</a>
          <a class="btn btn-warning" href="register.php">Register</a>
        <?php else: ?>
          <div class="">
            <img class="avatar" src="avatar/<?= $usuario['username'] ?>.jpg" alt="<?= $usuario['username'] ?>">
            <span>Hola: <?= $usuario['username'] ?></span>
            <a href="usuarios.php">ver usuarios</a>
          </div>
          <a class="btn btn-danger" href="logout.php">Logout</a>
        <?php endif ?>
      </div>
    </div>



    <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
