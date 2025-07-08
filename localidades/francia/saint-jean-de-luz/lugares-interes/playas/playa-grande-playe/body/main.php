<main class="container mx-auto max-w-7xl px-4 py-6" itemscope itemtype="https://schema.org/Beach">
  <article class="bg-white rounded-2xl shadow-md p-6 md:p-10" itemprop="description">

    <header>
      <h1 class="text-3xl font-bold text-<?= $color_page; ?>-700 mb-4" itemprop="name">Grande Plage de Saint-Jean-de-Luz</h1>
      <p class="text-sm text-gray-500">
        <i class="fas fa-map-marker-alt text-blue-500"></i> Promenade Jacques Thibaud, 64500 Saint-Jean-de-Luz, Nouvelle-Aquitaine, France
      </p>
    </header>

    <section class="mb-6 text-gray-700">
      <p><strong class="text-gray-900">La Grande Plage</strong> es la principal playa urbana de Saint-Jean-de-Luz, famosa por su bahía protegida, arena dorada y ambiente familiar. Se encuentra en pleno centro de la ciudad, frente al paseo marítimo.</p>
      <p class="mt-3">Gracias a su ubicación resguardada por diques, es ideal para nadar tranquilamente, practicar deportes acuáticos o simplemente disfrutar del sol con vistas a las tradicionales casas vascas.</p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= $color_page; ?>-700 mb-3">🏖️ Características principales</h2>
      <ul class="list-disc list-inside space-y-2">
        <li><strong>Tipo:</strong> Playa de arena fina y aguas tranquilas</li>
        <li><strong>Ambiente:</strong> Familiar, urbano y muy animado en verano</li>
        <li><strong>Acceso:</strong> Directo desde el paseo marítimo</li>
        <li><strong>Perfecta para:</strong> Nado, familias, deportes acuáticos, paseos</li>
        <li><strong>Servicios:</strong> Duchas, socorristas, alquiler de sombrillas y restaurantes cercanos</li>
      </ul>
    </section>

    <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/grande-plage-saint-jean-de-luz-1.jpg"
           alt="Vista general de la Grande Plage de Saint-Jean-de-Luz"
           class="rounded-lg shadow-sm object-cover w-full h-72" loading="lazy">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/grande-plage-saint-jean-de-luz-2.jpg"
           alt="Zona de baño y paseo marítimo en la Grande Plage"
           class="rounded-lg shadow-sm object-cover w-full h-72" loading="lazy">
    </figure>

    <p class="text-center text-sm text-gray-500 mb-8">Imágenes de la Grande Plage de Saint-Jean-de-Luz, en la costa vasca francesa</p>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= $color_page; ?>-700 mb-3">📍 Cómo llegar</h2>
      <ul class="space-y-1">
        <li><strong>A pie:</strong> Desde el centro histórico de Saint-Jean-de-Luz</li>
        <li><strong>En coche:</strong> Parkings subterráneos y zonas de estacionamiento cercanas</li>
        <li><strong>Coordenadas GPS:</strong> <a href="https://www.google.com/maps?q=43.3906,-1.6624" target="_blank" rel="noopener noreferrer" class="text-<?= $color_page; ?>-500 hover:underline">43.3906, -1.6624</a></li>
      </ul>
    </section>

    <section class="mb-6 text-gray-700">
      <h3 class="text-xl font-semibold text-<?= $color_page; ?>-700 mb-2">🌊 Una playa viva en el corazón de la ciudad</h3>
      <p>La Grande Plage de Saint-Jean-de-Luz combina lo mejor de una playa urbana con la tranquilidad de su bahía cerrada. Su ambiente animado, su oferta de servicios y su cercanía a tiendas y restaurantes la convierten en un destino imprescindible del litoral vasco francés.</p>
    </section>

    <footer class="text-center mt-8">
      <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php"
         class="inline-block px-6 py-2 border border-<?= $color_page; ?>-600 text-<?= $color_page; ?>-600 rounded-full hover:bg-<?= $color_page; ?>-600 hover:text-white transition">
        ← Volver a lugares de interés
      </a>
    </footer>
  </article>
</main>
