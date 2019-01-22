<?php
//Vakudacion de LOGIN . . . . . . . .
function validarLogin() {

  $errores = [];

//VALIDACION CORREO . . . . . . .

  if (estaVacio($_POST["email"])){
    $errores["email"] = "Por favor complete el campo Correo Electronico.";
  }else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores2["email"] = "El email debe ser valido.";
  }else if (!existeElEmail($_POST["correo"])) {
    $errores2["email"] = "El Email no existe.";
  }

  //VALIDACION CONTRASEÑA . . . . . . .
Luis
  if (estaVacio($_POST["contraseña"])) {
    $errores["contraseña"] = "Falta la contraseña.";
  }

  if (empty($errores)){
    $ususario = buscarUsuarioPorEmail($_POST["email"]);

    $hash = $usuario["contraseña"];

    if (password_verify($_POST["contraseña"], $hash)){
      $errores2["email"] = "El email o la contraseña es incorrecto.";
    }
  }
  return $errores;
}

//Validacion del Registro . . . . . .
function validarRegistracion() {
  $errores = [];
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
    "id" => traerProximoId(),
    "usuario" => ucfirst(trim($_POST["usuario"])),
    "email" => trim($_POST["email"]),
    "contraseña" => password_hash($_POST["contraseña"], PASSWORD_DEFAULT),
    "avatar" => uniqid() . "." . $ext,
  ];
}

function traerProximoId() {
  $usuarios = traerUsuarios();

  if ($usuarios == []){
    return 1;
  }

  $ultimoUsuario = end($usuarios);

  return $ultimoUsuario["id"] + 1;
  var_dump($usuarios);exit;

}

function traerUsuarios(){
  $leerArchivo = file_get_contents("usuarios.json");

  if ($leerArchivo == "") {
    return [];
  }

  $usuarios = json_decode($leerArchivo, true);

  return $usuarios;
}

function guardarUsuario($usuario) {
  $usuarios = traerUsuarios();

  $usuarios[] = $usuario;

  $json = json_encode($usuarios);

  file_put_contents("usuarios.json", $json);
}

function existeElEmail($email){
  if (buscarUsuarioPorEmail($email) === null){
    return false;
  }else {
    return true;
  }
}

function buscarUsuarioPorEmail($email){
  $usuarios = traerUsuarios();

  foreach ($usuarios as $usuario) {
    if ($usuario["email"] == $email) {
      return $usuario;
    }
  }
  return null;
}

function guardarAvatar($usuario) {
  move_uploaded_file($_FILES["avatar"]["tmp_name"], "avatars/" . $usuario["avatar"]);
}
 ?>
