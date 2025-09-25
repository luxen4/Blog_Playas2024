<!-- Main Content Section: Parque Amestoy - Castro Urdiales -->
<main class="container mx-auto max-w-7xl px-1 py-1">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <section class="bg-white rounded-2xl shadow-md p-4 md:p-6">
    
    <h1 class="text-2xl md:text-3xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-6">
      🌳 Parque Amestoy en Castro Urdiales: naturaleza, ocio y familia
    </h1>

    <p class="mb-4 text-gray-700">
      El <strong class="text-gray-900">Parque Amestoy</strong> es uno de los espacios verdes más representativos de <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>" title="Más lugares de interés en Castro Urdiales" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">Castro Urdiales</a>, Cantabria. Ubicado en pleno centro urbano, este parque es un lugar ideal para pasear, relajarse y disfrutar de la naturaleza en familia.
    </p>

    <p class="mb-4 text-gray-700">
      Con amplias zonas ajardinadas, áreas infantiles y caminos arbolados, el parque ofrece un entorno acogedor tanto para residentes como visitantes. Es un punto neurálgico en la vida social y cultural de la ciudad.
    </p>

    <address class="not-italic mb-4 text-gray-700">
      <strong class="text-gray-900">📍 Dirección:</strong><br>
      Calle Amestoy, s/n<br>
      39700 Castro Urdiales, Cantabria, España
    </address>

    <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">✨ Características principales</h2>
    <ul class="list-disc list-inside space-y-1 text-gray-700 mb-4">
      <li>🌿 Zonas verdes y jardines ornamentales</li>
      <li>🎠 Área infantil con columpios y juegos</li>
      <li>🏀 Espacios para deporte y actividades al aire libre</li>
      <li>🚶 Paseos pavimentados accesibles</li>
    </ul>

    <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">🎯 Servicios y actividades</h2>
    <ul class="list-disc list-inside space-y-1 text-gray-700 mb-6">
      <li>🚶‍♂️ Paseos urbanos y senderismo suave</li>
      <li>🎭 Eventos culturales, fiestas locales y mercadillos</li>
      <li>🍽️ Áreas para picnic y descanso</li>
      <li>👨‍👩‍👧‍👦 Actividades familiares y educativas</li>
    </ul>

    <figure class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4 my-8">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-amestoy-1.jpg"
           alt="Vista panorámica del Parque Amestoy con zonas verdes y caminos" 
           class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-amestoy-2.jpg"
           alt="Área infantil con columpios en el Parque Amestoy" 
           class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-amestoy-3.jpg"
           alt="Paseo arbolado del Parque Amestoy en Castro Urdiales" 
           class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
    </figure>

    <p class="text-center text-sm text-gray-500 mb-8">Fotografías del Parque Amestoy en Castro Urdiales</p>

    <p class="mb-6 text-gray-700">
      El <strong>Parque Amestoy</strong> es el corazón verde de la ciudad. Su ubicación estratégica y sus múltiples zonas de uso lo convierten en una parada obligatoria para quienes visitan <a href="https://www.turismocastrourdiales.net" title="Turismo en Castro Urdiales" target="_blank" rel="noopener noreferrer" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">Castro Urdiales</a>.
    </p>

    <section class="mb-6 text-gray-700">
      <h2 class="text-xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">📞 Información de contacto</h2>
      <ul class="space-y-1">
        <li><strong>Teléfono:</strong> <a href="tel:+34942859065" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">+34 942 85 90 65</a></li>
        <li><strong>Web turística oficial:</strong> <a href="https://www.turismocastrourdiales.net" target="_blank" rel="noopener noreferrer" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">www.turismocastrourdiales.net</a></li>
      </ul>
    </section>

    <p class="mb-8 text-gray-700">
      Si buscas un espacio tranquilo y familiar en el centro de <strong>Castro Urdiales</strong>, el Parque Amestoy es tu mejor opción. ¡No olvides llevar tu cámara y disfrutar del ambiente local!
    </p>

    <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php"
       class="inline-block px-6 py-2 border border-<?= COLOR_PAGE; ?>-600 text-<?= COLOR_PAGE; ?>-600 rounded-full hover:bg-<?= COLOR_PAGE; ?>-600 hover:text-white transition"
       title="Volver a lugares de interés">
      ← Volver a lugares de interés
    </a>

  </section>
</main>




<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD . "/links-generico.php"; ?>
  <title>Parque Amestoy - Castro-Urdiales, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/parque-amestoy-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Parque Amestoy de Castro-Urdiales</h1>
    <p class="text-lg">Zona verde y espacio de ocio en pleno corazón de Castro Urdiales</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-tree-fill text-green-600 mr-2"></i> Descripción y Ambiente
      </h2>
      <p class="mb-4">
        El Parque Amestoy es un pulmón verde en Castro Urdiales, perfecto para paseos, actividades al aire libre y para disfrutar de un entorno natural tranquilo. Cuenta con áreas de juegos, zonas de descanso y espacios para eventos.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Amplias zonas verdes y arboladas</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Área infantil y espacios para deporte</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Ideal para picnic y actividades familiares</p>
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
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/parque-amestoy-castro-urdiales/img/parque-amestoy-castro-urdiales-cantabria-1.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/parque-amestoy-castro-urdiales/img/parque-amestoy-castro-urdiales-cantabria-1.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img  src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/parque-amestoy-castro-urdiales/img/parque-amestoy-castro-urdiales-cantabria-1.jpg" ?>
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
        <p class="mb-2">"Un oasis verde perfecto para pasear y disfrutar en familia." – <strong>Ana M.</strong></p>
        <p>"Ambiente tranquilo y muchas actividades para niños." – <strong>Carlos G.</strong></p>
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
    const map = L.map('map').setView([43.3825, -3.2170], 17); // Ajusta las coordenadas exactas del parque
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3825, -3.2170]).addTo(map).bindPopup('Parque Amestoy de Castro-Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/parque-amestoy-castro-urdiales/schemas/schemas-body.php"; ?>
</body>
</html>
