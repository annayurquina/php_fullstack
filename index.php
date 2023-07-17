<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Ana Karen Yurquina</title>
</head>
<body>
  <?php
  include("./backend/menu.php");
  ?>
  <div  id="conferencia" class="d-flex justify-content-end texto-descripcion">
    <div class="banner-descripcion">
      <h1>Conf Bs As</h1>
      <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los otradores de primer nivel que tenemos para ti. Te esperamos!</p>
      <div>
        <a role="button" class="btn btn-outline-secondary border border-light text-light btn-text-descr" href="#quiero-ser-orador">Quiero ser orador</a>
        <a role="button" class="btn btn-success btn-text-descr" href="#">Comprar Tickets</a>
      </div>
    </div>
  </div>
  <div id="oradoresid"></div>
  <main>
    <section class="d-flex flex-column align-items-center">
      <div class="my-lg-5 text-center">
        <p class="text-uppercase">conoce a los oradores</p>
        <h3 class="text-uppercase">oradores</h3>
      </div>
      <div class="contenedor-cards mb-5 pb-5">
        <div class="card">
          <figure>
            <img src="./img/steve.jpg" alt="steve_jobs" class="card-img-top imagen-card">
          </figure>
          <div class="cabecera-card">
            <div type="button" class="btn btn-warning fw-bolder btn-card ms-3">JavaScript</div>
            <div type="button" class="btn btn-primary fw-bolder btn-card">React</div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Steve Jobs</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat saepe quibusdam ex quod temporibus neque corrupti modi fugit quae. Distinctio accusamus accusantium fuga iure odit reiciendis voluptate ipsa earum non optio, pariatur ea minus adipisci soluta.</p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="./img/bill.jpg" alt="bill_gates" class="card-img-top imagen-card">
          </figure>
          <div class="cabecera">
            <div type="button" class="btn btn-warning fw-bolder btn-card ms-3">JavaScript</div>
            <div type="button" class="btn btn-primary fw-bolder btn-card">React</div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Bill Gates</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat saepe quibusdam ex quod temporibus neque corrupti modi fugit quae. Distinctio accusamus accusantium fuga iure odit reiciendis voluptate ipsa earum non optio, pariatur ea minus adipisci soluta.</p>
          </div>
        </div>
        <div class="card">
          <figure>
            <img src="./img/ada.jpeg" alt="ada_lovelace" class="card-img-top imagen-card">
          </figure>
          <div class="cabecera">
            <div type="button" class="btn btn-secondary fw-bolder btn-card ms-3">Negocios</div>
            <div type="button" class="btn btn-danger fw-bolder btn-card">Startups</div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Ada Lovelace</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat saepe quibusdam ex quod temporibus neque corrupti modi fugit quae. Distinctio accusamus accusantium fuga iure odit reiciendis voluptate ipsa earum non optio, pariatur ea minus adipisci soluta.</p>
          </div>
        </div>
      </div>
    </section>
    <div id="lugarid"></div>
    <div id="carrusel-auto" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner mb-4">
        <div class="carousel-item active">
          <div class="w-100 d-flex card-carrusel">
            <img src="./img/ba3.jpg" alt="buenos_aires" class="imagen-carrusel">
            <div class="texto-carrusel">
              <h2>Bs As - Octubre</h2>
              <p>Buenos Aires es la gran capital cosmopolita de Argentina. Su centro es la Plaza de Mayo, rodeada de imponentes edificios del siglo XIX, incluida la Casa Rosada, el icónico palacio presidencial que tiene varios balcones. Entre otras atracciones importantes, se incluyen el Teatro Colón, un lujoso teatro de ópera de 1908 con cerca de 2,500 asientos, y el moderno museo MALBA, que exhibe arte latinoamericano</p>
              <button type="button" class="btn btn-outline-light">Conocé más</button>
            </div>
          </div>
        </div>
        <div class="carousel-item carrusel-alto">
          <div class="w-100 d-flex card-carrusel">
            <img src="./img/honolulu.jpg" alt="honolulu" class="imagen-carrusel">
            <div class="texto-carrusel">
              <h2>Hawaii - Noviembre</h2>
              <p>Honolulu, en la costa sur de la isla de Oahu, es la capital de Hawái y la vía de acceso a la cadena de islas de EE.UU. El barrio de Waikiki es un centro de restaurantes, vida nocturna y comercio, famoso por su icónica playa con forma de medialuna bordeada de palmeras y hoteles de muchos pisos y con el cráter volcánico Diamond Head en lo alto a la distancia. Los sitios relacionados con el ataque a Pearl Harbor en la Segunda Guerra Mundial incluyen el USS Arizona Memorial.</p>
              <button type="button" class="btn btn-outline-light">Conocé más</button>
            </div>
          </div>
        </div>
        <div class="carousel-item carrusel-alto">
          <div class="w-100 d-flex card-carrusel">
            <img src="./img/hawaii2.jpg" alt="hawaii" class="imagen-carrusel">
            <div class="texto-carrusel">
              <h2>Honolulu - Diciembre</h2>
              <p>Hawái, un estado de los EE.UU., es un archipiélago volcánico aislado en el Pacífico central. Sus islas son famosas por sus paisajes escabrosos de riscos, cascadas, follaje tropical y playas con arenas doradas, rojas, negras e incluso verdes. De las 6 islas principales, Oahu tiene la capital y la ciudad más grande de Hawái, Honolulu, donde se encuentra la playa de media luna Waikiki y los memoriales de la Segunda Guerra Mundial en Pearl Harbor.</p>
              <button type="button" class="btn btn-outline-light">Conocé más</button>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carrusel-auto" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carrusel-auto" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="text-center mb-5">
      <p class="text-uppercase">conviértete en un</p>
      <h3 id="quiero-ser-orador" class="text-uppercase">orador</h3>
      <p>Anótate como orador para dar una <span class="link-puntos link-offset-3">charla ignite</span>. Cuéntanos de qué quieres hablar!</p>
    </div>
    <div class="d-flex justify-content-center">
      <form action="" class="contenedor-form d-flex flex-column needs-validation" novalidate>
        <div class="contenedor-username mb-3">
          <input class="form-control username" type="text" placeholder="Nombre">
          <input class="form-control username" type="text" placeholder="Apellido">
        </div>
        <textarea class="form-controlform-control" type="text" placeholder="Sobre qué quieres hablar?" rows="7"></textarea>
        <div class="invalid-feedback">
          Por favor recuerda incluir un título para tu charla.
        </div>  
        <button type="submit" disabled class="btn btn-success my-5" data-bs-toggle="button" autocomplete="off">Enviar</button>
      </form>
    </div>
    <div class="contenedor-cards mx-5">
      <div class="card border border-primary text-center">
        <div class="card-header border-0 bg-white">
          <h3 class="h3-negrita">Estudiante</h3>
        </div>
        <div class="card-body">
          <h4>Tienen un descuento</h4>
          <h3 class="h3-negrita">80%</h3>
        </div>
        <div class="card-footer border-top-0 bg-white">
          <div class="text-secondary">* presentar documentación</div>
        </div>
      </div>
      <div class="card border border-info text-center">
        <div class="card-header border-0 bg-white">
          <h3 class="h3-negrita">Trainee</h3>
        </div>
        <div class="card-body">
          <h4>Tienen un descuento</h4>
          <h3 class="h3-negrita">50%</h3>
        </div>
        <div class="card-footer border-top-0 bg-white">
          <div class="text-secondary">* presentar documentación</div>
        </div>
      </div>
      <div class="card border border-warning text-center">
        <div class="card-header border-0 bg-white">
          <h3 class="h3-negrita">Junior</h3>
        </div>
        <div class="card-body">
          <h4>Tienen un descuento</h4>
          <h3 class="h3-negrita">15%</h3>
        </div>
        <div class="card-footer border-top-0 bg-white">
          <div class="text-secondary">* presentar documentación</div>
        </div>
      </div>
    </div>
    <div class="text-center mb-4">
      <p class="text-secondary text-uppercase">Venta</p>
      <h2 class="text-uppercase">valor de ticket $200</h2>
    </div>
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
        <div class="contenedor-username mb-4">
          <a id="btn-borrar" onclick="borrar_form()" class="btn btn-compra-ticket username py-3">Borrar</a>
          <a id="btn-resumen" onclick="validacion()" class="btn btn-compra-ticket username py-3">Resumen</a>
        </div>
        <button type="submit" id="btn-comprar" class="btn btn-primary py-3">Comprar</button>
      </form>
    </div>
  </main>
  
  <?php
  include("./backend/footer.php");
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="./js/funciones.js"></script>
</body>
</html>