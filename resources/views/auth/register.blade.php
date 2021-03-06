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
      <a class="titulo" href="/home">SportWear</a>
    </header>
    <div id="container">
      <div class="formulario">
      <h1>Registrate</h1>
      <form class="form-login" action="/register" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="container">
          <div class="msj-error"></div>
        <input type="text" id="name" name="name" value="" placeholder="Nombre *">
      </div>
      <div class="container">
        <div class="msj-error"></div>
        <input type="text" id="surname" name="surname" value="" placeholder="Apellido *">
      </div>
      <div class="container">
        <div class="msj-error"></div>
        <input type="email" id="email" name="email" value="" placeholder="Correo electronico *">
      </div>
      <div class="container">
        <div class="msj-error"></div>
        <select id="paises" class="" name="pais">
          <option value="">Elegir país</option>
        </select>
        </div>
      <div class="container hidden" id="cities">
        <div class="msj-error"></div>
        <select id="provincias" name="provincias">
          <option value="">Provincia *</option>
        </select>
    </div>
    <div class="container">
      <div class="msj-error"></div>
        <input type="password"  id="password" name="password" values="" placeholder="Contraseña *">
        </div>
        <div class="container">
          <div class="msj-error"></div>
        <input type="password" id="password-confirm" name="passwordConfirmation" value="" placeholder="Confirmar contraseña *">
        </div>
        <button id="btn-submit" type="submit" name="button">Registrate</button>
      </form>
      <a class="registrate" href="/login">¿Ya tienes cuenta?</a>
      </div>
        </div>
    <script src="http://localhost:35729/livereload.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>
