<?php LUGAR   = 'Ruta de la Costa Oriental, Ajo';  lugar_minuscula  = 'ruta-de-la-costa-oriental'; ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/ajo/variables-localidad.php"; ?>
<?php define('PATH_RAIZ',                                               rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2025'); ?>
<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES . '/estructura'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD',         PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/head'); ?>


<?php define('SUMARY_LARGE_IMAGE', 'sumary_large_image'); ?>
<?php define('CARD_SITE', '@laya_garcia'); ?>


<?php //define('NAME_BLOG', "Blog Playas Cantábrico"); ?>
<?php //define('AUTHOR', "Adrián Laya García"); ?>
<?php //define('EMAIL_AUTHOR', "superlaya50@gmail.com");?>
<?php //define('HOY', date('Y-m-d')); ?>
<?php define('WEB_PAGE', "website"); ?>
<?php define('IDIOMA_LOCAL', 'es_ES'); ?>
<?php define('TURISMO_PLAYAS', 'Turismo y Playas'); ?>

<?php define('PATH_DOMINIO_RAIZ', 'https://playas2024.kesug.com/Blog_Playas2025/'); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES', 'https://playas2024.kesug.com/Blog_Playas2025/localidades/'); ?>

<?php require PATH_RAIZ ."/localidades/cantabria/ajo/constfantes-generico.php"; ?>


<?php require PATH_RAIZ ."/localidades/constantes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/cantabria/ajo/lugares-interes/ruta-de-la-costa-oriental/head/variables/_meta_tagsa.php"; ?>


<?php lugar_minuscula_footer = 'Ruta de la Costa Oriental de Ajo'; ?>
<?php COLOR_PAGE = 'green'; 
lugar_minuscula='Ajo'; ?>

<?php
$description_content = 'Explora la Ruta de la Costa Oriental de Ajo, Cantabria: acantilados, playas vírgenes, naturaleza salvaje y vistas al Cantábrico. Ideal para senderistas y amantes del mar.';
$keywords_content = 'Ruta Costa Oriental, Ajo Cantabria, senderismo Cantabria, costa Cantábrica, naturaleza, playas, turismo activo';
?>





<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Ruta de la Costa Oriental de Ajo - Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/ruta-de-la-costa-oriental/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  

  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Ruta de la Costa Oriental de Ajo</h1>
    <p class="text-lg">Un recorrido inolvidable entre mar y acantilados</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center"><i class="bi bi-map-fill text-green-600 mr-2"></i> Descripción de la Ruta</h2>
      <p class="mb-4">La Ruta de la Costa Oriental de Ajo atraviesa algunos de los paisajes más impactantes de la costa cántabra. Acantilados abruptos, praderas verdes y calas escondidas se suceden a lo largo de este sendero costero ideal para caminantes, fotografías y observación de aves marinas.</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Trayecto lineal de 6 km (ida), dificultad baja-moderada</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Accesible desde el Faro de Ajo o la playa de Antuerta</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> No hay sombra, se recomienda llevar gorra y agua</p>
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
      <h2 class="text-2xl font-semibold mb-4 flex items-center"><i class="bi bi-camera-fill text-green-600 mr-2"></i> Galería de Fotos</h2>
      <div class="swiper mySwiper rounded-lg shadow-md">
        <div class="swiper-wrapper">



          <div class="swiper-slide"><img src= <?= PATH_HREF_CARPETA_LUGARES_INTERES . "/ruta-de-la-costa-oriental/img/ruta-de-la-costa-oriental-1.jpg"?>  class="w-full object-cover rounded-md"></div>
          <div class="swiper-slide"><img src= <?= PATH_HREF_CARPETA_LUGARES_INTERES . "/ruta-de-la-costa-oriental/img/ruta-de-la-costa-oriental-2.jpg"?> class="w-full object-cover rounded-md"></div>
          <div class="swiper-slide"><img src= <?= PATH_HREF_CARPETA_LUGARES_INTERES . "/ruta-de-la-costa-oriental/img/ruta-de-la-costa-oriental-3.jpg"?> class="w-full object-cover rounded-md"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center"><i class="bi bi-geo-alt-fill text-green-600 mr-2"></i> Mapa de la Ruta</h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center"><i class="bi bi-cloud-sun-fill text-green-600 mr-2"></i> Tiempo en Ajo</h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_27774" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center"><i class="bi bi-chat-dots-fill text-green-600 mr-2"></i> Opiniones</h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"Una ruta preciosa, ideal al atardecer." – <strong>Ana R.</strong></p>
        <p>"Perfecta para una caminata tranquila con vistas espectaculares." – <strong>Carlos M.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center"><i class="bi bi-link-45deg text-green-600 mr-2"></i> Enlaces oficiales</h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.aytobareyo.org/municipio/descubre-el-municipio/localizacion-y-entorno/" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Bareyo</a></li>
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
      </ul>
    </section>


    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php //require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in-parte-abajo.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.4968, -3.5887], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.4968, -3.5887]).addTo(map).bindPopup('Inicio de la ruta').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>
    <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/ruta-de-la-costa-oriental/schemas/schemas-body.php"; ?>

</body>

</html>
