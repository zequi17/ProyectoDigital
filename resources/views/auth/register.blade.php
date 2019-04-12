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
      <h1>Registrate</h1>
      <form class="form-login" action="/login" method="post" enctype="multipart/form-data">
        <div class="container">
        <input type="text" id="name" name="name" value="" placeholder="Nombre *">
        <div class="msj-error"></div>
      </div>
      <div class="container">
        <input type="text" id="username" name="surname" value="" placeholder="Apellido *">
        <div class="msj-error"></div>
      </div>
      <div class="container">
        <input type="email" id="email" name="email" value="" placeholder="Correo electronico *">
        <div class=""></div>
      </div>
        <select id="paises" class="" name="paises"></select>
        <select id="provincias" class="hidden" name="paises"></select>
        <input type="password" name="password" values="" placeholder="Contraseña *">
        <input type="password_confirmation" name="passwordConfirmation" value="" placeholder="Confirmar contraseña *">
        <button type="button" name="button">Registrate</button>
      </form>
      <a class="registrate" href="/register">¿No estas registrado?</a>
      </div>
        </div>
    <script src="http://localhost:35729/livereload.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>
