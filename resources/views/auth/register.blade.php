<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/log-reg.css">
  </head>
  <body>
    <header>
      <a class="titulo" href="/inicio">SportWear</a>
    </header>
    <div id="container">
      <div class="formulario">
      <p>Registrate</p>
      <form class="form-login" action="/login" method="post" enctype="multipart/form-data">
        <input type="text" name="name" value="" placeholder="Nombre *">
        <input type="text" name="surname" value="" placeholder="Apellido *">
        <input type="email" name="email" value="" placeholder="Correo electronico *">
        <input type="password" name="password" value="" placeholder="Contraseña *">
        <input type="password_confirmation" name="passwordConfirmation" value="" placeholder="Confirmar contraseña *">
        <button type="button" name="button">Registrate</button>
      </form>
      <a class="registrate" href="/register">¿No estas registrado?</a>
      </div>
        </div>
    <script src="http://localhost:35729/livereload.js"></script>
  </body>
</html>
