<?php  
$localidad = 'Castro-Urdiales';     $localidad_minuscula = 'castro-urdiales'; $lugar_minuscula = 'plaza-del-ayuntamiento-castro-urdiales';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('TITLE', "Plaza del Ayuntamiento – Castro Urdiales, Cantabria"); ?>
<?php define('DESCRIPTION', "Visita la Plaza del Ayuntamiento de Castro Urdiales, Cantabria: centro histórico, arquitectura emblemática y ambiente local junto al mar. Un lugar lleno de vida y encanto."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Plaza del Ayuntamiento de Castro Urdiales"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Plaza Ayuntamiento Castro Urdiales, centro histórico Cantabria, arquitectura Castro Urdiales, turismo urbano Cantabria, plaza principal Castro Urdiales, mar Cantábrico') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Plaza del Ayuntamiento de Castro-Urdiales - Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/plaza-del-ayuntamiento-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Plaza del Ayuntamiento de Castro-Urdiales</h1>
    <p class="text-lg">El corazón histórico y social de la villa marinera</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-bank text-green-600 mr-2"></i> Historia y Descripción
      </h2>
      <p class="mb-4">
        La Plaza del Ayuntamiento de Castro-Urdiales es el punto de encuentro más emblemático de la ciudad. Rodeada de edificios históricos y porticados, es un espacio lleno de vida, ideal para disfrutar de la arquitectura local y el ambiente marinero.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Centro neurálgico del casco histórico</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Rodeada de bares, restaurantes y comercios locales</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Escenario de eventos y celebraciones populares</p>
    </section>

    <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>
    <section aria-label="Publicidad relacionada" class="mb-8">
      <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
        <div class="text-center">
          <?php require $publicidad; ?>
        </div>
      </div>
    </section>

<section class="mb-10">
  <h2 class="text-2xl font-semibold mb-4 flex items-center">
    <i class="bi bi-camera-fill text-green-600 mr-2"></i> Galería de Fotos
  </h2>
  <div class="swiper mySwiper rounded-lg shadow-md">
    <div class="swiper-wrapper">
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/plaza-del-ayuntamiento-castro-urdiales/img/plaza-del-ayuntamiento-castro-urdiales-cantabria-1.jpg"?>
             class="w-full h-full object-cover rounded-md">
      </div>
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/plaza-del-ayuntamiento-castro-urdiales/img/plaza-del-ayuntamiento-castro-urdiales-cantabria-2.png"?>
             class="w-full h-full object-cover rounded-md">
      </div>
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/plaza-del-ayuntamiento-castro-urdiales/img/plaza-del-ayuntamiento-castro-urdiales-cantabria-3.jpg"?>
             class="w-full h-full object-cover rounded-md">
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-green-600 mr-2"></i> Ubicación
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-green-600 mr-2"></i> Tiempo en Castro-Urdiales
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_13721" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-green-600 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"Un lugar lleno de vida y perfecto para tomar algo." – <strong>Ana G.</strong></p>
        <p>"Impresionante arquitectura y ambiente marinero." – <strong>Javier M.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-green-600 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.castro-urdiales.net" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Castro-Urdiales</a></li>
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.3829, -3.2170], 18);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3829, -3.2170]).addTo(map).bindPopup('Plaza del Ayuntamiento de Castro-Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/plaza-del-ayuntamiento-castro-urdiales/schemas/schemas-body.php"; ?>
</body>
</html>

