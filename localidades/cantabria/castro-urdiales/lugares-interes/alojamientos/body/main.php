<main class="container mx-auto max-w-7xl px-4 py-8">
  <div class="bg-white rounded-2xl shadow-md p-6 md:p-10">
    
    <header class="mb-8 text-center">
      <h1 class="text-xl md:text-2xl font-semibold text-green-700 mb-2">
        <i class="fas fa-bed text-green-600"></i> Alojamientos en <?= $localidad_minuscula; ?>
      </h1>
      <p class="text-sm md:text-base text-gray-600">Guía de hospedajes para tu estancia en la costa de <?= $region; ?></p>
    </header>

    <section class="mb-6">
      <h2 class="text-base md:text-lg font-bold text-primary mb-2">
        <i class="fas fa-hotel text-blue-600"></i> Hoteles recomendados
      </h2>
      <p class="text-gray-700">
        En <strong><?= $localidad_minuscula; ?></strong> encontrarás hoteles frente al mar y en el centro histórico. Algunos de los más valorados son el 
        <a href="https://www.hotel-lasrocas.com" target="_blank" rel="noopener noreferrer" class="text-blue-600 underline hover:text-blue-800">Hotel Las Rocas</a> con vistas a la Playa de Brazomar, y el 
        <a href="https://www.hotelareatlantico.com" target="_blank" class="text-blue-600 underline hover:text-blue-800">Hotel Área Cantábrico</a> junto al paseo marítimo.
      </p>
    </section>

    <section class="mb-6">
      <h2 class="text-base md:text-lg font-bold text-primary mb-2">
        <i class="fas fa-home text-blue-600"></i> Apartamentos y estudios
      </h2>
      <p class="text-gray-700">
        Si prefieres independencia y cocina propia, hay apartamentos turísticos como 
        <a href="https://www.booking.com/hotel/es/puertochico-castro.html" target="_blank" class="text-blue-600 underline hover:text-blue-800">PuertoChico</a> o 
        <a href="https://www.booking.com/hotel/es/studio-zen.html" target="_blank" class="text-blue-600 underline hover:text-blue-800">Studio Zen</a>, ideales para parejas o familias.
      </p>
    </section>

    <section class="mb-6">
      <h2 class="text-base md:text-lg font-bold text-primary mb-2">
        <i class="fas fa-tree text-blue-600"></i> Casas rurales y zonas tranquilas
      </h2>
      <p class="text-gray-700">
        En las afueras de Castro-Urdiales puedes encontrar alojamientos rurales como 
        <a href="https://www.casaruraleltxoko.com" target="_blank" class="text-blue-600 underline hover:text-blue-800">Casa Rural El Txoko</a> o 
        <a href="https://www.toprural.com/Alojamiento-rural/Casona-Campoo.htm" target="_blank" class="text-blue-600 underline hover:text-blue-800">Casona Campoo</a> para un ambiente más natural.
      </p>
    </section>

    <section class="mb-6">
      <h2 class="text-base md:text-lg font-bold text-primary mb-2">
        <i class="fas fa-euro-sign text-blue-600"></i> Opciones económicas
      </h2>
      <p class="text-gray-700">
        Las pensiones como 
        <a href="https://www.pensionlagaviota.com" target="_blank" class="text-blue-600 underline hover:text-blue-800">Pensión La Gaviota</a> o 
        <a href="https://www.hostalcatamaran.com" target="_blank" class="text-blue-600 underline hover:text-blue-800">Hostal Catamarán</a> ofrecen estancias asequibles en ubicaciones céntricas.
      </p>
    </section>

    <section class="mb-6">
      <h2 class="text-base md:text-lg font-bold text-green-700 mb-3">
        <i class="fas fa-star" style="color:#e74c3c;"></i> Recomendaciones destacadas
      </h2>
      <ul class="list-disc list-inside text-gray-800 space-y-3">
        <li>
          <strong>🏨 Hotel Las Rocas</strong><br>
          4 estrellas, junto a la playa de Brazomar. 
          <a href="https://www.hotel-lasrocas.com" target="_blank" class="text-blue-600 hover:underline">Sitio oficial</a>
        </li>
        <li>
          <strong>🏡 Casa Rural El Txoko</strong><br>
          Encanto rural a pocos minutos del centro. 
          <a href="https://www.casaruraleltxoko.com" target="_blank" class="text-blue-600 hover:underline">Más info</a>
        </li>
        <li>
          <strong>🛏️ Hostal Catamarán</strong><br>
          Económico y muy bien ubicado. 
          <a href="https://www.hostalcatamaran.com" target="_blank" class="text-blue-600 hover:underline">Ver web</a>
        </li>
      </ul>
    </section>

    <section class="mb-6">
      <h2 class="text-base md:text-lg font-bold text-blue-700 mb-2">
        <i class="fas fa-map-marker-alt text-blue-500"></i> ¿Dónde alojarse?
      </h2>
      <p class="text-gray-700">
        Las zonas preferidas son la 
        <a href="/playa-de-brazomar.php" class="text-blue-600 underline hover:text-blue-800">Playa de Brazomar</a>, el 
        <a href="/casco-antiguo.php" class="text-blue-600 underline hover:text-blue-800">Casco Antiguo</a> y el entorno del 
        <a href="/paseo-marítimo.php" class="text-blue-600 underline hover:text-blue-800">Paseo Marítimo</a>.
      </p>
    </section>

    <section class="text-center mt-10">
      <h3 class="text-lg font-semibold text-gray-800 mb-3">📍 ¿Planeas tu visita?</h3>
      <p class="text-gray-700">
        Descubre más sobre la ciudad en nuestra guía completa:
        <br>
        <a href="/castro-urdiales.php" class="inline-block mt-2 px-5 py-2 border border-green-600 text-green-600 rounded-full hover:bg-green-600 hover:text-white transition">
          Ver guía de Castro-Urdiales
        </a>
      </p>

      <p class="mt-6 text-gray-700">
        🔎 Opiniones, precios y más opciones:
        <br>
        <a href="<?= $url_tripadvisor; ?>" target="_blank" rel="noopener noreferrer" class="inline-block mt-2 px-5 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
          <i class="fab fa-tripadvisor"></i> Ver en TripAdvisor
        </a>
      </p>
    </section>
  </div>
</main>
