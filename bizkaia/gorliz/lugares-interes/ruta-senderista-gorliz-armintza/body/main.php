<main class="bg-green-50 min-h-screen p-4 md:p-10">
  <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

  <!-- Header -->
  <header class="text-center mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-green-700 mb-2">
      🥾 Ruta Senderista Gorliz – Armintza
    </h1>
    <p class="text-lg md:text-xl text-green-600">
      Paseo costero panorámico por Bizkaia ideal para caminatas y naturaleza
    </p>
  </header>

  <!-- Descripción -->
  <section class="max-w-3xl mx-auto mb-10 text-gray-700 text-base md:text-lg space-y-4">
    <p>
      La <strong class="text-gray-900">Ruta Senderista Gorliz – Armintza</strong> recorre la costa de <span class="font-medium">Gorliz</span>, Bizkaia, combinando senderos junto al mar, miradores panorámicos y zonas de naturaleza protegida.
    </p>
    <p>
      Perfecta para familias, caminantes y fotógrafos que buscan disfrutar de aves, flora autóctona y vistas al Cantábrico.
    </p>
  </section>

  <!-- Galería -->
  <section aria-labelledby="galeria" class="mb-12">
    <h2 id="galeria" class="text-2xl font-bold text-green-700 mb-4">📸 Galería de la Ruta</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-gorliz-armintza-1.jpg"
           alt="Sendero costero Gorliz – Armintza"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-gorliz-armintza-2.jpg"
           alt="Vistas panorámicas del Cantábrico desde la ruta"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-gorliz-armintza-3.jpg"
           alt="Mirador natural en la ruta Gorliz – Armintza"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-gorliz-armintza-4.jpg"
           alt="Paisajes y flora autóctona en la ruta costera"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
    </div>
  </section>

  <!-- Información -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-green-700 mb-4">ℹ️ Información de la Ruta</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Longitud</h3>
        <p>≈ 5 km ida y vuelta</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Duración</h3>
        <p>1,5 – 2 horas</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Dificultad</h3>
        <p>Baja – Apta para todos</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Entorno</h3>
        <p>Sendero costero, miradores y flora/fauna autóctona</p>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-green-700 mb-4">🥾 Actividades recomendadas</h2>
    <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🌊</span> Paseo costero y contemplación del mar
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🦅</span> Observación de aves y fauna marina
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">📸</span> Fotografía de paisajes y miradores
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🌿</span> Naturaleza y flora autóctona
      </li>
    </ul>
  </section>

  <!-- Leaflet CSS/JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <!-- Mapa con Leaflet -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-green-700 mb-4">🗺️ Localización</h2>
    <div id="map-ruta-gorliz" class="w-full h-80 rounded-xl shadow"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map-ruta-gorliz').setView([43.4230, -2.9320], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Marcadores inicio y fin
        L.marker([43.4230, -2.9320]).addTo(map)
          .bindPopup('<strong>Inicio Ruta: Gorliz</strong>')
          .openPopup();

        L.marker([43.4290, -2.9380]).addTo(map)
          .bindPopup('<strong>Final Ruta: Armintza</strong>');

        // Línea del recorrido
        var latlngs = [
          [43.4230, -2.9320],
          [43.4250, -2.9345],
          [43.4270, -2.9360],
          [43.4290, -2.9380]
        ];
        L.polyline(latlngs, {color: 'green', weight: 4, opacity: 0.7}).addTo(map);
      });
    </script>
  </section>

  <!-- Contacto -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-green-700 mb-3">📞 Información de contacto</h2>
    <ul class="space-y-2 text-gray-700">
      <li><strong>Teléfono Ayuntamiento:</strong> 
        <a href="tel:+34944800000" class="text-green-600 hover:underline">+34 944 80 00 00</a>
      </li>
      <li><strong>Sitio web:</strong> 
        <a href="https://www.gorliz.eus" target="_blank" rel="noopener noreferrer" class="text-green-600 hover:underline">
          www.gorliz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
