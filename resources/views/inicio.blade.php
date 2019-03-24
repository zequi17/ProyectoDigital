@extends('plantilla')

@section('titulo')
  SportWear
@endsection

@section('css')
  <link rel="stylesheet" href="css/inicio.css">
@endsection

@section('contenido')
<div class="slider">
  <div class="carrusel">
    <img src="../carrusel/carrusel1.jpg">
        </div>
        <div class="botones">
    <a id="anterior"><i class="fas fa-angle-left"></i></a>
    <a id="siguiente"><i class="fas fa-angle-right"></i></a>
    </div>
</div>
<script src="js/inicio.js"></script>
</body>
@endsection
