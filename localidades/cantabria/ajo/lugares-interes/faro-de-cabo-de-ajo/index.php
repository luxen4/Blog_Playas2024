<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/ajo/variables-localidad.php"; ?>

<?php define('PATH_RAIZ',                                               rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2025'); ?>
<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 

<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>

<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES', 'https://playas2024.kesug.com/Blog_Playas2025/localidades/'); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD', PATH_DOMINIO_RAIZ_LOCALIDADES .$region_minuscula.'/'.$localidad_minuscula); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',                          PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>

<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php define('PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN',    PATH_RAIZ_LOCALIDADES. "/_estructura/body/main"); ?>

<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>




<?php lugar_minuscula_footer='Faro de Cabo de Ajo'; COLOR_PAGE='orange'; $localidad_minuscula= 'faro-de-cabo-de-ajo'; ?>
<?php define('NAME_BLOG', "Turismo y Playas 2025 – Guía Costera por el Cantábrico"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('EMAIL_AUTHOR', "  ");?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Descubre el Faro del Cabo de Ajo en Cantabria: el faro más colorido de España, arte, naturaleza y vistas espectaculares del Cantábrico.">
  <meta name="author" content=<?= AUTHOR; ?>>
  <meta name="robots" content="index, follow">
  <title>Faro del Cabo de Ajo – Ajo, Cantabria</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Open Graph -->
  <meta property="og:title" content="Faro del Cabo de Ajo – Ajo, Cantabria">
  <meta property="og:description" content="Arte, naturaleza y mar en el faro más colorido de España.">
  <meta property="og:image" content="https://example.com/faro-cabo-ajo.jpg">
  <meta property="og:url" content="https://tusitio.com/faro-cabo-de-ajo">
  <meta property="og:type" content="website">


  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/faro-de-cabo-de-ajo/schemas/schemas-body.php"; ?>


</head>
<body class="bg-gray-50 text-gray-800">

  <header class="bg-<?= COLOR_PAGE; ?>-100 py-6 shadow-sm">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h1 class="text-3xl font-bold text-<?= COLOR_PAGE; ?>-800">Faro del Cabo de Ajo</h1>
      <p class="mt-2 text-sm text-<?= COLOR_PAGE; ?>-700">Ajo, Cantabria – Naturaleza, arte y vistas al Cantábrico</p>
    </div>
  </header>

  <main class="max-w-5xl mx-auto px-4 py-8">
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
    <section>
      <figure class="mb-6">
        <img src= <?= PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD. "/lugares-interes/faro-de-cabo-de-ajo/img/faro-de-cabo-de-ajo.jpg"?>  alt="Faro del Cabo de Ajo decorado por Okuda San Miguel" class="rounded-lg shadow-md w-full aspect-video object-cover">
        <figcaption class="text-sm text-gray-600 mt-2">Faro decorado por Okuda San Miguel – Imagen: Turismo de Cantabria</figcaption>
      </figure>

      <p class="mb-4 text-gray-700 flex items-start gap-2">
        <i class="bi bi-palette-fill text-pink-600 text-lg mt-1"></i>
        El Faro del Cabo de Ajo, el más oriental de Cantabria, fue intervenido artísticamente por Okuda San Miguel, convirtiéndolo en el faro más colorido de España.
      </p>

      <p class="mb-4 text-gray-700 flex items-start gap-2">
        <i class="bi bi-tree-fill text-green-600 text-lg mt-1"></i>
        Está rodeado de una ruta de senderismo accesible con espectaculares vistas al mar Cantábrico, ideal para una excursión al aire libre.
      </p>

      <p class="mb-4 text-gray-700 flex items-start gap-2">
        <i class="bi bi-camera-fill text-purple-600 text-lg mt-1"></i>
        Es un lugar muy popular entre fotógrafos y turistas, especialmente al atardecer.
      </p>
    </section>


      <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>
      <section aria-label="Publicidad relacionada" class="mb-8">
        <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
          <div class="text-center">
            <?php require $publicidad; ?>
          </div>
        </div>
      </section>

    <section class="mt-10">
      <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">Información práctica</h2>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li><i class="bi bi-clock-fill text-yellow-500 mr-2"></i>Abierto al público todo el año (zona exterior)</li>
        <li><i class="bi bi-geo-alt-fill text-red-500 mr-2"></i><strong>Ubicación:</strong> Cabo de Ajo, Bareyo, Cantabria</li>
        <li><i class="bi bi-car-front-fill text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Aparcamiento cercano disponible</li>
      </ul>
    </section>

    <section class="mt-10">
      <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">Enlaces útiles</h2>
      <ul class="space-y-2 text-sm text-<?= COLOR_PAGE; ?>-600 underline">
        <li><a href="https://turismodecantabria.com" target="_blank" rel="noopener">⛵ Turismo de Cantabria</a></li>
        <li><a href="https://bareyo.org" target="_blank" rel="noopener">🏞️ Ayuntamiento de Bareyo</a></li>
        <li><a href="https://www.google.com/maps?q=faro+de+ajo" target="_blank" rel="noopener">🗺️ Ver en Google Maps</a></li>
      </ul>
    </section>


  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php //require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in-parte-abajo.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>



  </main>


    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>



<?php define('PATH_RAIZ_LOCALIDADES_CARPETA',                           PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$localidad_minuscula}"); ?>
<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES',                     PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes"); ?>
     


<?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/faro-de-cabo-de-ajo/schemas/schemas-body.php"; ?>


</body>
</html>
