<main class="container mx-auto max-w-7xl px-4 py-6" itemscope itemtype="https://schema.org/SportsClub">
        <?php require PATH_RAIZ . '/_estructura/semantica/breadcrums-playa.php'; ?>
  <article class="bg-white rounded-2xl shadow-md p-6 md:p-10" itemprop="description">

    <header>
      <h1 class="text-3xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-4" itemprop="name">Club Náutico de Castro Urdiales</h1>
      <p class="text-sm text-gray-500">
        <i class="fas fa-map-marker-alt text-red-500"></i> Avenida de la Constitución, s/n · 39700 · Castro Urdiales, Cantabria, España
      </p>
    </header>

    <section class="mb-6 text-gray-700">
      <p><strong class="text-gray-900">El Club Náutico de Castro Urdiales</strong> es una institución marítima emblemática en Cantabria, fundada en el siglo XX. Es un centro de referencia para actividades náuticas, recreativas y deportivas.</p>
      <p class="mt-3">Ubicado frente al mar, ofrece instalaciones modernas y servicios de alta calidad para socios y visitantes.</p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
        <i class="fas fa-ship text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Instalaciones</h2>
      <ul class="list-disc list-inside space-y-2">
        <li><strong>Pantalanes y muelles</strong> para barcos de diferentes tamaños</li>
        <li><strong>Escuela de vela</strong> para niños, jóvenes y adultos</li>
        <li><strong>Restaurante y bar</strong> con vistas al Cantábrico</li>
        <li><strong>Salas de reuniones</strong> para eventos corporativos o sociales</li>
        <li><strong>Zona de deportes</strong> para actividades acuáticas complementarias</li>
      </ul>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
        <i class="fas fa-bullseye text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Actividades</h2>
      <ul class="list-disc list-inside space-y-2">
        <li>⛵ <strong>Regatas</strong> de vela y embarcaciones deportivas</li>
        <li>📚 <strong>Cursos y talleres</strong> de navegación y seguridad marítima</li>
        <li>🎉 <strong>Eventos sociales</strong>: cenas, fiestas, encuentros de socios</li>
        <li>🐟 <strong>Actividades recreativas</strong>: pesca deportiva, salidas en barco</li>
      </ul>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
        <i class="fas fa-id-card-alt text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Membresías</h2>
      <p>El club ofrece membresías <strong>individuales, familiares y temporales</strong> con acceso a todas las instalaciones, actividades exclusivas y beneficios añadidos.</p>
    </section>

    <figure class="my-8">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/club-nautico-castro-urdiales.jpg"
           alt="Vista general del Club Náutico de Castro Urdiales junto al puerto"
           class="rounded-lg shadow-sm object-cover w-full h-80 md:h-[28rem]" loading="lazy">
      <figcaption class="text-sm text-center text-gray-500 mt-2">Club Náutico de Castro Urdiales frente al Cantábrico</figcaption>
    </figure>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3">
        <i class="fas fa-info-circle text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Contacto</h2>
      <ul class="space-y-2">
        <li><strong>📞 Teléfono:</strong> <a href="tel:+34942869000" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">+34 942 86 90 00</a></li>
        <li><strong>📧 Email:</strong> <a href="mailto:info@nauticocastro.com" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">info@nauticocastro.com</a></li>
        <li><strong>🌐 Web:</strong> <a href="https://www.nauticocastro.com" target="_blank" rel="noopener noreferrer" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">nauticocastro.com</a></li>
      </ul>
    </section>

    <section class="mb-8 text-gray-700">
      <p>El Club Náutico es el lugar perfecto para quienes aman el mar: deportes, formación y exclusividad en un entorno de primer nivel en Castro Urdiales.</p>
    </section>

    <div class="text-center mt-8">
      <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php" class="inline-block px-6 py-2 border border-<?= COLOR_PAGE; ?>-600 text-<?= COLOR_PAGE; ?>-600 rounded-full hover:bg-<?= COLOR_PAGE; ?>-600 hover:text-white transition">
        ← Volver a lugares de interés
      </a>
    </div>

  </article>
</main>
