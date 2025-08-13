<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'club-nautico-castro-urdiales';

$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Club Náutico – Castro Urdiales, Cantabria"); ?>
<?php define('DESCRIPTION', "Descubre el Club Náutico de Castro Urdiales: deportes náuticos, actividades acuáticas y un entorno privilegiado junto al puerto."); ?>
<?php define('COLOR_PAGE', "blue"); ?>
<?php define('LUGAR', "Club Náutico de Castro Urdiales"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))); ?>
<?php define('KEYWORDS_CONTENT', 'Club Náutico Castro Urdiales, deportes náuticos Cantabria, actividades acuáticas Castro Urdiales, turismo marítimo Cantabria') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Club Náutico - Castro-Urdiales, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/club-nautico-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-blue-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Club Náutico de Castro-Urdiales</h1>
    <p class="text-lg">Un punto de encuentro para deportes y actividades náuticas</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-building text-blue-600 mr-2"></i> Descripción y Ambiente
      </h2>
      <p class="mb-4">
        El Club Náutico de Castro-Urdiales ofrece instalaciones para deportes acuáticos, actividades marítimas y eventos frente al Cantábrico. 
        Un lugar ideal para disfrutar del mar y la tradición náutica de la región.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-600 mr-1"></i> Actividades y deportes náuticos</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-600 mr-1"></i> Instalaciones modernas junto al puerto</p>
      <p><i class="bi bi-check-circle-fill text-blue-600 mr-1"></i> Ambiente marítimo y familiar</p>
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
            <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/club-nautico-castro-urdiales/img/club-nautico-castro-urdiales-cantabria-1.jpg" ?>"
                 class="w-full h-72 object-cover rounded-md">
          </div>
          <div class="swiper-slide">
            <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/club-nautico-castro-urdiales/img/club-nautico-castro-urdiales-cantabria-1.jpg" ?>"
                 class="w-full h-72 object-cover rounded-md">
          </div>
          <div class="swiper-slide">
            <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/club-nautico-castro-urdiales/img/club-nautico-castro-urdiales-cantabria-1.jpg" ?>"
            
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
        <i class="bi bi-cloud-sun-fill text-blue-600 mr-2"></i> Tiempo en Castro-Urdiales
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_13721" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-blue-600 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"Gran lugar para practicar deportes náuticos con amigos y familia." – <strong>Carlos M.</strong></p>
        <p>"Instalaciones modernas y personal muy amable. Recomendado." – <strong>Elena S.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-blue-600 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.castro-urdiales.net" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Castro-Urdiales</a></li>
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
        <li><a href="https://www.clubnauticocastro-urdiales.com" target="_blank" class="text-blue-600 hover:underline">Club Náutico Castro-Urdiales</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.3850, -3.2195], 18); // Coordenadas aproximadas del Club Náutico
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3850, -3.2195]).addTo(map).bindPopup('Club Náutico de Castro-Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/club-nautico-castro-urdiales/schemas/schemas-body.php"; ?>
</body>
</html>
