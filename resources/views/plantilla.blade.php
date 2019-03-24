<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    @yield('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  </head>
  <body>
    <div id="container">
    <header>
      <nav>
        <div class="logo">
          <a href="#" id="logo">SportWear</a>
        </div>
        <form class="search" action="index.html" method="post">
          <input type="search" name="search" value="" placeholder=" Buscar productos">
          <button type="button" name="button">
            <i class="fas fa-search"></i>
          </button>
        </form>
        <div id="logo-menu" ><a href="#"><i class="fas fa-align-justify"></i></a></div>
        <ul id="menu" class="menu">
          <li><a href="#">MARCAS <i class="fas fa-angle-double-down"></i></a>
            <ul class="submenu">
              <li><a href="#">NIKE</a></li>
              <li><a href="#">ADIDAS</a></li>
              <li><a href="#">PUMA</a></li>
              <li><a href="#">TOPPER</a></li>
            </ul>
          </li>
          <li><a href="#">CATEGORÍAS <i class="fas fa-angle-double-down"></i></a>
            <ul class="submenu">
              <li><a href="#">GORRAS</a></li>
              <li><a href="#">REMERAS</a></li>
              <li><a href="#">PANTALONES</a></li>
              <li><a href="#">ZAPATILLAS</a></li>
            </ul>
          </li>
          <li><a href="#">INGRESAR <i class="fas fa-angle-double-down"></i></a>
            <ul class="submenu">
              <li><a href="/login">INICIAR SESIÓN</a></li>
              <li><a href="/register">REGISTRATE</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    </div>
    @yield("contenido")
    <footer>
      <h1>Seguinos en nuestras redes</h1>
      <ul class="redes">
        <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.twitter.com"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </footer>
    <script src="http://localhost:35729/livereload.js"></script>
  </body>
</html>
