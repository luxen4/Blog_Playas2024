<main class="container mx-auto max-w-7xl px-4 py-1">
  <div class="bg-white rounded-2xl shadow-md p-1 md:p-2">
    <header class="text-center mb-10">
      <h1 class="text-xl md:text-2xl font-semibold text-green-700 mb-2">
        <i class="fas fa-utensils text-green-600"></i> Restaurantes en <?= $localidad_minuscula; ?>
      </h1>
      <p class="text-sm md:text-base text-gray-600">Guía para disfrutar de la gastronomía local en la costa de <?= $region; ?></p>
    </header>


    <!-- Sección Mariscos -->
    <section class="mb-10">
      <h2 class="text-xl font-semibold text-blue-700 mb-3"><i class="fas fa-fish"></i> Mariscos y pescado fresco</h2>
      <p class="text-gray-700 mb-4">
        Al ser un puerto pesquero, <strong><?= $localidad_minuscula; ?></strong> destaca por su oferta de mariscos frescos y pescado del día. Lugares como el 
        <a href="https://bajamarrestaurant.es/" target="_blank" class="text-blue-600 hover:underline">Restaurante Bajamar</a> o 
        <a href="https://www.tripadvisor.es/LocationPhotoDirectLink-g776898-d3187091-i429406629-Restaurante_La_Arboleda-Castro_Urdiales_Cantabria.html" target="_blank" class="text-blue-600 hover:underline">La Arboleda</a> ofrecen platos como lubina a la espalda, marmita de bonito y rabas de calamar.
      </p>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-4">
        <div>

          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES ?>/comedor-bajamar-castro-urdiales.jpg" alt="Restaurante Bajamar" class="rounded-xl shadow-md w-full h-32 object-cover">
          <p class="mt-2 text-xs text-center text-gray-600">Restaurante Bajamar</p>
        </div>
        <div>
          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES ?>/la-arboleda-castro-urdiales.png" alt="Restaurante La Arboleda" class="rounded-xl shadow-md w-full h-32 object-cover">
          <p class="mt-2 text-xs text-center text-gray-600">La Arboleda</p>
        </div>
      </div>

      <div class="text-right mt-4">
        <a href="https://www.viajeroscallejeros.com/donde-comer-en-castro-urdiales/" target="_blank" class="text-sm text-blue-700 hover:underline">Ver más sitios donde comer en Castro-Urdiales →</a>
      </div>
    </section>

    <!-- Cocina tradicional -->
    <section class="mb-10">
      <h2 class="text-xl font-semibold text-blue-700 mb-3"><i class="fas fa-drumstick-bite"></i> Cocina tradicional cántabra</h2>
      <p class="text-gray-700">
        Desde el <em>cocido montañés</em> hasta el chuletón de buey, encontrarás propuestas auténticas en 
        <a href="https://www.google.com/search?q=La+Taberna+de+la+Plaza+Castro-Urdiales" target="_blank" class="text-blue-600 hover:underline">La Taberna de la Plaza</a> o 
        <a href="https://www.google.com/search?q=Casa+Lucio+Castro-Urdiales" target="_blank" class="text-blue-600 hover:underline">Casa Lucio</a>.
      </p>
    </section>

    <!-- Bares de pintxos -->
    <section class="mb-10">
      <h2 class="text-xl font-semibold text-blue-700 mb-3"><i class="fas fa-wine-glass-alt"></i> Bares de pintxos y vinos</h2>
      <p class="text-gray-700">
        En el <strong>Casco Antiguo</strong> abundan los bares de pintxos. Prueba la ruta en la Calle Santander con vinos de Rioja o txakolí local. Recomendados: 
        <a href="https://www.google.com/search?q=La+Fuente+Castro-Urdiales" target="_blank" class="text-blue-600 hover:underline">La Fuente</a> y 
        <a href="https://www.google.com/search?q=La+Goleta+Castro-Urdiales" target="_blank" class="text-blue-600 hover:underline">La Goleta</a>.
      </p>
    </section>

    <!-- Opciones vegetarianas -->
    <section class="mb-10">
      <h2 class="text-xl font-semibold text-blue-700 mb-3"><i class="fas fa-seedling"></i> Opciones vegetarianas y modernas</h2>
      <p class="text-gray-700">
        <a href="https://www.instagram.com/bokadillo_gastrobar" target="_blank" class="text-blue-600 hover:underline">Bokadillo Gastrobar</a> y 
        <a href="https://www.google.com/search?q=El+Cierzo+Castro-Urdiales" target="_blank" class="text-blue-600 hover:underline">El Cierzo</a> apuestan por menús saludables, vegetarianos y creativos.
      </p>
    </section>

    <!-- Recomendaciones -->
    <section class="mb-10">
      <h2 class="text-xl font-bold text-red-600 mb-4"><i class="fas fa-star"></i> Recomendaciones destacadas</h2>
      <ul class="space-y-4 text-gray-700">
        <li>
          <strong>🍽️ Restaurante Bajamar</strong><br>
          Cocina marinera contemporánea con productos frescos del Cantábrico. 
          <a href="https://bajamarrestaurant.es" target="_blank" class="text-blue-600 hover:underline">Visitar web</a>
        </li>
        <li>
          <strong>🥘 La Arboleda</strong><br>
          Cocina tradicional y ambiente familiar. 
          <a href="https://www.tripadvisor.es/LocationPhotoDirectLink-g776898-d3187091-i429406629-Restaurante_La_Arboleda-Castro_Urdiales_Cantabria.html" target="_blank" class="text-blue-600 hover:underline">Ver más</a>
        </li>
        <li>
          <strong>🍷 El Puerto</strong><br>
          Cocina moderna en el paseo marítimo. 
          <a href="https://www.asadorelpuerto.com/" target="_blank" class="text-blue-600 hover:underline">Sitio oficial</a>
        </li>
      </ul>
    </section>

    <!-- Dónde comer -->
    <section class="mb-10">
      <h2 class="text-xl font-bold text-cyan-700 mb-3"><i class="fas fa-map-marker-alt"></i> ¿Dónde comer?</h2>
      <p class="text-gray-700">
        Los restaurantes más destacados están junto al 
        <a href="/playa-de-ostende.php" class="text-blue-600 hover:underline">Paseo Marítimo</a>, la 
        <a href="/plaza-ayuntamiento.php" class="text-blue-600 hover:underline">Plaza del Ayuntamiento</a> o el 
        <a href="/puerto.php" class="text-blue-600 hover:underline">Puerto pesquero</a>.
      </p>
    </section>

    <!-- Plan perfecto -->
    <section class="mb-10">
      <h3 class="text-xl font-semibold text-yellow-600 mb-2"><i class="fas fa-biking"></i> Plan perfecto</h3>
      <p class="text-gray-700">
        Tras una buena comida, disfruta de los <a href="/senderos-costeros-senalizados.php" class="text-blue-600 hover:underline">senderos costeros</a> o la 
        <a href="/playa-de-brazomar.php" class="text-blue-600 hover:underline">Playa de Brazomar</a>.
      </p>
    </section>

    <!-- CTA final -->
    <section class="text-center mt-12">
      <h3 class="text-2xl font-bold mb-3">📍 ¿Planeas tu visita?</h3>
      <a href="/castro-urdiales.php" class="inline-block px-6 py-2 border border-green-600 text-green-600 rounded-full hover:bg-green-600 hover:text-white transition">
        Ver guía de Castro-Urdiales
      </a>

      <div class="mt-6">
        <p class="mb-2">🔎 ¿Quieres más opiniones y rankings?</p>
        <a href="<?= $url_tripadvisor; ?>" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
          <i class="fab fa-tripadvisor mr-2"></i> Ver en TripAdvisor
        </a>
      </div>
    </section>
  </div>
</main>
