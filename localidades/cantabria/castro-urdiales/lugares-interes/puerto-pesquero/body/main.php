<main class="container mx-auto max-w-7xl px-2 py-4">
  <article itemscope itemtype="https://schema.org/TouristAttraction" class="bg-white rounded-2xl shadow-md p-4 md:p-6">
    <h1 itemprop="name" class="text-xl md:text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">
      <i class="fas fa-anchor text-<?= COLOR_PAGE; ?>-600"></i> Puerto de Castro Urdiales
    </h1>

    <p class="mb-4 text-gray-700" itemprop="description">
      <strong class="text-gray-900">Puerto de Castro Urdiales</strong> es un vibrante <strong>puerto pesquero y deportivo</strong> ubicado en la <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/" class="text-<?= COLOR_PAGE; ?>-500 underline hover:text-<?= COLOR_PAGE; ?>-700">costa de Cantabria</a>. Punto clave para la economía local y un lugar popular para paseos y actividades marítimas.
    </p>

    <p class="mb-4 text-gray-700">Este puerto fusiona <strong>tradición marinera</strong> con instalaciones modernas para embarcaciones. Ideal para residentes, turistas y amantes del mar Cantábrico.</p>

    <section class="mb-4 text-gray-700">
      <p class="text-gray-900 font-semibold mb-1">
        <i class="fas fa-map-marker-alt text-red-500"></i> Dirección:
      </p>
      <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
        <span itemprop="streetAddress">Muelle, s/n</span><br>
        <span itemprop="postalCode">39700</span> <span itemprop="addressLocality">Castro Urdiales</span>, Cantabria, España
      </p>
    </section>

    <p class="mb-4 text-gray-700">
      El puerto ofrece <strong>restaurantes con mariscos frescos</strong>, zonas de pesca y acceso a <a href="#excursiones" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">excursiones en barco</a> por la costa.
    </p>

    <section class="mb-4 text-gray-700">
      <h2 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">
        <i class="fas fa-star text-yellow-500"></i> Elementos destacados
      </h2>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Muelle histórico:</strong> centro de la actividad pesquera.</li>
        <li><strong>Zona de embarque:</strong> excursiones y deportes náuticos.</li>
        <li><strong>Restaurantes:</strong> gastronomía cántabra frente al mar.</li>
      </ul>
    </section>

    <section id="excursiones" class="mb-4 text-gray-700">
      <h2 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">
        <i class="fas fa-ship text-blue-500"></i> Actividades y servicios
      </h2>
      <ul class="list-disc list-inside space-y-1">
        <li>Paseos en barco y <strong>pesca deportiva</strong></li>
        <li>Degustaciones en <a href="https://www.google.com/search?q=restaurantes+puerto+castro+urdiales" target="_blank" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">restaurantes locales</a></li>
        <li>Festivales y eventos marítimos</li>
      </ul>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-pesquero-castro-urdiales-1.jpg" alt="Puerto de Castro Urdiales con barcos pesqueros" itemprop="photo" class="rounded-lg shadow-sm object-cover w-full h-64">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-castro-urdiales-2.jpg" alt="Vista panorámica del Puerto de Castro Urdiales" class="rounded-lg shadow-sm object-cover w-full h-64">
    </div>
    <p class="text-center text-sm text-gray-500 mb-8">Imágenes del Puerto de Castro Urdiales</p>

    <section class="mb-6 text-gray-700">
      <h3 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">
        <i class="fas fa-info-circle text-<?= COLOR_PAGE; ?>-500"></i> Información de contacto
      </h3>
      <ul class="space-y-1">
        <li><strong>Teléfono:</strong> <a href="tel:+34942859065" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">+34 942 85 90 65</a></li>
        <li><strong>Web:</strong> <a href="https://www.turismocastrourdiales.net" target="_blank" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">www.turismocastrourdiales.net</a></li>
      </ul>
    </section>

    <p class="mb-8 text-gray-700">
      <strong>¿Te apasiona el mar?</strong> Entonces este lugar es ideal para disfrutar de la cultura marinera, la naturaleza y el sabor auténtico del norte de España.
    </p>

    <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php" class="inline-block px-6 py-2 border border-<?= COLOR_PAGE; ?>-600 text-<?= COLOR_PAGE; ?>-600 rounded-full hover:bg-<?= COLOR_PAGE; ?>-600 hover:text-white transition">
      ← Volver a lugares de interés
    </a>
  </article>
</main>
