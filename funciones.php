<?php

function validarRegistracion() {
  $errores = [];
//Validacion del Registro
  if (estaVacio($_POST["usuario"])) {
    $errores["usuario"] = "Es obligatorio llenar el campo Usuario.";
  }else if(strlen($_POST["usuario"]) < 4) {
    $errores["usuario"] = "El usuario debe tener al menos 5 digitos.";
  }

  if (estaVacio($_POST["email"])) {
    $errores["email"] = "Es obligatorio llenar el campo Correo Electronico.";
  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores["email"] = "Los correos no coinciden.";
  }

    if (estaVacio($_POST["confirmemail"])) {
      $errores["confirmemail"] = "Es obligatorio llenar el campo de Confirmacion del Correo Electronico.";
  }else if(filter_var($_POST["confirmemail"], FILTER_VALIDATE_EMAIL) == false){
    $errores["confirmemail"] = "El email de confirmacion debe ser una casilla valida.";
  }

  if($_POST["email"] != "" && $_POST["confirmemail"] != "" && $_POST["email"] != $_POST["confirmemail"]){
    $errores["email"] = "Los correos no coinciden.";
  }

  if (estaVacio($_POST["contraseña"])) {
    $errores["contraseña"] = "Es obligatorio llenar el campo Contraseña.";
  }

  else if(strlen($_POST["contraseña"]) < 8) {
    $errores["contraseña"] = "La contraseña debe contener minimo 8 digitos.";
  }

  return $errores;
}

function estaVacio($campo) {
  if ($campo == "") {
  return true;
}
  else {
    return false;
  }
}
 ?>
