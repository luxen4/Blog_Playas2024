<main class="container mx-auto max-w-7xl px-4 py-6" itemscope itemtype="https://schema.org/TouristAttraction">
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <article class="bg-white rounded-2xl shadow-md p-6 md:p-10" itemprop="description">
    
    <header>
      <h1 class="text-3xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-4" itemprop="name">Castillo de Santa Ana en Castro Urdiales</h1>
      <p class="text-sm text-gray-500"><i class="fas fa-map-marker-alt text-red-500"></i> Monte Santa Ana, s/n · 39700 · Castro Urdiales, Cantabria, España</p>
    </header>

    <section class="mb-6 text-gray-700">
      <p><strong class="text-gray-900">El Castillo de Santa Ana</strong> es uno de los monumentos más representativos de <strong>Castro Urdiales</strong>, una joya arquitectónica situada sobre un promontorio junto al mar Cantábrico. Esta fortaleza del <strong>siglo XIII</strong> fue clave en la defensa marítima de la villa.</p>

      <p class="mt-3">Su ubicación privilegiada permite disfrutar de <strong>vistas panorámicas</strong> al puerto y al litoral cantábrico, siendo hoy uno de los <strong>puntos turísticos más visitados</strong> de Cantabria.</p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-university text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Historia del castillo</h2>
      <p>Construido entre los siglos XIII y XIV, fue parte esencial del sistema defensivo de la villa. A lo largo del tiempo, ha cumplido funciones militares y de vigilancia. Su estructura ha sido restaurada y adaptada para usos culturales.</p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-crown text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Elementos destacados</h2>
      <ul class="list-disc list-inside space-y-2">
        <li><strong>Torreón:</strong> Punto de observación y defensa costera.</li>
        <li><strong>Murallas:</strong> Estructura defensiva de gruesos muros de piedra.</li>
        <li><strong>Faro:</strong> Instalado en el siglo XIX y aún operativo, es uno de los pocos <strong>faros integrados en un castillo</strong> en España.</li>
      </ul>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-binoculars text-<?= COLOR_PAGE; ?>-500 mr-2"></i>Actividades y servicios</h2>
      <ul class="list-disc list-inside space-y-2">
        <li>👣 Visitas guiadas diarias</li>
        <li>🖼️ Exposiciones permanentes y temporales</li>
        <li>🌅 Miradores con vistas al mar y al casco antiguo</li>
        <li>🎭 Eventos culturales: conciertos, teatro y recreaciones históricas</li>
      </ul>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
      <figure>
        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/castillo-de-santa-ana-1.jpg" alt="Vista exterior del Castillo de Santa Ana en Castro Urdiales" class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
        <figcaption class="text-sm text-center text-gray-500 mt-2">Fachada del castillo desde el acceso principal</figcaption>
      </figure>
      <figure>
        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/castillo-de-santa-ana-2.png" alt="Faro dentro del Castillo de Santa Ana en Castro Urdiales" class="rounded-lg shadow-sm object-cover w-full h-64" loading="lazy">
        <figcaption class="text-sm text-center text-gray-500 mt-2">Faro del siglo XIX dentro del recinto</figcaption>
      </figure>
    </section>

    <section class="mb-6 text-gray-700">
      <p>Este castillo es una pieza clave del patrimonio de Castro Urdiales. Con su restauración, se ha convertido en un espacio de encuentro entre la historia y la cultura contemporánea.</p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-3"><i class="fas fa-info-circle text-<?= COLOR_PAGE; ?>-500 mr-2"></i>📞 Información de contacto</h2>
      <ul class="space-y-1">
        <li><strong>Teléfono:</strong> <a href="tel:+34942859065" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">+34 942 85 90 65</a></li>
        <li><strong>Web oficial:</strong> <a href="https://www.turismocastrourdiales.net" target="_blank" rel="noopener noreferrer" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">www.turismocastrourdiales.net</a></li>
      </ul>
    </section>

    <section class="mb-8 text-gray-700">
      <p>El <strong>Castillo de Santa Ana</strong> es una visita imprescindible para los amantes de la historia, la arquitectura medieval y los paisajes costeros del norte de España.</p>
    </section>

    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>


    <div class="text-center mt-8">
      <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
    </div>
  </article>
</main>
