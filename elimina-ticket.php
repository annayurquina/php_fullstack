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
echo "<p>En archivo eliminar-ticket.php</p>";
echo "<p>Los datos fueron recibidos</p>";
//echo "<p>Contenido de la variable superglobal: ".$_POST."</p>";
//print_r($_POST);
$id = $_GET["id"];

//echo "<p>id=".$id;


//echo '<p>nombre:'.$nombre.'</p>';
include("./backend/conexion.php");
try{
  $sql = "DELETE FROM compra_tickets WHERE id='$id';";
  
  $consulta = mysqli_query($conexion,$sql);
  
  echo "<p>Ticket Eliminado</p>";
  //var_dump($consulta);
}catch(Exception $error){
  echo "no pudo eliminar";
}


try {
  mysqli_close($conexion);
}catch(Exception $error){
  echo "error al cerrar la Base de datos";
}
include("./backend/footer.php");

?>

</body>