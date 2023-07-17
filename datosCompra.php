<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/main2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Ana Karen Yurquina</title>
</head>
<body>
<?php
include("./backend/menu.php");
echo "<p>En archivo datosCompras.php</p>";
echo "<p>Los datos fueron recibidos</p>";
//echo "<p>Contenido de la variable superglobal: ".$_POST."</p>";
//print_r($_POST);
$nombre = $_POST["nombre-ticket"];
$apellido = $_POST["apellido-ticket"];
$email = $_POST["email-ticket"];
$cantidad = $_POST["cantidad-ticket"];
$categoria = $_POST["categoria-ticket"];


//echo '<p>nombre:'.$nombre.'</p>';
include("./backend/conexion.php");
$sql = "INSERT INTO compra_tickets VALUES(NULL,'$nombre','$apellido','$email','$cantidad','$categoria');";

$consulta = mysqli_query($conexion,$sql);

//var_dump($consulta);


mysqli_close($conexion);
include("./backend/footer.php");

?>

</body>