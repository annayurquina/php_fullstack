<?php
$servidor = "localhost";
//$usuario = "id21029956_ana";
//$usuario = "id21029956_ana";
$usuario = "root";
//$clave = "12345_Ana";
$clave = "";
//$baseDatos = "id21029956_php_codo_a_codo";
$baseDatos = "php_codo_a_codo";

try{
  $conexion = mysqli_connect($servidor, $usuario, $clave);
}catch(Exception $error){
  echo "No se pudo conectar al servidor de la base de datos";
}
try{
  mysqli_select_db($conexion,$baseDatos);
}catch (Exception $error){
  echo "fallo al conectar con la base de datos";
}
?>