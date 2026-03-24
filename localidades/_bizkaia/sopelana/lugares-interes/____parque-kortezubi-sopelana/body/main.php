<main class="bg-amber-50 min-h-screen p-4 md:p-10">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <!-- Header -->
  <header class="text-center mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-amber-700 mb-2">
      🌳 Parque Kortezubi
    </h1>
    <p class="text-lg md:text-xl text-amber-600">
      Espacio verde y de ocio familiar en Sopelana, Bizkaia
    </p>
  </header>

  <!-- Descripción -->
  <section class="max-w-3xl mx-auto mb-10 text-gray-700 text-base md:text-lg space-y-4">
    <p>
      El <strong class="text-gray-900">Parque Kortezubi</strong>, situado en <span class="font-medium">Sopelana</span>, Bizkaia, es un entorno natural perfecto para pasear, descansar y disfrutar en familia. 
    </p>
    <p>
      Cuenta con zonas verdes, áreas de juegos y espacios ideales para el ocio y la desconexión en la costa vasca.
    </p>
  </section>

  <!-- Galería -->
  <section aria-labelledby="galeria" class="mb-12">
    <h2 id="galeria" class="text-2xl font-bold text-amber-700 mb-4">📸 Galería del Parque</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-kortezubi-sopelana-1.jpg"
           alt="Parque Kortezubi en Sopelana"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-kortezubi-sopelana-2.jpg"
           alt="Zonas verdes del Parque Kortezubi"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-kortezubi-sopelana-3.jpg"
           alt="Áreas de descanso en el Parque Kortezubi"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-kortezubi-sopelana-4.jpg"
           alt="Entorno natural en el Parque Kortezubi"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
    </div>
  </section>

  <!-- Información -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">ℹ️ Información del Parque</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Ubicación</h3>
        <p>Sopelana, Bizkaia</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Extensión</h3>
        <p>Zonas verdes amplias y áreas de recreo</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Actividades</h3>
        <p>Paseos, juegos infantiles, descanso</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Entorno</h3>
        <p>Parque urbano y familiar en la costa vasca</p>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">🎯 Actividades recomendadas</h2>
    <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🚶‍♀️</span> Paseos y caminatas
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🌳</span> Disfrutar de zonas verdes
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">👨‍👩‍👧‍👦</span> Juegos y actividades en familia
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">📸</span> Fotografía de naturaleza y ocio
      </li>
    </ul>
  </section>

  <!-- Leaflet CSS/JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <!-- Mapa con Leaflet -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">🗺️ Localización</h2>
    <div id="map-parque-kortezubi" class="w-full h-80 rounded-xl shadow"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map-parque-kortezubi').setView([43.3780, -2.9930], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([43.3780, -2.9930]).addTo(map)
          .bindPopup('<strong>Parque Kortezubi - Sopelana</strong>')
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
