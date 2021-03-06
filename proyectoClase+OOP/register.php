<?php
  // Camino de la registración.
  //===========================
  // 1) Chequear que el formulario este cargando por POST.
  // 2) Validar los datos del formualario.
  //  2.1) Si el formulario no valida vamos a mostrar los errores al usuario.
  //  2.2) Persistir para el usuario los datos que si completo correctamente.
  // 3) Si no hay $errores:
  //  3.1) Crear al usario
  //  3.2) Guardarlo en json
  //  3.3) Guardar su imagen de perfil
  //  3.4) Redirigir al usuario a la página de inicio.

// include "functions.php";
include "init.php";


if($auth->usuarioLogueado()){
  header("Location:index.php");
  exit;
}

$errores = [];
$usernameOk = "";
$emailOk = "";

if($_POST){
  $errores = Validador::validarRegistro($_POST);
  //var_dump($_POST, $errores);

  $usernameOk = trim($_POST['username']); //El control lo hacemos en el campo input.
  $emailOk = trim($_POST['email']);


  if(!$errores){
    //$usuario = crearUsuario();
    $usuario = new Usuario($_POST);
     // var_dump($usuario);
     // exit;
    //guardarUsuario($usuario); //Guardaremos en un archivo .json.–
    $db->guardarUsuario($usuario); //Guardaremos en un archivo .json usando Objetos.

    // var_dump($_FILES);
    // exit;
    $ext = pathinfo($_FILES["avatar"]['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["avatar"]['tmp_name'], "avatar/". $_POST['username']. "." . $ext);

    $auth->loguearUsuario($_POST['email']);

    header("Location:index.php"); //Redirecciona.
    exit; //Siempre después de una redirección.
  }

}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-md-4 offset-md-4">Registrate</h1>
        <form class="col-md-4 offset-md-4" action="register.php" method="post" enctype="multipart/form-data">
          <?php /*?>
          <ul class="text-danger">
            <?php foreach ($errores as $error):?>
              <li><?= $error  ?></li>
            <?php endforeach ?>
          </ul>
          */ ?>
          <div class="form-group">
            <label for="username">User name</label>
            <?php  if(!isset($errores['username'])): ?>
              <input type="text" id="username" class="form-control" name="username" placeholder="Enter User name" value="<?= $usernameOk ?>">
            <?php else: ?>
              <input type="text" id="username" class="form-control" name="username" placeholder="Enter User name" value="">
            <?php endif ?>
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores['username'])) :?>
                <?= $errores['username'] ?>
              <?php endif ?>
            </small>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
              <?php  if(!isset($errores['email'])): ?>
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="<?= $emailOk ?>">
              <?php else: ?>
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="">
              <?php endif ?>
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores['email'])) :?>
                <?= $errores['email'] ?>
              <?php endif ?>
            </small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" value="">
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores['password'])) :?>
                <?= $errores['password'] ?>
              <?php endif ?>
            </small>
          </div>
          <div class="form-group">
            <label for="retypePassword">Retype password</label>
            <input type="password" id="retypePassword" class="form-control" name="retypePassword" placeholder="Retype password" value="">
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores['retypePassword'])) :?>
                <?= $errores['retypePassword'] ?>
              <?php endif ?>
             </small>
          </div>
          <div class="form-group">
            <label for="avatar">Imagen de perfil</label>
            <input name="avatar" type="file" id="avatar" class="form-control-file">
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores['avatar'])) :?>
                <?= $errores['avatar'] ?>
              <?php endif ?>
            </small>
          </div>
          <div class="form-group form-check">
            <?php if(isset($_POST['tyc'])): ?>
                <input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc" checked>
            <?php else: ?>
                <input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc" >
            <?php endif ?>
            <label for="tyc" class="form-check-label">Acepto los términos y condiciones.</label>
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores['tyc'])) :?>
                <?= $errores['tyc'] ?>
              <?php endif ?>
             </small>
          </div>
          <button type="submit" class="btn btn-primary">Registrate</button>
          <a class="" href="index.php">Cancelar</a>
          <a class="float-right" href="login.php">login</a>
        </form>

      </div>
    </div>


    <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
