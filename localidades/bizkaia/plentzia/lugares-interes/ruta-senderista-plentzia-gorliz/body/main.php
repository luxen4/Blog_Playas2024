<main class="bg-blue-50 min-h-screen p-4 md:p-10">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <!-- Header -->
  <header class="text-center mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700 mb-2">
      🚶‍♂️ Ruta Senderista Plentzia – Gorliz
    </h1>
    <p class="text-lg md:text-xl text-blue-600">
      Recorrido costero entre Plentzia y Gorliz con playas, acantilados y vistas al Cantábrico
    </p>
  </header>

  <!-- Descripción -->
  <section class="max-w-3xl mx-auto mb-10 text-gray-700 text-base md:text-lg space-y-4">
    <p>
      La <strong class="text-gray-900">Ruta Senderista Plentzia – Gorliz</strong> es un paseo costero que conecta la villa marinera de <span class="font-medium">Plentzia</span> con <span class="font-medium">Gorliz</span>.
    </p>
    <p>
      Durante el recorrido disfrutarás de playas, acantilados, dunas y vistas panorámicas del mar Cantábrico, ideal para senderismo, fotografía y turismo activo.
    </p>
    <p>
      Es una ruta sencilla, perfecta para toda la familia.
    </p>
  </section>

  <!-- Galería -->
  <section aria-labelledby="galeria" class="mb-12">
    <h2 id="galeria" class="text-2xl font-bold text-blue-700 mb-4">📸 Galería de la Ruta</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <figure class="aspect-video w-full rounded-xl overflow-hidden shadow-lg border border-blue-200">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/sendero-costero-plentzia-gorliz.jpg"
             alt="Sendero costero entre Plentzia y Gorliz"
             class="object-cover w-full h-full" loading="lazy">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">Sendero costero entre Plentzia y Gorliz</figcaption>
      </figure>

      <figure class="aspect-video w-full rounded-xl overflow-hidden shadow-lg border border-blue-200">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-plentzia-gorliz-2.jpg"
             alt="Vistas de acantilados en la ruta Plentzia–Gorliz"
             class="object-cover w-full h-full" loading="lazy">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">Vistas de acantilados en la ruta Plentzia–Gorliz</figcaption>
      </figure>

      <figure class="aspect-video w-full rounded-xl overflow-hidden shadow-lg border border-blue-200">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-plentzia-gorliz-3.jpg"
             alt="Paisaje costero en el recorrido Plentzia–Gorliz"
             class="object-cover w-full h-full" loading="lazy">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">Paisaje costero en el recorrido Plentzia–Gorliz</figcaption>
      </figure>
    </div>
  </section>

  <!-- Información -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-blue-700 mb-4">ℹ️ Información de la Ruta</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
        <h3 class="font-semibold text-blue-700 mb-1">Distancia</h3>
        <p>Aprox. 5 km</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
        <h3 class="font-semibold text-blue-700 mb-1">Duración</h3>
        <p>Entre 1h y 1h 30m a pie</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
        <h3 class="font-semibold text-blue-700 mb-1">Dificultad</h3>
        <p>Fácil – Sendero costero sin grandes desniveles</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
        <h3 class="font-semibold text-blue-700 mb-1">Entorno</h3>
        <p>Playas, acantilados y dunas</p>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-blue-700 mb-4">🏞️ Actividades recomendadas</h2>
    <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
      <li class="bg-white rounded-lg p-4 shadow-sm flex items-center gap-3 border border-blue-200">
        <span class="text-2xl">🚶‍♀️</span> Senderismo costero
      </li>
      <li class="bg-white rounded-lg p-4 shadow-sm flex items-center gap-3 border border-blue-200">
        <span class="text-2xl">📸</span> Fotografía de paisajes y playas
      </li>
      <li class="bg-white rounded-lg p-4 shadow-sm flex items-center gap-3 border border-blue-200">
        <span class="text-2xl">🦅</span> Observación de aves y naturaleza
      </li>
      <li class="bg-white rounded-lg p-4 shadow-sm flex items-center gap-3 border border-blue-200">
        <span class="text-2xl">🌊</span> Disfrutar de playas y dunas
      </li>
    </ul>
  </section>

  <!-- Leaflet CSS/JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Mapa con Leaflet -->
<section class="mb-12">
  <h2 class="text-2xl font-bold text-blue-700 mb-4">🗺️ Localización</h2>
  <div id="map-ruta-plentzia-gorliz" class="w-full h-80 rounded-xl shadow-lg border border-blue-200"></div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Coordenadas centradas entre Plentzia y Gorliz
      var map = L.map('map-ruta-plentzia-gorliz').setView([43.412, -2.946], 14);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      // Ruta Plentzia -> Gorliz
      var ruta = [
        [43.405074, -2.946417], // Plentzia (puerto/centro)
        [43.419142, -2.945841]  // Gorliz (playa)
      ];

      L.polyline(ruta, {color: 'blue', weight: 4, opacity: 0.8}).addTo(map);

      // Marcador Plentzia
      L.marker([43.405074, -2.946417]).addTo(map)
        .bindPopup('<strong>Inicio: Plentzia</strong>');

      // Marcador Gorliz
      L.marker([43.419142, -2.945841]).addTo(map)
        .bindPopup('<strong>Fin: Gorliz</strong>');
    });
  </script>
</section>


  <!-- Contacto -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-blue-700 mb-3">📞 Información de contacto</h2>
    <ul class="space-y-2 text-gray-700">
      <li><strong>Turismo Plentzia:</strong> 
        <a href="https://www.plentzia.eus" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
          www.plentzia.eus
        </a>
      </li>
      <li><strong>Turismo Gorliz:</strong> 
        <a href="https://www.gorliz.eus" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
          www.gorliz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
