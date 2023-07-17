<?php
$servidor = "localhost";
//$usuario = "id21029956_ana";
//$usuario = "id21029956_ana";
$usuario = "root";
//$clave = "12345_Ana";
$clave = "";
$conexion = mysqli_connect($servidor, $usuario, $clave);
$baseDatos = "php_codo_a_codo";
//$baseDatos = "id21029956_php_codo_a_codo";
mysqli_select_db($conexion,$baseDatos);
//$sql = "SELECT * FROM compra_tickets";
?>