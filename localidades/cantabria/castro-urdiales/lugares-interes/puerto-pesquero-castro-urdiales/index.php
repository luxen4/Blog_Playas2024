<?php  
$localidad = 'Castro-Urdiales';     $localidad_minuscula = 'castro-urdiales'; $lugar_minuscula='puerto-pesquero-castro-urdiales';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('TITLE', "Puerto Pesquero – Castro Urdiales, Cantabria"); ?>
<?php define('DESCRIPTION', "Descubre el Puerto Pesquero de Castro Urdiales, Cantabria: tradición marinera, barcos de pesca, gastronomía local y vistas al mar. Un rincón con encanto y sabor a mar."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Puerto Pesquero de Castro Urdiales"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Puerto Pesquero Castro Urdiales, puerto Cantabria, tradición marinera, barcos de pesca, gastronomía marinera, turismo costero Cantabria, mar Cantábrico') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Puerto Pesquero de Castro Urdiales - Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-pesquero-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Puerto Pesquero de Castro Urdiales</h1>
    <p class="text-lg">Tradición marinera y encanto costero en Cantabria</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-map-fill text-green-600 mr-2"></i> Descripción del Puerto
      </h2>
      <p class="mb-4">
        El Puerto Pesquero de Castro Urdiales es el corazón marinero de esta villa cántabra. 
        Rodeado de casas coloridas y presidido por la iglesia de Santa María y el castillo-faro, 
        es un lugar perfecto para pasear, observar barcos de pesca y disfrutar de la gastronomía local en sus terrazas.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Zona ideal para fotografía y paseos</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Acceso peatonal y ambiente tradicional</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Amplia oferta de bares y restaurantes cercanos</p>
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
      <div class="swiper-slide">
        <div class="w-full aspect-[16/9] overflow-hidden">
          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-pesquero-castro-urdiales/img/puerto-pesquero-castro-urdiales-1.jpg"?>" 
               class="w-full h-full object-cover rounded-md" alt="Puerto Pesquero Castro Urdiales 1">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="w-full aspect-[16/9] overflow-hidden">
          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-pesquero-castro-urdiales/img/puerto-pesquero-castro-urdiales-2.png"?>" 
               class="w-full h-full object-cover rounded-md" alt="Puerto Pesquero Castro Urdiales 2">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="w-full aspect-[16/9] overflow-hidden">
          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-pesquero-castro-urdiales/img/puerto-pesquero-castro-urdiales-1.jpg"?>" 
               class="w-full h-full object-cover rounded-md" alt="Puerto Pesquero Castro Urdiales 3">
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>


    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-green-600 mr-2"></i> Mapa del Puerto
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-green-600 mr-2"></i> Tiempo en Castro Urdiales
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_20286" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-green-600 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"El puerto es precioso, lleno de vida y buen ambiente." – <strong>Lucía G.</strong></p>
        <p>"Perfecto para pasear y tomar algo frente al mar." – <strong>Javier P.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-green-600 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.castrourdiales.es/" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Castro Urdiales</a></li>
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.3828, -3.2196], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3828, -3.2196]).addTo(map).bindPopup('Puerto Pesquero de Castro Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-pesquero-castro-urdiales/schemas/schemas-body.php"; ?>

</body>

</html>
