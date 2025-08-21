<!-- Contenido principal - Asador La Perla - Optimizado para SEO -->
<main class="container mx-auto max-w-7xl px-4 py-6" itemscope itemtype="https://schema.org/Restaurant">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <article class="bg-white rounded-2xl shadow-md p-6" itemprop="description">
    <header>
      <h1 class="text-3xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-4" itemprop="name">Asador La Perla en Castro Urdiales</h1>
      <p class="text-sm text-gray-500"><i class="fas fa-map-marker-alt text-red-500"></i> Castro Urdiales, Cantabria, España</p>
    </header>

    <section class="mb-6 text-gray-700">
      <p><strong class="text-gray-900">Asador La Perla</strong> es un reconocido <strong>restaurante en Castro Urdiales</strong>, famoso por su cocina tradicional a la parrilla y su ambiente acogedor. Se trata de una visita obligada para los amantes de la gastronomía cántabra.</p>

      <p class="mt-3">Ubicado en una zona privilegiada frente al mar, ofrece <strong>vistas panorámicas</strong> que acompañan a una carta selecta con platos típicos del norte de España, tanto de mar como de tierra.</p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-drumstick-bite text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Especialidades gastronómicas</h2>
      <p>Entre los platos más destacados se encuentran:</p>
      <ul class="list-disc list-inside space-y-1 mt-2">
        <li><strong>Chuletas de cordero a la brasa</strong></li>
        <li><strong>Solomillo de ternera</strong> al punto perfecto</li>
        <li><strong>Merluza fresca a la parrilla</strong></li>
        <li><strong>Parrillada de mariscos</strong> del Cantábrico</li>
      </ul>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-concierge-bell text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Servicios ofrecidos</h2>
      <ul class="list-disc list-inside space-y-1">
        <li>📅 Reservas previas disponibles</li>
        <li>📋 Menú del día y carta completa</li>
        <li>🎉 Opciones para eventos y celebraciones privadas</li>
        <li>🤝 Atención personalizada por el equipo de sala</li>
      </ul>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8">
      <figure>
        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/asador-la-perla.jpg" alt="Fachada del Asador La Perla" class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
        <figcaption class="text-sm text-center text-gray-500 mt-1">Fachada del restaurante</figcaption>
      </figure>
      <figure>
        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/plato-sardinas-asador-la-perla.jpg" alt="Plato de sardinas a la brasa en Asador La Perla" class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
        <figcaption class="text-sm text-center text-gray-500 mt-1">Sardinas a la brasa</figcaption>
      </figure>
      <figure>
        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG ?>/parrillas-asador-la-perla.jpg" alt="Parrillada de mariscos en el Asador La Perla" class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
        <figcaption class="text-sm text-center text-gray-500 mt-1">Parrillada variada</figcaption>
      </figure>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-clock text-<?= COLOR_PAGE; ?>-500 mr-2"></i>🕒 Horario de apertura</h2>
      <ul class="space-y-1">
        <li><strong>Lunes a Viernes:</strong> 13:00 – 16:00 y 20:00 – 23:00</li>
        <li><strong>Sábados y Domingos:</strong> 13:00 – 23:00 (horario continuo)</li>
      </ul>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-info-circle text-<?= COLOR_PAGE; ?>-500 mr-2"></i>¿Por qué visitar el Asador La Perla?</h2>
      <p>Su excelente ubicación, junto con una propuesta culinaria de calidad, lo convierten en uno de los <strong>mejores restaurantes de Castro Urdiales</strong> para disfrutar de la cocina cántabra con vistas al mar.</p>
    </section>

    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>


    <div class="text-center mt-8">
      <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
    </div>
  </article>
</main>