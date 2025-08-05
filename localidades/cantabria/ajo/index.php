<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>
<?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') .'/'. PATH_HREF_RAIZ); ?>


<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',                               PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>





<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre Ajo en Cantabria: playas vírgenes, miradores, rutas y el famoso Cabo de Ajo.">
  <meta name="keywords" content="Ajo, Cantabria, turismo, playas, naturaleza, rutas, Cabo de Ajo, faro">
  <title>Ajo – Guía Turística y Playas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <header class="mb-10">
          <div class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Ajo (Cantabria)
            </h1>
            <p class="text-lg md:text-xl font-medium">
              Ajo es una de las joyas de la costa oriental de Cantabria, conocida por sus impresionantes acantilados, 
              el Faro de Cabo de Ajo, playas tranquilas y rutas con vistas espectaculares. 
              Un destino perfecto para desconectar en plena naturaleza.
            </p>
          </div>
        </header>

        <!-- Lugares de Interés -->
        <section id="lugares-interes" class="my-10">
          <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Ajo</h2>
            <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Ajo.</p>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <a 
              <?php
              if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                      href="<?= PATH_HREF_RAIZ ?>/faro-de-cabo-de-ajo"<?php
                  } else { ?>
                      href="https://playas2024.kesug.com/Blog_Playas2025/localidades/cantabria/ajo/lugares-interes/playas/playa-de-cuberris/index.php"   <?php 
                  }?>
              
              
              
              
              class="btn btn-outline-secondary w-100 text-start px-3 py-2">Faro de Cabo de Ajo</a>
            </div>

            <div class="col">
              <a 
              
              
              

             <?php 
                  if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                      href="<?= PATH_HREF_RAIZ ?>/playa-de-cuberris"<?php
                  } else { ?>
                      href="https://playas2024.kesug.com/Blog_Playas2025/localidades/cantabria/ajo/lugares-interes/playas/playa-de-cuberris/index.php"   <?php 
                  }?>
              
              class="btn btn-outline-secondary w-100 text-start px-3 py-2">Playa de Cuberris</a>
            </div>


            <div class="col">
              <a 
                  <?php
                  if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                      href="<?= PATH_HREF_RAIZ ?>/acantilados-de-cabo-de-ajo"<?php
                  } else { ?>
                      href="https://playas2024.kesug.com/Blog_Playas2025/localidades/cantabria/ajo/lugares-interes/acantilados-de-cabo-de-ajo/index.php"   <?php 
                  }?>
              
              
              
              
              
              class="btn btn-outline-secondary w-100 text-start px-3 py-2">Acantilados de Cabo Ajo</a>
            </div>
            <div class="col">
              <a 
              
                   <?php
                  if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                      href="<?= PATH_HREF_RAIZ ?>/ruta-de-la-costa-oriental-de-ajo"<?php
                  } else { ?>
                      href="https://playas2024.kesug.com/Blog_Playas2025/localidades/cantabria/ajo/lugares-interes/ruta-de-la-costa-oriental-de-ajo/index.php"   <?php 
                  }?>
              
              
              
              href="ruta-costa-oriental/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Ruta de la Costa Oriental</a>
            </div>




            <div class="col">
              <a href="mirador-cabo-ajo/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Mirador del Cabo</a>
            </div>
          </div>
        </section>


        <?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>

        <!-- Botón Volver -->
        <div class="text-center mt-5">
          <a href="/index.html" class="btn btn-outline-primary">← Volver al Inicio</a>
        </div>
      </div>

      <!-- Columna derecha (Sidebar y Playas) -->
      <div class="col-lg-4 mt-5 mt-lg-0">
        <!-- Sección Playas -->
        <section id="playas" class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 mb-4">
          <header class="text-center mb-4">
            <h5 class="text-xl font-semibold text-gray-700">🏖️ Playas de <br><strong>Ajo</strong></h5>
            <p class="text-sm text-gray-500">Playas tranquilas de la costa oriental de Cantabria.</p>
          </header>
          <div class="space-y-2">
            <a href="" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Ajo
            </a>
            <a href="lugares-interes/playas/playa-de-cuberris/index.php" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Cuberris
            </a>
            <a href="playas/playa-de-antueras/index.html" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Antueras
            </a>
          </div>
        </section>
      </div>


      <div class="col-12 col-md-3 d-none d-md-block">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/sidebar-playa.php'; ?>
      </div>

    </div>
  </div>

  <footer class="bg-green-600 text-white text-center py-4 mt-10">
    <p>&copy; 2025 Ajo Turismo</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>