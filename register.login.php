<?php
  require_once("funciones.php");

  $errores = [];

  $usuarioDefault = "";
  $emailDefault = "";
  $confirmemailDefault = "";

  if ($_POST) {
    $errores = ValidarRegistracion();

    if(count($errores) == 0) {

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
    <title>SportCity</title>
    <link rel="stylesheet" href="css/register-login.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
          <img src="images/Fondo.jpg" alt="fondo">
    <div class="padre">
      <a href="" class="titulo">SportCity</a>
      <ul style="color:red;background-color:black;">
        <?php foreach ($errores as $error) : ?>
          <li>
            <?=$error?>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="formularios">
      <div class="formulario1">
      <p class="is">Iniciar sesión</p>
      <form class="login" action="register.login.php" method="POST">
        <p>
          <input id="user" type="text" name="user" value="" placeholder="Usuario">
        </p>
        <div class="pass">
        <p>
          <input id="password" type="password" name="password" value="" placeholder="Contraseña">
        </p>
        </div>
      </form>
      <div class="boton">
      <button type="submit" name="button">Inciciar sesión</button>
      </div>
      </div>
      <div class="separar">
      <hr>
        </div>
        <div class="formulario2">
      <p class="regis">Registrate</p>
      <div class="registro">
        <form class="register" action="register.login.php" method="POST">
          <p>
            <input id="usuario" type="text" name="usuario" value="<?=$usuarioDefault?>" placeholder="Mi usuario">
          </p>
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
          <div class="boton">
          <button type="submit" name="button">Crear perfil</button>
          </div>
          </div>
        </form><br><br><br><br>
      </div>
      </div>
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
