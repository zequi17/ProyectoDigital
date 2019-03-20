<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SportsWear</title>
    <link rel="stylesheet" href="css registracion/register-login.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/register-login.css">
  </head>
  <body>
    <div class="padre">
      <a href="/inicio" class="titulo" style="padding-left: 53px;">SportsWear</a>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <div class="formularioRegis" style="padding-left: 193px;">
          <!-- REGISTRACION -->
      <p class="regis">Registrate</p>
        <form class="register" action="/register" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <p>
            <input id="nombre" type="text" name="nombre" value="{{old('name')}}" placeholder="Nombre">
          </p>
          <div class="pass">
            <input type="file" name="avatar" value="">
          </div>
          <div class="pass">
          <p>
            <input id="email" type="text" name="email" value="{{old('email')}}" placeholder="Mi correo electronico">
          </p>
          </div>
          <div class="pass">
          <p>
            <input id="password" type="password" name="contraseña" value="" placeholder="Contraseña">
          </p>
          </div>
          <div class="pass">
          <p>
            <input id="password_confirmation" type="password" name="password_confirmationfirm" value="" placeholder="confirmar contraseña">
          </p>
          </div>
          <div class="boton">
          <button type="submit" name="button">Crear perfil</button>
          </div>
        </form><br><br><br><br>
        <a class="login" href="/login" style="color: white;">Iniciar sesión</a>
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
