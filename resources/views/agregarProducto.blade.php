<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Productos</title>
    <link rel="stylesheet" href="/css/agregar.css">
  </head>
  <body>
    <header>
      <a href="/">SportWear</a>
    </header>
    <div class="container">
      <h1>Agregar producto</h1>
      <form class="" action="/agregar" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="nombre">
          <label for="name">Nombre</label>
          <input type="text" name="name" value="">
        </div>

        <div class="precio">
          <label for="price">Precio</label>
          <input type="text" name="price" value="">
        </div>

        <div class="imagen">
          <label for="image">Imagen</label>
          <input type="file" name="image" value="">
        </div>

        <div class="categoria">
          <select class="categories" name="categories">
            <option value="0">Categoria</option>
            <option value="1">Campera</option>
            <option value="2">Remera</option>
            <option value="3">Pantalon</option>
            <option value="4">Zapatilla</option>
          </select>
        </div>

        <div class="marca">
          <select class="brand" name="brands">
            <option value="0">Marca</option>
            <option value="1">Adidas</option>
            <option value="2">Nike</option>
            <option value="3">Puma</option>
            <option value="4">Topper</option>
          </select>
        </div>
        <div class="boton">
        <button type="submit" name="button">AGREGAR</button>
        </div>
      </form>
    </div>
    <script src="http://localhost:35729/livereload.js"></script>
  </body>
</html>
