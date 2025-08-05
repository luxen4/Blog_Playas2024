
<?php $localidad = 'Ajo'; $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); ?>
<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/variables-generales-region.php"; ?>
<?php //require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/ajo/variables-generales-localidad.php"; ?>





<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>
<?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') .'/'. PATH_HREF_RAIZ); ?>

<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',                               PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>

<?php define('PATH_RAIZ_LOCALIDADES_CARPETA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}"); ?>




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
            <?php 
            $lugares_interes = [
              'Faro de Cabo de Ajo',
              'Playa de Cuberris',
              'Acantilados de Cabo de Ajo',
              'Ruta de la Costa Oriental',
              'Mirador del Cabo'
            ];

            foreach ($lugares_interes as $lugar_interes_main): ?>
              <div class="col">
                <?php require PATH_RAIZ_LOCALIDADES_CARPETA . '/enlace-lugar-interes-generico.php'; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </section>




        <?php
$lugares_interes = [
  [
    'nombre' => 'Faro de Cabo de Ajo',
    'slug'   => 'faro-de-cabo-de-ajo',
    'imagen' => 'faro-de-cabo-de-ajo.jpg',
    'alt'    => 'Faro de Cabo de Ajo',
    'fuente' => 'farodelcaballo.es',
    'web_imagen' => 'https://farodelcaballo.es/faro-de-ajo-como-llegar/',
    'desc'   => 'El faro más colorido de España, con vistas únicas al Cantábrico.',
  ],
  [
    'nombre' => 'Playa de Cuberris',
    'slug'   => 'playa-de-cuberris',
    'imagen' => 'playa-de-cuberris.jpg',
    'desc'   => 'Una playa amplia ideal para surf y familias, rodeada de naturaleza.',
  ],
  [
    'nombre' => 'Acantilados de Cabo de Ajo',
    'slug'   => 'acantilados-de-cabo-de-ajo',
    'imagen' => 'acantilados-de-cabo-de-ajo.jpg',
    'desc'   => 'Impresionantes formaciones rocosas con vistas al mar Cantábrico.',
  ],
  [
    'nombre' => 'Ruta de la Costa Oriental',
    'slug'   => 'ruta-de-la-costa-oriental',
    'imagen' => 'ruta-de-la-costa-oriental.jpg',
    'desc'   => 'Sendero costero ideal para caminatas junto al mar y acantilados.',
  ],
  [
    'nombre' => 'Mirador del Cabo',
    'slug'   => 'mirador-del-cabo',
    'imagen' => 'mirador-del-cabo.jpg',
    'desc'   => 'Vista panorámica desde el punto más alto de Ajo.',
  ],
];
?>
<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-3xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Ajo</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Ajo.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0">


        <figure class="mb-0">
            <img src="/Blog_Playas2025/localidades/cantabria/ajo/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
                class="card-img-top" 
                alt="<?= $lugar['alt']; ?>">
<figcaption class="text-xs text-gray-500 mt-1 px-2">
  📷 Imagen de <?= $lugar['nombre']; ?> – fuente: 
  <a href="<?= $lugar['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
    <?= $lugar['fuente']; ?>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5h6m0 0v6m0-6L10 16" />
    </svg>
  </a>
</figcaption>

        </figure>

          <div class="card-body">
            <h5 class="card-title"><?= $lugar['nombre']; ?></h5>
            <p class="card-text text-muted small"><?= $lugar['desc']; ?></p>
            <a href="/Blog_Playas2025/lugares-interes/<?= $lugar['slug']; ?>" class="btn btn-success btn-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php foreach ($lugares_interes as $lugar): ?>
  <div class="col">
    <div class="card h-100 shadow-sm border-0">
      
      <?php if (!empty($lugar['web_imagen'])): ?>
        <a href="<?= $lugar['web_imagen']; ?>" target="_blank" rel="noopener noreferrer">
          <img src="/Blog_Playas2025/img/lugares/<?= $lugar['imagen']; ?>" class="card-img-top" alt="<?= $lugar['nombre']; ?>">
        </a>
      <?php else: ?>
        <img src="/Blog_Playas2025/img/lugares/<?= $lugar['imagen']; ?>" class="card-img-top" alt="<?= $lugar['nombre']; ?>">
      <?php endif; ?>

      <div class="card-body">
        <h5 class="card-title"><?= $lugar['nombre']; ?></h5>
        <p class="card-text text-muted small"><?= $lugar['desc']; ?></p>

        <?php if (!empty($lugar['fuente']) && !empty($lugar['web_imagen'])): ?>
          <p class="text-xs text-gray-500 mb-2">
            Fuente: 
            <a href="<?= $lugar['web_imagen']; ?>" class="underline hover:text-blue-600" target="_blank" rel="noopener noreferrer">
              <?= $lugar['fuente']; ?>
            </a>
          </p>
        <?php endif; ?>

        <a href="/Blog_Playas2025/lugares/<?= $lugar['slug']; ?>/" class="btn btn-success btn-sm">
          Explorar &rarr;
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>














        <?php require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>

        <!-- Botón Volver -->
        <div class="text-center mt-5">
          <a href="/index.html" class="btn btn-outline-primary">← Volver al Inicio</a>
        </div>
      </div>

    </div>
  </div>

  <footer class="bg-green-600 text-white text-center py-4 mt-10">
    <p>&copy; 2025 Ajo Turismo</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>









<?php  /*     <!-- Columna derecha (Sidebar y Playas) -->
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
      </div> */?>