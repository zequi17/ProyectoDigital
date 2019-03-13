<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/inicio.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <!-- start nav -->
      <nav id="menu">
        <input id="buscador" type="search" name="search" value="" placeholder="Buscar producto">
        <!--<h1>
          asdasdasdasdsad
        </h1>
      <!-- start menu -->
      <ul>
       <li><a href="#">Ingresar</a>
      <!-- start menu desplegable -->
       <ul>
       <li><a href="#">Login</a></li>
       <li><a href="#">Register</a></li>
       </ul>
      <!-- end menu desplegable -->
       </li>
    </header>
    @yield("contenido")
  </body>
</html>
