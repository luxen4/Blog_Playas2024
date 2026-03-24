<main class="bg-green-50 min-h-screen p-4 md:p-10">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <!-- Header -->
  <header class="text-center mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-green-700 mb-2">
      🏊‍♂️ Parque Acuático de Gorliz
    </h1>
    <p class="text-lg md:text-xl text-green-600">
      Diversión acuática para toda la familia junto a la costa
    </p>
  </header>

  <!-- Descripción -->
  <section class="max-w-3xl mx-auto mb-10 text-gray-700 text-base md:text-lg space-y-4">
    <p>
      El <strong class="text-gray-900">Parque Acuático de Gorliz</strong> es un espacio de entretenimiento familiar 
      en <span class="font-medium">Gorliz</span>, Bizkaia, que ofrece piscinas, toboganes, zonas infantiles y actividades 
      acuáticas para disfrutar de un día completo junto al mar Cantábrico.
    </p>
    <p>
      Ideal para familias, grupos y amantes del agua, con instalaciones seguras y accesibles.
    </p>
  </section>

  <!-- Galería -->
  <section aria-labelledby="galeria" class="mb-12">
    <h2 id="galeria" class="text-2xl font-bold text-green-700 mb-4">📸 Galería del Parque</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-acuatico-gorliz-1.jpg"
           alt="Piscinas del Parque Acuático de Gorliz"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-acuatico-gorliz-2.jpg"
           alt="Toboganes y juegos acuáticos"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-acuatico-gorliz-3.jpg"
           alt="Zona infantil del Parque Acuático"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-acuatico-gorliz-4.jpg"
           alt="Área de descanso y solárium"
           class="aspect-video object-cover w-full rounded-2xl shadow-md" loading="lazy">
    </div>
  </section>

  <!-- Información -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-green-700 mb-4">ℹ️ Información del Parque</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Ubicación</h3>
        <p>Gorliz, Bizkaia</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Instalaciones</h3>
        <p>Piscinas, toboganes, zonas infantiles y solárium</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Edad recomendada</h3>
        <p>Niños, adolescentes y adultos</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-1">Temporada</h3>
        <p>Verano – Apertura sujeta a calendario</p>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-green-700 mb-4">🏖️ Actividades destacadas</h2>
    <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🏊‍♂️</span> Natación y juegos acuáticos
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">💦</span> Toboganes y atracciones de agua
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">☀️</span> Solárium y zonas de descanso
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">👨‍👩‍👧‍👦</span> Diversión para toda la familia
      </li>
    </ul>
  </section>


<!-- Leaflet CSS/JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


<!-- Mapa con Leaflet -->
<section class="mb-12">
  <h2 class="text-2xl font-bold text-green-700 mb-4">🗺️ Localización</h2>
  <div id="map-gorliz" class="w-full h-80 rounded-xl shadow"></div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var map = L.map('map-gorliz').setView([43.4205, -2.9300], 15);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([43.4205, -2.9300]).addTo(map)
        .bindPopup('<strong>Parque Acuático de Gorliz - Bizkaia</strong>')
        .openPopup();
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