<?php  
$localidad = 'Castro-Urdiales';     $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); $lugar_minuscula='puente-medieval';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('TITLE', "Puente Medieval de Castro-Urdiales – Historia y Patrimonio en Cantabria"); ?>
<?php define('DESCRIPTION', "Descubre el Puente Medieval de Castro-Urdiales, uno de los símbolos históricos de la villa marinera. Un lugar cargado de historia junto al mar Cantábrico."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Puente Medieval de Castro-Urdiales"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Puente Medieval Castro-Urdiales, monumentos Cantabria, turismo histórico, arquitectura medieval, patrimonio, Castro-Urdiales') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Puente Medieval de Castro-Urdiales - Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puente-medieval/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Puente Medieval de Castro-Urdiales</h1>
    <p class="text-lg">Un icono histórico junto al Cantábrico</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-bank text-green-600 mr-2"></i> Historia y Descripción
      </h2>
      <p class="mb-4">
        El Puente Medieval de Castro-Urdiales es una joya arquitectónica situada en el casco histórico, junto a la Iglesia de Santa María y el Castillo-Faro.
        Formaba parte de las defensas y accesos medievales, y ha sido testigo de siglos de historia marinera y comercial.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Construcción de origen medieval, restaurado en varias ocasiones</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Conecta con la ermita de Santa Ana y el rompeolas</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Escenario fotográfico ideal junto al puerto y el mar</p>
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
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puente-medieval/img/puente-medieval-castro-urdiales-cantabria-1.jpg"?>
             class="w-full h-full object-cover rounded-md">
      </div>
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puente-medieval/img/puente-medieval-castro-urdiales-cantabria-2.png"?>
             class="w-full h-full object-cover rounded-md">
      </div>
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puente-medieval/img/puente-medieval-castro-urdiales-cantabria-1.jpg"?>
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
        <p class="mb-2">"Un rincón con mucho encanto y vistas únicas." – <strong>Lucía P.</strong></p>
        <p>"Precioso al atardecer, muy fotogénico." – <strong>Miguel A.</strong></p>
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
    const map = L.map('map').setView([43.3821, -3.2173], 17);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3821, -3.2173]).addTo(map).bindPopup('Puente Medieval de Castro-Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puente-medieval/schemas/schemas-body.php"; ?>
</body>
</html>
