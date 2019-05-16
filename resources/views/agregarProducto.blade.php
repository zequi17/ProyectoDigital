@extends('plantilla')

@section("titulo")
Agregar producto
@endsection

@section("head")
  <link rel="stylesheet" href="/css/agregar.css">
@endsection

@section("contenido")
<div id="padre">

<div class="container">

  <h1>Agregar producto</h1>
  <form class="form" action="/agregarProducto" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="container">
      <div class="msj-error"></div>
    <input type="text" id="name" name="name" value="" placeholder="Nombre *">
  </div>
  <div class="container">
  <div class="container">
    <div class="msj-error"></div>
    <input type="text" id="price" name="price" value="" placeholder="Precio *">
  </div>
  <div class="container">
    <div class="msj-error"></div>
    <select id="category" class="" name="category">
      <option value="">Categoria</option>
    </select>
    </div>
    <div class="msj-error"></div>
    <select id="brand" name="brand">
      <option value="">Marca *</option>
    </select>
</div>
<div class="container">
  <div class="msj-error"></div>
    <input type="password"  id="password" name="password" values="" placeholder="Contraseña *">
    </div>
    <button id="btn-submit" type="submit" name="button">Agregar producto</button>
  </form>

  </div>
</div>
<script src="http://localhost:35729/livereload.js"></script>
<script src="js/register.js"></script>
@endsection
