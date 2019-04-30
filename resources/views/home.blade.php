@extends('plantilla')

@section('titulo')
  Bienvenido a SportWear
@endsection

@section('contenido')

@endsection

<ul>
  @if (Auth::check())
  <li>
    {{Auth::user()->name . " " . Auth::user()->surname}}
  </li>
  <li>
    <form class="" action="/logout" method="post">
      {{csrf_field()}}
      <button type="submit" name="logout">Logout</button>
    </form>
  </li>
  @else
    <li>
      <a href="/register">Register</a>
    </li>
    <li>
      <a href="/login">Login</a>
    </li>
    @endif
</ul>
