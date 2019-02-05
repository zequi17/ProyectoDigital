<?php

$dsn = 'mysql:host=localhost;dbname=baseproyecto';
$usuario = "root";
$pass = "";

try {
  $db = new PDO ($dsn, $usuario, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (\Excepton $e) {
  echo "ERROR!"; exit;
}
 ?>
