<?php

require_once("com.php");
session_start();

//Vakudacion de LOGIN . . . . . . . .
function validarLogin() {

  $errores = [];

//VALIDACION CORREO . . . . . . .

  if (estaVacio($_POST["email"])){
    $errores["email"] = "Por favor complete el campo Correo Electronico.";
  }else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores2["email"] = "El email debe ser valido.";
  }else if (!existeElEmail($_POST["email"])) {
    $errores2["email"] = "El Email no existe.";
  }

  //VALIDACION CONTRASEÑA . . . . . . .

  if (estaVacio($_POST["contrasena"])) {
    $errores["contrasena"] = "Falta la contraseña.";
  }

  if (empty($errores)){
    $usuario = buscarUsuarioPorEmail($_POST["email"]);

    $hash = $usuario["password"];

    if (password_verify($_POST["contrasena"], $hash)){
      $errores2["email"] = "El email o la contraseña es incorrecto.";
    }
  }
  return $errores;
}

//Validacion del Registro . . . . . .
function validarRegistracion() {
  $errores = [];

  // var_dump(existeElEmail($_POST["email"]), $_POST["email"]); exit;
  //USUARIO

  if (estaVacio($_POST["usuario"])) {
    $errores["usuario"] = "Es obligatorio llenar el campo Usuario.";
  }else if(strlen($_POST["usuario"]) < 4) {
    $errores["usuario"] = "El usuario debe tener al menos 5 digitos.";
  }
  //CORREO ELECTRONICO
  if (estaVacio($_POST["email"])) {
    $errores["email"] = "Es obligatorio llenar el campo Correo Electronico.";
  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores["email"] = "Los correos no coinciden.";
  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores["email"] = "El email debe ser una casilla valida.";
  }else if(existeElEmail($_POST["email"])){
    $errores["email"] = "Este email ya esta en uso.";
  }
  //CONFIRMACION DE CORREO ELECTRONICO
  if (estaVacio($_POST["confirmemail"])) {
    $errores["confirmemail"] = "Es obligatorio llenar el campo de Confirmacion del Correo Electronico.";
}else if(filter_var($_POST["confirmemail"], FILTER_VALIDATE_EMAIL) == false){
  $errores["confirmemail"] = "El email de confirmacion debe ser una casilla valida.";
}

if($_POST["email"] != "" && $_POST["confirmemail"] != "" && $_POST["email"] != $_POST["confirmemail"]){
  $errores["email"] = "Los correos no coinciden.";
}

  //CONTRASEÑA
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
function armarUsuario() {
  $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
  return [
    //cambiar

    "usuario" => ucfirst(trim($_POST["usuario"])),
    "email" => trim($_POST["email"]),
    "contrasena" => password_hash($_POST["contraseña"], PASSWORD_DEFAULT),
    "avatar" => uniqid() . "." . $ext,
  ];
}
//cambiar
function traerProximoId() {
  $usuarios = traerUsuarios();

  if ($usuarios == []){
    return 1;
  }

  $ultimoUsuario = end($usuarios);

  return $ultimoUsuario["id"] + 1;
  var_dump($usuarios);exit;

}
//cambiar
function traerUsuarios(){
  global $db;

  $sql = "SELECT * FROM users";

  $consulta = $db->prepare($sql);

  $consulta->execute();

  return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

function guardarUsuario($usuario) {
  global $db;


  $sql = "INSERT INTO usuarios values(default, :usuario, :email, :contrasena, :avatar)";
  $consulta = $db->prepare($sql);
  $consulta->bindvalue(":usuario",$usuario["usuario"]);
  $consulta->bindvalue(":email",$usuario["email"]);
  $consulta->bindvalue(":contrasena",$usuario["contrasena"]);
  $consulta->bindvalue(":avatar",$usuario["avatar"]);
  $consulta->execute();
}

function existeElEmail($email){
  if (buscarUsuarioPorEmail($email) === false){
    return false;
  }else {
    return true;
  }
}

function buscarUsuarioPorEmail($email){
  global $db;

  $sql = "SELECT * FROM usuarios WHERE email = :email";

  $consulta = $db->prepare($sql);
  $consulta->bindvalue(":email",$email);
  $consulta->execute();
  $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
  return $resultado;
}

function guardarAvatar($usuario) {
  move_uploaded_file($_FILES["avatar"]["tmp_name"], "avatars/" . $usuario["avatar"]);
}
 ?>
