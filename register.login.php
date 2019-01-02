<?php
  require_once("funciones.php");
//Registracion . . . . . .
if ($_FILES["avatar"]["error"] != 0) {
  echo "Hubo un error al cargar la imagen <br>";
}else {
  $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);

  if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
    echo "La imagen debe ser de formato jpg, jpeg o png <br>";
  }else{
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "archivos/avatar." . $ext);
  }
}

  $errores = [];

  $usuarioDefault = "";
  $emailDefault = "";
  $confirmemailDefault = "";

  if ($_POST) {
    $errores = ValidarRegistracion();

    if(count($errores) == 0) {

      $usuario = armarUsuario();

      guardarUsuario($usuario);

      guardarAvatar($usuario);

      header("location:inicio.php");exit;
    }

    $usuarioDefault = $_POST["usuario"];
    $emailDefault = $_POST["email"];
    $confirmemailDefault = $_POST["confirmemail"];

  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SportsWear</title>
    <link rel="stylesheet" href="css registracion/register-login.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
          <img src="images/Fondo.jpg" alt="fondo">
    <div class="padre">
      <a href="" class="titulo" style="padding-left: 53px;">SportsWear</a>
      <ul style="color:red;background-color:black;">
        <?php foreach ($errores as $error) : ?>
          <li>
            <?=$error?>
          </li>
        <?php endforeach; ?>
      </ul>
        <div class="formularioRegis" style="padding-left: 193px;">
          <!-- REGISTRACION -->
      <p class="regis">Registrate</p>
        <form class="register" action="register.login.php" method="POST" enctype="multipart/form-data">
          <p>
            <input id="usuario" type="text" name="usuario" value="<?=$usuarioDefault?>" placeholder="Mi usuario">
          </p>
          <div class="pass">
            <input type="file" name="avatar" value="">
          </div>
          <div class="pass">
          <p>
            <input id="email" type="text" name="email" value="<?=$emailDefault?>" placeholder="Mi correo electronico">
          </p>
          </div>
          <div class="pass">
          <p>
            <input id="confirmemail" type="text" name="confirmemail" value="<?=$confirmemailDefault?>" placeholder="Confirmar correo electronico">
          </p>
          </div>
          <div class="pass">
          <p>
            <input id="contraseña" type="password" name="contraseña" value="" placeholder="Mi contraseña">
          </p>
          </div>
          <div class="boton">
          <button type="submit" name="button">Crear perfil</button>
          </div>
          <p style="color: white;">
            ¿Ya tienes una cuenta? <a href="login.php" style="color: white;">Iniciar sesión</a>
          </p>
        </form><br><br><br><br>
      </div>
      <footer>
        <ul>
          <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
          <li><a href="https://www.twitter.com"><i class="fab fa-twitter-square"></i></a></li>
          <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>
