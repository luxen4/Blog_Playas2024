<?php  
$localidad = 'Sonabia';     
$localidad_minuscula = 'sonabia'; 
$lugar_minuscula = 'playa-de-valdearenas-sonabia';

$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Valdearenas – Sonabia, Cantabria"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Valdearenas en Sonabia, un arenal natural y salvaje, rodeado de acantilados y con vistas al Cantábrico, ideal para amantes de la naturaleza."); ?>
<?php define('COLOR_PAGE', "blue"); ?>
<?php define('LUGAR', "Playa de Valdearenas de Sonabia"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))); ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Valdearenas Sonabia, playas Cantabria, playa natural, acantilados Cantabria, naturaleza Sonabia, surf Cantabria') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Playa de Valdearenas - Sonabia, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playa-de-valdearenas-sonabia/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-blue-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Playa de Valdearenas de Sonabia</h1>
    <p class="text-lg">Un arenal salvaje y espectacular frente al Cantábrico</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-umbrella-beach text-blue-600 mr-2"></i> Descripción y Ambiente
      </h2>
      <p class="mb-4">
        La Playa de Valdearenas en Sonabia es un entorno natural único, rodeado de montes y acantilados, con arena fina y aguas limpias. 
        Es ideal para quienes buscan tranquilidad, naturaleza y un paisaje espectacular.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-600 mr-1"></i> Arenal natural y sin urbanizar</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-600 mr-1"></i> Rodeada de acantilados y monte Candina</p>
      <p><i class="bi bi-check-circle-fill text-blue-600 mr-1"></i> Ideal para surf, paseos y fotografía</p>
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
        <i class="bi bi-camera-fill text-blue-600 mr-2"></i> Galería de Fotos
      </h2>
      <div class="swiper mySwiper rounded-lg shadow-md">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/playa-de-valdearenas-sonabia/img/playa-de-valdearenas-sonabia-cantabria-1.jpg" ?>"
                 class="w-full h-72 object-cover rounded-md">
          </div>
          <div class="swiper-slide">
            <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/playa-de-valdearenas-sonabia/img/playa-de-valdearenas-sonabia-cantabria-2.jpg" ?>"
                 class="w-full h-72 object-cover rounded-md">
          </div>
          <div class="swiper-slide">
            <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/playa-de-valdearenas-sonabia/img/playa-de-valdearenas-sonabia-cantabria-3.jpg" ?>"
                 class="w-full h-72 object-cover rounded-md">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-blue-600 mr-2"></i> Ubicación
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-blue-600 mr-2"></i> Tiempo en Sonabia
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_13721" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-blue-600 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"Un paraíso natural, ideal para desconectar." – <strong>Laura G.</strong></p>
        <p>"Vistas impresionantes y un ambiente muy tranquilo." – <strong>Diego M.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-blue-600 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.4175, -3.4397], 17); // Coordenadas aproximadas Playa de Valdearenas
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.4175, -3.4397]).addTo(map).bindPopup('Playa de Valdearenas').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playa-de-valdearenas-sonabia/schemas/schemas-body.php"; ?>
</body>
</html>
