<main class="container mx-auto max-w-7xl px-4 py-8" itemscope itemtype="https://schema.org/TouristAttraction">
  <article class="bg-white rounded-2xl shadow-lg p-6 md:p-10" itemprop="description">
    <header>
      <h1 class="text-3xl md:text-4xl font-extrabold text-<?= COLOR_PAGE; ?>-700 mb-6" itemprop="name">Playa El Pedregal</h1>
      <p class="text-gray-600 mb-4">
        <strong class="text-gray-900">La Playa El Pedregal</strong> es una pequeña cala de cantos rodados ubicada en 
        <a href="<?= PATH_HREF_RAIZ_LOCALIDAD ?>" class="text-<?= COLOR_PAGE; ?>-600 hover:underline" itemprop="addressLocality" aria-label="Castro Urdiales">Castro Urdiales</a>, Cantabria. Su entorno natural y tranquilo la convierte en un lugar ideal para desconectar del bullicio y disfrutar del mar Cantábrico en un ambiente relajado.
      </p>
    </header>

    <section class="mb-6 text-gray-700 leading-relaxed">
      <p>
        Aunque no es una playa de arena, su belleza reside en el contraste de las rocas, el sonido del oleaje y la vista del horizonte. Es perfecta para quienes buscan un rincón más íntimo y menos concurrido.
      </p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3 flex items-center gap-2">
        <svg class="w-6 h-6 text-<?= COLOR_PAGE; ?>-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
          <path d="M6 2a1 1 0 00-1 1v3H3a1 1 0 000 2h2v3a1 1 0 002 0V8h3a1 1 0 100-2H7V3a1 1 0 00-1-1z" />
        </svg>
        Ubicación
      </h2>
      <address class="not-italic mb-4 text-gray-800" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
        <span itemprop="streetAddress">Barrio de Brazomar</span><br>
        <span itemprop="postalCode">39700</span> <span itemprop="addressLocality">Castro Urdiales</span>, <span itemprop="addressRegion">Cantabria</span>, <span itemprop="addressCountry">España</span>
      </address>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3 flex items-center gap-2">
        <svg class="w-6 h-6 text-<?= COLOR_PAGE; ?>-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
          <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4h2v2h-2v-2zm0-8h2v6h-2V6z" />
        </svg>
        Características destacadas
      </h2>
      <ul class="list-disc list-inside space-y-2">
        <li><strong>Tipo de playa:</strong> Cantos rodados y rocas</li>
        <li><strong>Ambiente:</strong> Tranquilo y natural</li>
        <li><strong>Accesibilidad:</strong> A pie, con <a href="<?= PATH_HREF_RAIZ_LOCALIDAD ?>/senderos-costero" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">senderos costeros</a> cercanos</li>
        <li><strong>Ideal para:</strong> Relajación, fotografía, pesca recreativa</li>
      </ul>
    </section>

    <section class="my-8 grid grid-cols-1 md:grid-cols-2 gap-6" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG ?>/playa-el-pedregal-castro-urdiales-1.webp" alt="Vista general de la Playa El Pedregal" class="rounded-lg shadow-md object-cover w-full h-72" itemprop="url" loading="lazy" />
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG ?>/playa-el-pedregal-castro-urdiales-2.webp" alt="Detalle de las rocas en la Playa El Pedregal" class="rounded-lg shadow-md object-cover w-full h-72" loading="lazy" />
      <meta itemprop="width" content="1200" />
      <meta itemprop="height" content="800" />
    </section>

    <p class="text-center text-sm text-gray-500 mb-8">Imágenes de la Playa El Pedregal en Castro Urdiales</p>

    <section class="mb-6 text-gray-700 leading-relaxed">
      <p>
        Esta playa es perfecta para quienes valoran la serenidad y el contacto directo con la naturaleza. Aunque no cuenta con servicios turísticos, su autenticidad la convierte en uno de los rincones más especiales del litoral cántabro.
      </p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3 flex items-center gap-2">
        <svg class="w-6 h-6 text-<?= COLOR_PAGE; ?>-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
          <path d="M12 8c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2zm-2 6a6 6 0 00-6-6v2a4 4 0 014 4h2z" />
        </svg>
        Cómo llegar
      </h2>
      <ul class="list-disc list-inside space-y-2">
        <li><span class="font-semibold">A pie:</span> Desde el centro de <a href="<?= PATH_HREF_RAIZ_LOCALIDAD ?>" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">Castro Urdiales</a> por el paseo marítimo hacia Brazomar</li>
        <li><span class="font-semibold">En coche:</span> Aparcamiento cercano en zonas residenciales</li>
        <li><span class="font-semibold">Coordenadas GPS:</span> <a href="https://www.google.com/maps?q=43.3865,-3.2161" target="_blank" rel="noopener noreferrer" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">43.3865, -3.2161</a></li>
      </ul>
    </section>


    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN. '/enlace-google-maps.php'; ?>

    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN. '/enlace-lugares-interes.php'; ?>

  </article>
</main>
