<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Productos</title>
    <link rel="stylesheet" href="/css/agregar.css">
  </head>
  <body>
    <head>
      <a href="/home">SportWear</a>
    </head>
    <div class="container">
      <h1>Agregar producto</h1>
      <form class="" action="/agregar" method="post">
        {{csrf_field()}}
        <div class="nombre">
          <label for="name">Nombre</label>
          <input type="text" name="name" value="">
        </div>

        <div class="precio">
          <label for="price">Precio</label>
          <input type="text" name="price" value="">
        </div>

        <div class="categoria">
          <select class="categories" name="">
            <option value="1">Categoria</option>
            <option value="2">zapato</option>
          </select>
        </div>

        <div class="marca">
          <select class="brand" name="">
            <option value="1">Marca</option>
            <option value="2" name="2" >asdasd</option>
          </select>
        </div>

        <button type="submit" name="button">AGREGAR</button>

      </form>
    </div>
  </body>
</html>
