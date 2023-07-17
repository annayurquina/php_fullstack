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
  include("./backend/conexion.php");
  $id = $_GET["id"];
  $sql = "SELECT * FROM compra_tickets WHERE id=" . $id;
  $consulta = mysqli_query($conexion,$sql);
  $fila = mysqli_fetch_assoc($consulta);
  var_dump($fila);
  ?>
  
  <h2 class="text-center mt-5 mb-3">Modificar Compra</h2>
  <div id="compra-tickets" class="d-flex justify-content-center mb-5">
    <form action="./datosCompra.php" id="formulario-ticket" class="contenedor-form d-flex flex-column needs-validation" method="POST">
      <div class="contenedor-username mb-3">
        <div class="d-flex flex-column username">
          <input class="form-control" type="text" placeholder="Nombre" id="nombre-ticket" name="nombre-ticket" required>
          <div class="invalid-feedback">
            Proporcione un nombre válido.
          </div>
        </div>
        <div class="d-flex flex-column username">
          <input class="form-control" type="text" placeholder="Apellido" id="apellido-ticket" name="apellido-ticket" required>
          <div class="invalid-feedback">
            Proporcione un apellido válido.
          </div>
        </div>
      </div>
      <input class="form-control" type="email" placeholder="Correo" id="email-ticket" name="email-ticket" required>
      <div class="mb-3 invalid-feedback">
        Proporcione un email válido.
      </div>
      
      <div class="contenedor-username mb-5 mt-2">
        <div class="d-flex flex-column username">
          <label for="cantidad-ticket">Cantidad</label>
          <input class="form-control" type="number" name="cantidad-ticket" placeholder="cantidad" min="1" max="10" id="cantidad-ticket" value="1" required onclick="total_pago()" onkeyup="total_pago()">
          <div class="mb-3 invalid-feedback">
            Proporcione un valor entre [1,9].
          </div>
        </div>
        <div class="d-flex flex-column username">
          <label for="categoria-ticket">Categoría</label>
          <div></div>
          <select name="categoria-ticket" class="form-select" id="categoria-ticket" required>
            <option id="cat-regular" value="regular" onclick="total_pago()">Regular</option>
            <option value="estudiante" onclick="total_pago()">Estudiante</option>
            <option value="trainee" onclick="total_pago()">Trainee</option>
            <option value="junior" onclick="total_pago()">Junior</option>
          </select>
          
        </div>
      </div>
      <p id="mensaje_total" name="mensaje_total" class="form-control border border-1 border-info-subtle bg-info-subtle text-primary">Total a pagar es: $</p>
      <button type="submit" id="btn-comprar" class="btn btn-primary py-3">Guardar</button>
    </form>
  </div>
  <?php
  include("./backend/footer.php");
  var_dump($_GET);

  ?>
</body>