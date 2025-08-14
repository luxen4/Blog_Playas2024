<?php  
$localidad = 'Sonabia';     
$localidad_minuscula = 'sonabia'; 
$lugar_minuscula = 'monte-candina-sonabia';
$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Monte Candina – Sonabia, Cantabria"); ?>
<?php define('DESCRIPTION', "Descubre el Monte Candina en Sonabia, Cantabria: una majestuosa montaña costera que alberga la única colonia marina de buitres leonados en Europa."); ?>
<?php define('COLOR_PAGE', "green"); ?>
<?php define('LUGAR', "Monte Candina"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Monte Candina Sonabia, senderismo Cantabria, buitres leonados, rutas costeras Cantabria') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <link rel="canonical" href="<?= PATH_HREF_RAIZ_LOCALIDADES; ?>/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $lugar_minuscula; ?>/index.php" />
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Monte Candina - Sonabia, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/monte-candina-sonabia/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-800 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Monte Candina</h1>
    <p class="text-lg">La atalaya costera de los buitres leonados</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-tree-fill text-green-700 mr-2"></i> Descripción
      </h2>
      <p class="mb-4">
        El Monte Candina, situado en la costa de Sonabia, es un macizo calizo impresionante que se alza sobre el mar Cantábrico. Es famoso por albergar la única colonia marina de buitres leonados en Europa y por sus rutas de senderismo con vistas espectaculares.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-700 mr-1"></i> Hábitat natural de aves rapaces</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-700 mr-1"></i> Miradores con vistas panorámicas</p>
      <p><i class="bi bi-check-circle-fill text-green-700 mr-1"></i> Senderos costeros y de montaña</p>
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
        <i class="bi bi-camera-fill text-green-700 mr-2"></i> Galería de Fotos
      </h2>
      <div class="swiper mySwiper rounded-lg shadow-md">
        <div class="swiper-wrapper">
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/monte-candina-sonabia/img/monte-candina-sonabia-cantabria-1.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/monte-candina-sonabia/img/monte-candina-sonabia-cantabria-2.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/monte-candina-sonabia/img/monte-candina-sonabia-cantabria-3.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-green-700 mr-2"></i> Ubicación
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-green-700 mr-2"></i> Tiempo en Sonabia
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_13725" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-green-700 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"Impresionante enclave natural." – <strong>Ana P.</strong></p>
        <p>"Las vistas y los buitres leonados son espectaculares." – <strong>Javier L.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-green-700 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
        <li><a href="https://www.castro-urdiales.net" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Castro-Urdiales</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.4370, -3.4300], 15); // Coordenadas aproximadas del Monte Candina
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.4370, -3.4300]).addTo(map).bindPopup('Monte Candina').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/monte-candina-sonabia/schemas/schemas-body.php"; ?>
</body>
</html>
