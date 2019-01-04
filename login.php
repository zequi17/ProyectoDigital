<?php
require_once("funciones.php");
//Login . . . . . .
$errores2 = [];
$correoDefault = "";
$contraseñaDefault = "";

if ($_POST){
  $errores2 = validarLogin();

  if (count($errores2) == 0){
    //LOGUEARLO

    header("location:inicio.php");exit;
  }
  $userDefault = $_POST["user"];
}
?>
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
      <a href="" class="titulo">SportsWear</a>
      <?php foreach ($errores2 as $error2) : ?>
        <li>
          <?=$error2?>
        </li>
      <?php endforeach; ?>
    </ul>
      <div class="formularioLogin" style="padding-left: 193px;">
      <p class="is">Iniciar sesión</p>
      <form class="login" action="register.login.php" method="POST" enctype="multipart/form-data">
        <p>
          <input id="correo" type="text" name="correo" value="<?=$correoDefault?>" placeholder="Correo Electronico">
        </p>
        <div class="pass">
        <p>
          <input id="contraseña" type="password" name="contraseña" value="<?=$contraseñaDefault?>" placeholder="Contraseña">
        </p>
        </div>
      </form>
      <div class="boton">
      <button type="submit" name="button">Inciciar sesión</button>
      </div>
      <p style="color: white;">¿No estas registrado? <a href="register.login.php" style="color: white;">Registrate</a></p>
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
