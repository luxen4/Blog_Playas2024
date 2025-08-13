<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'palacio-ocharan-castro-urdiales';

$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Palacio de Ocharan – Castro Urdiales, Cantabria"); ?>
<?php define('DESCRIPTION', "Descubre el Palacio de Ocharan en Castro Urdiales, una joya arquitectónica modernista rodeada de jardines y con una historia fascinante en la costa cántabra."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Palacio de Ocharan de Castro Urdiales"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))); ?>
<?php define('KEYWORDS_CONTENT', 'Palacio Ocharan Castro Urdiales, arquitectura modernista Cantabria, historia Castro Urdiales, edificios emblemáticos Cantabria') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Palacio de Ocharan - Castro-Urdiales, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/palacio-ocharan-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-amber-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Palacio de Ocharan de Castro-Urdiales</h1>
    <p class="text-lg">Arquitectura modernista y jardines históricos frente al Cantábrico</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-building text-amber-600 mr-2"></i> Descripción y Ambiente
      </h2>
      <p class="mb-4">
        El Palacio de Ocharan es uno de los edificios más icónicos de Castro Urdiales, construido a principios del siglo XX con un marcado estilo modernista. 
        Rodeado de amplios jardines y con vistas privilegiadas al mar, este palacio es un símbolo de la historia y la cultura local.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-amber-600 mr-1"></i> Arquitectura modernista única</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-amber-600 mr-1"></i> Jardines y zonas verdes</p>
      <p><i class="bi bi-check-circle-fill text-amber-600 mr-1"></i> Importancia histórica en Castro Urdiales</p>
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
    <i class="bi bi-camera-fill text-amber-600 mr-2"></i> Galería de Fotos
  </h2>
  <div class="swiper mySwiper rounded-lg shadow-md">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/palacio-ocharan-castro-urdiales/img/palacio-ocharan-castro-urdiales-cantabria-1.jpg" ?>"
             class="w-full h-72 object-cover rounded-md">
      </div>
      <div class="swiper-slide">
        <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/palacio-ocharan-castro-urdiales/img/Castillo_Ocharan_Castro_Urdiales-cantabria.jpg" ?>"
             class="w-full h-72 object-cover rounded-md">
      </div>
      <div class="swiper-slide">
        <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/palacio-ocharan-castro-urdiales/img/palacio-ocharan-castro-urdiales-cantabria-1.jpg" ?>"
             class="w-full h-72 object-cover rounded-md">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>



    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-amber-600 mr-2"></i> Ubicación
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-amber-600 mr-2"></i> Tiempo en Castro-Urdiales
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_13721" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-amber-600 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"Una obra maestra del modernismo en un entorno único." – <strong>Ana M.</strong></p>
        <p>"Sus jardines y detalles arquitectónicos son impresionantes." – <strong>Carlos G.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-amber-600 mr-2"></i> Enlaces oficiales
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
    const map = L.map('map').setView([43.3836, -3.2210], 17); // Coordenadas aproximadas del Palacio Ocharan
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3836, -3.2210]).addTo(map).bindPopup('Palacio de Ocharan de Castro-Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/palacio-ocharan-castro-urdiales/schemas/schemas-body.php"; ?>
</body>
</html>
