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
  ?>

  

<main>
    <div class="container col-lg-4 text-center my-3">
        <h2>Lista de Tickets Comprados</h2>
        <a href="modificar.php?id=3"><i class="bi bi-pencil-fill"></i></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Ticket</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
            <?php
              include("./backend/conexion.php");
              $sql = "SELECT * FROM compra_tickets";
              $consulta = mysqli_query($conexion,$sql);
              if(mysqli_num_rows($consulta)>0){
                  while($fila=mysqli_fetch_assoc($consulta)){
                    echo 
                    "<tr>
                      <td>".$fila["id"]."</td>
                      <td>".$fila["nombre"]."</td>
                      <td>".$fila["apellido"]."</td>
                      <td>".$fila["email"]."</td>
                      <td>".$fila["cantidad"]."</td>
                      <td>".$fila["categoria"]."</td>
                      <td>".$fila["categoria"]."</td>
                    </tr>";
                  }
              }/*else{
                echo "<p>0 resultados</p>";
              }*/
            ?>
        </table>
    </div>
  </main>
<?php
mysqli_close($conexion);
?>
  <?php
  include("./backend/footer.php");
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
<script src="scripts.js"></script>

</html>