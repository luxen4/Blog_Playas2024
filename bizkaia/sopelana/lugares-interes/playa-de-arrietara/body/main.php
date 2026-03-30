<main class="bg-amber-50 min-h-screen p-4 md:p-10">
  <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

  <!-- Header -->
  <header class="text-center mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-amber-700 mb-2">
      🏖️ Playa de Arrietara
    </h1>
    <p class="text-lg md:text-xl text-amber-600">
      Arenal familiar y entorno natural protegido en Sopelana, Bizkaia
    </p>
  </header>

  <!-- Descripción -->
  <section class="max-w-3xl mx-auto mb-10 text-gray-700 text-base md:text-lg space-y-4">
    <p>
      La <strong class="text-gray-900">Playa de Arrietara</strong>, situada en <span class="font-medium">Sopelana</span>, Bizkaia, es un arenal amplio y familiar, ideal para surfistas y bañistas, rodeado de un entorno natural protegido y con vistas al mar Cantábrico.
    </p>
    <p>
      Perfecta para familias, deportistas y amantes de la naturaleza, con zonas de descanso, baño y observación de aves marinas.
    </p>
  </section>

  <!-- Galería -->
  <section aria-labelledby="galeria" class="mb-12">
    <h2 id="galeria" class="text-2xl font-bold text-amber-700 mb-4">📸 Galería de la Playa</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-arrietara-sopelana-bizkaia-1.jpg"
           alt="Playa de Arrietara, Sopelana"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-arrietara-sopelana-bizkaia-2.jpg"
           alt="Olas y surf en Playa de Arrietara"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-arrietara-sopelana-bizkaia-3.jpg"
           alt="Zona familiar de la Playa de Arrietara"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-arrietara-sopelana-bizkaia-4.jpg"
           alt="Entorno natural protegido en Arrietara"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
    </div>
  </section>

  <!-- Información -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">ℹ️ Información de la Playa</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Ubicación</h3>
        <p>Sopelana, Bizkaia</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Extensión</h3>
        <p>Arenal amplio, ideal para baño y paseos</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Actividades</h3>
        <p>Surf, baño, paseos, observación de aves</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Entorno</h3>
        <p>Entorno natural protegido, mar Cantábrico</p>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">🏄‍♂️ Actividades recomendadas</h2>
    <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🌊</span> Surf y deportes acuáticos
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🏖️</span> Baño y descanso en la arena
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🚶‍♂️</span> Paseos por la playa
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🦅</span> Observación de aves y naturaleza
      </li>
    </ul>
  </section>

  <!-- Leaflet CSS/JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <!-- Mapa con Leaflet -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">🗺️ Localización</h2>
    <div id="map-arrietara" class="w-full h-80 rounded-xl shadow"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map-arrietara').setView([43.3840, -2.9910], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([43.3840, -2.9910]).addTo(map)
          .bindPopup('<strong>Playa de Arrietara - Sopelana</strong>')
          .openPopup();
      });
    </script>
  </section>

  <!-- Contacto -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-3">📞 Información de contacto</h2>
    <ul class="space-y-2 text-gray-700">
      <li><strong>Teléfono Ayuntamiento:</strong> 
        <a href="tel:+34944800000" class="text-amber-600 hover:underline">+34 944 80 00 00</a>
      </li>
      <li><strong>Sitio web:</strong> 
        <a href="https://www.sopelana.eus" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline">
          www.sopelana.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
