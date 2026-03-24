<main class="bg-amber-50 min-h-screen p-4 md:p-10">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <!-- Header -->
  <header class="text-center mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-amber-700 mb-2">
      ⚓ Puerto Deportivo de Plentzia
    </h1>
    <p class="text-lg md:text-xl text-amber-600">
      Disfruta del puerto y su entorno marítimo en Plentzia, Bizkaia
    </p>
  </header>

  <!-- Descripción -->
  <section class="max-w-3xl mx-auto mb-10 text-gray-700 text-base md:text-lg space-y-4">
    <p>
      El <strong class="text-gray-900">Puerto Deportivo de Plentzia</strong>, situado en <span class="font-medium">Plentzia</span>, Bizkaia, es un lugar ideal para pasear por el paseo marítimo, disfrutar de embarcaciones y contemplar el entorno natural de la ría de Plentzia.
    </p>
    <p>
      Perfecto para actividades acuáticas, paseos familiares y fotografía de paisajes costeros.
    </p>
  </section>

  <!-- Galería -->
  <section aria-labelledby="galeria" class="mb-12">
    <h2 id="galeria" class="text-2xl font-bold text-amber-700 mb-4">📸 Galería del Puerto</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <figure class="aspect-video w-full">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-deportivo-plentzia.jpg"
             alt="Vista general del Puerto Deportivo de Plentzia"
             class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">Vista general del puerto</figcaption>
      </figure>

      <figure class="aspect-video w-full">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/embarcaciones-amarradas-plentzia.jpg"
             alt="Embarcaciones amarradas en Plentzia"
             class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">Embarcaciones amarradas</figcaption>
      </figure>

      <figure class="aspect-video w-full">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/paseo-maritimo-plentzia.jpg"
             alt="Paseo marítimo del puerto de Plentzia"
             class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">Paseo marítimo del puerto</figcaption>
      </figure><?php /* https://www.loquis.com/es/loquis/778073/Playa+de+Gorliz Audio en la web */ ?>

      <figure class="aspect-video w-full">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/atardecer-puerto-deportivo-plentzia.jpg"
             alt="Atardecer en el Puerto Deportivo de Plentzia"
             class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">Atardecer en el puerto</figcaption>
      </figure><?php /* https://www.istockphoto.com/es/fotos/plentzia-en-la-noche */ ?>

    </div>
  </section>

  <!-- Información -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">ℹ️ Información del Puerto</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Ubicación</h3>
        <p>Plentzia, Bizkaia</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Tipo</h3>
        <p>Puerto deportivo y paseo marítimo</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Actividades</h3>
        <p>Paseos, navegación, fotografía y observación de aves</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Entorno</h3>
        <p>Ría de Plentzia y playa cercana, zona protegida</p>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">🏞️ Actividades recomendadas</h2>
    <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🚶‍♂️</span> Paseos por el puerto y paseo marítimo
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">⛵</span> Navegación y deportes acuáticos
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">📸</span> Fotografía de paisaje y fauna
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🦅</span> Observación de aves en la ría
      </li>
    </ul>
  </section>

  <!-- Leaflet CSS/JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Mapa con Leaflet -->
<section class="mb-12">
  <h2 class="text-2xl font-bold text-amber-700 mb-4">🗺️ Localización</h2>
  <div id="map-puerto-plentzia" class="w-full h-80 rounded-xl shadow"></div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Coordenadas exactas del Puerto Deportivo de Plentzia
      var lat = 43.402772;
      var lng = -2.946982;

      var map = L.map('map-puerto-plentzia').setView([lat, lng], 16);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([lat, lng]).addTo(map)
        .bindPopup('<strong>Puerto Deportivo de Plentzia</strong>')
        .openPopup();
    });
  </script>
</section>



  <!-- Contacto -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-3">📞 Información de contacto</h2>
    <ul class="space-y-2 text-gray-700">
      <li><strong>Teléfono Ayuntamiento:</strong> 
        <a href="tel:+34944500000" class="text-amber-600 hover:underline">+34 944 50 00 00</a>
      </li>
      <li><strong>Sitio web:</strong> 
        <a href="https://www.plentzia.eus" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline">
          www.plentzia.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
