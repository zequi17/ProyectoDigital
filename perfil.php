<?php
    require_once("funciones.php");

    if (!isset($_SESSION["emailUsuarioLogueado"])) {
      header('location: login.php'); exit;
    }

    $usuario = buscarUsuarioPorEmail($_SESSION["emailUsuarioLogueado"]);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hola <?php echo $usuario["user"] ?></h1>
    <a href="logout.php">Salir</a>
  </body>
</html>
