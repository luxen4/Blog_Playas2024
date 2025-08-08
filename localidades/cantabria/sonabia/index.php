<?php 
$localidad = 'Sonabia'; 
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], // lo que quieres reemplazar
        ['n', 'n', '-'], // por qué lo reemplazas
        $localidad
    )
); ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/variables-generales-region.php"; ?>

<?php define('PATH_RAIZ',                                               rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2025'); ?>
<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>

<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',                               PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>

<?php define('PATH_RAIZ_LOCALIDADES_CARPETA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}"); ?>
<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES',                     PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes"); ?>
     
<?php define('PATH_HREF_RAIZ_BLOQUES', "/Blog_Playas2025/bloques"); ?>

<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_BODY',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. '/body'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head"); ?>
<?php define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5"); ?>

<?php define('WEB_PAGE', "website"); ?>
<?php define('HOY', date('Y-m-d')); ?>
<?php define('IDIOMA_LOCAL', 'es_ES'); ?>

<?php define('PATH_HREF_RAIZ_LOCALIDADES', "https://playas2025.kesug.com/Blog_Playas2025/localidades"); ?>

<?php define('PATH_RAIZ_HOME_HEAD_VARIABLES', PATH_RAIZ. '/home/head/variables'); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES', 'https://playas2024.kesug.com/Blog_Playas2025/localidades/'); ?>
<?php define('PATH_DOMINIO_RAIZ', 'https://playas2024.kesug.com/Blog_Playas2025/'); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php require PATH_RAIZ_LOCALIDADES . "/cantabria/santona/head/variables/_meta_tagsa.php"; ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre Sonabia en Cantabria: naturaleza salvaje, playas vírgenes, miradores y rutas de senderismo.">
  <meta name="keywords" content="Sonabia, Cantabria, turismo, playas, naturaleza, rutas, senderismo, Ojo del Diablo">
  <title>Sonabia – Guía Turística y Playas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Sonabia (Cantabria)
            </h1>
            <p class="text-lg md:text-xl font-medium">
              Sonabia es una pequeña localidad costera en Cantabria, famosa por sus playas salvajes, el monte Candina y el espectacular Ojo del Diablo. 
              Ideal para los amantes de la naturaleza, el senderismo y el turismo tranquilo.
            </p>
          </div>
        </header>

        <!-- Lugares de Interés -->
        <section id="lugares-interes" class="my-10">
          <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-blue-700 mb-2">📍 Lugares de Interés en Sonabia</h2>
            <p class="text-gray-600">Explora los lugares más emblemáticos y naturales de Sonabia.</p>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <a href="playa-de-sonabia/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Playa de Sonabia</a>
            </div>
            <div class="col">
              <a href="playa-de-cuchia/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Playa de Cuchía</a>
            </div>
            <div class="col">
              <a href="monte-candina/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Monte Candina</a>
            </div>
            <div class="col">
              <a href="ojo-del-diablo/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Ojo del Diablo</a>
            </div>
            <div class="col">
              <a href="mirador-punta-sonabia/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Mirador de Punta Sonabia</a>
            </div>
            <div class="col">
              <a href="sendero-costa-oriental/index.html" class="btn btn-outline-secondary w-100 text-start px-3 py-2">Sendero de la Costa Oriental</a>
            </div>
          </div>
        </section>

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
            <h5 class="text-xl font-semibold text-gray-700">🏖️ Playas de <br><strong>Sonabia</strong></h5>
            <p class="text-sm text-gray-500">Playas salvajes de la costa oriental de Cantabria.</p>
          </header>
          <div class="space-y-2">
            <a href="playas/playa-de-sonabia/index.html" class="block px-4 py-2 bg-blue-50 border border-blue-300 text-blue-700 rounded hover:bg-blue-100 transition">
              Playa de Sonabia
            </a>
            <a href="playas/playa-de-cuchia/index.html" class="block px-4 py-2 bg-blue-50 border border-blue-300 text-blue-700 rounded hover:bg-blue-100 transition">
              Playa de Cuchía
            </a>
            <a href="playas/playa-de-arenillas/index.html" class="block px-4 py-2 bg-blue-50 border border-blue-300 text-blue-700 rounded hover:bg-blue-100 transition">
              Playa de Arenillas
            </a>
          </div>
        </section>
      </div>

    </div>
  </div>

  <footer class="bg-blue-600 text-white text-center py-4 mt-10">
    <p>&copy; 2025 Sonabia Turismo</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
