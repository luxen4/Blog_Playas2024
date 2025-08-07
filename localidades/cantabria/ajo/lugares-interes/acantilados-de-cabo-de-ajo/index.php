<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/ajo/variables-localidad.php"; ?>

<?php $lugar_header   = 'Ruta de la Costa Oriental, Ajo';  $lugar_interes  = 'ruta-de-la-costa-oriental-ajo'; ?>
<?php $tema_footer = 'Ruta de la Costa Oriental de Ajo'; ?>
<?php $color_page = 'green'; ?>

<?php define('HOY', date('Y-m-d')); ?>
<?php define('PATH_HREF_CARPETA_LUGARES_INTERES', "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes");?>

<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>
<?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') .'/'. PATH_HREF_RAIZ); ?>
<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head"); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',                          PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>

<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>
<?php define('PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN',    PATH_RAIZ_LOCALIDADES. "/_estructura/body/main"); ?>

<?php define('NAME_BLOG', "Blog Playas 2025"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('EMAIL_AUTHOR', "  ");?>


<?php $tema_footer = 'Playas del Cantábrico'; $color_page='orange'; $tema='Ajo'; $lugar_interes='Ajo';?>

<?php define('PATH_RAIZ_LOCALIDADES_CARPETA',                           PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$carpeta}"); ?>


<?php define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5"); ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acantilados del Cabo de Ajo – Ajo, Cantabria</title>
  <meta name="description" content="Explora los acantilados del Cabo de Ajo: paisajes espectaculares, rutas costeras y vistas inolvidables del Cantábrico en Cantabria.">
  <meta name="author" content="Adrián Laya García">
  <meta name="robots" content="index, follow">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Open Graph -->
  <meta property="og:title" content="Acantilados del Cabo de Ajo – Ajo, Cantabria">
  <meta property="og:description" content="Naturaleza salvaje, rutas y miradores junto al mar Cantábrico.">
  <meta property="og:image" content="https://example.com/acantilados-cabo-ajo.jpg">
  <meta property="og:url" content="https://tusitio.com/acantilados-cabo-de-ajo">
  <meta property="og:type" content="website">

  <!-- Swiper.js Carousel -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Leaflet Map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>

<body class="bg-gray-50 text-gray-800">
  <header class="bg-emerald-100 py-6 shadow-sm">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h1 class="text-3xl font-bold text-emerald-800">Acantilados del Cabo de Ajo</h1>
      <p class="mt-2 text-sm text-emerald-700">Ajo, Cantabria – Naturaleza salvaje sobre el Cantábrico</p>
    </div>
  </header>

  <main class="max-w-5xl mx-auto px-4 py-10">
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
    <!-- Swiper Gallery -->
    <section class="mb-10">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="https://www.turismodecantabria.com/resources/acantilados-cabo-ajo.jpg" class="rounded-lg shadow-md" alt="Acantilados Cabo Ajo"></div>
          <div class="swiper-slide"><img src="https://example.com/imagen2.jpg" class="rounded-lg shadow-md" alt="Vista mar"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <script>
        const swiper = new Swiper('.swiper', {
          loop: true,
          pagination: { el: '.swiper-pagination' },
        });
      </script>
    </section>

    <!-- Descripción -->
    <section>
      <p class="mb-4 text-gray-700 flex items-start gap-2">
        <i class="bi bi-globe2 text-blue-500 text-lg mt-1"></i>
        Acantilados espectaculares situados al norte de Ajo, Cantabria.
      </p>
    </section>

    <!-- Mapa interactivo con Leaflet -->
    <section class="my-10">
      <h2 class="text-xl font-semibold text-emerald-700 mb-4">Ubicación en el mapa</h2>
      <div id="map" class="w-full h-96 rounded-lg shadow"></div>
      <script>
        var map = L.map('map').setView([43.5138, -3.6347], 14);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        L.marker([43.5138, -3.6347]).addTo(map).bindPopup("Acantilados del Cabo de Ajo").openPopup();
      </script>
    </section>

    <!-- Comentarios simulados -->
    <section class="my-10">
      <h2 class="text-xl font-semibold text-emerald-700 mb-4">Comentarios</h2>
      <div class="bg-white p-4 rounded-lg shadow">
        <p class="font-semibold">Laura G.</p>
        <p class="text-sm text-gray-600">Una ruta espectacular, sin duda lo mejor de Ajo.</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow mt-3">
        <p class="font-semibold">Javi M.</p>
        <p class="text-sm text-gray-600">Ideal para senderismo, las vistas son brutales.</p>
      </div>
    </section>

    <!-- Módulo de meteorología simple -->
    <section class="my-10">
      <h2 class="text-xl font-semibold text-emerald-700 mb-4">Tiempo en Ajo (OpenWeather)</h2>
      <iframe src="https://forecast7.com/es/43d51n3d63/ajo/" frameborder="0" width="100%" height="250" class="rounded-md shadow"></iframe>
    </section>

    <!-- Enlaces oficiales -->
    <section class="mt-10">
      <h2 class="text-xl font-semibold text-emerald-700 mb-4">Enlaces oficiales</h2>
      <ul class="space-y-2 text-sm text-emerald-700 underline">
        <li><a href="https://turismodecantabria.com" target="_blank">🌐 Turismo de Cantabria</a></li>
        <li><a href="https://bareyo.org" target="_blank">🏞️ Ayuntamiento de Bareyo</a></li>
        <li><a href="https://maps.google.com/?q=Acantilados+Cabo+de+Ajo" target="_blank">🗺️ Ver en Google Maps</a></li>
      </ul>
    </section>
  </main>

  <footer class="bg-emerald-100 mt-12 py-4 text-center text-sm text-emerald-800">
    <p>&copy; <?= date('Y') ?> Blog Playas 2025 – Adrián Laya García</p>
    <p>Contacto: <a href="mailto:superlaya50@gmail.com" class="underline hover:text-emerald-600">superlaya50@gmail.com</a></p>
  </footer>
</body>
</html>
