<main>
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏰 Castillo de Abbadia – Hendaya:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Historia, arquitectura y vistas panorámicas en la costa vasco-francesa
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Castillo de Abbadia</strong>, situado en <span class="font-medium">Hendaya</span>, Francia, es una joya arquitectónica de estilo neogótico, con una rica historia y espectaculares vistas sobre el mar Cantábrico.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Rodeado de naturaleza y con jardines cuidados, el castillo ofrece un recorrido cultural fascinante y espacios ideales para paseos y fotografía.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-abbadia" class="mb-8">
    <h2 id="servicios-abbadia" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en el Castillo de Abbadia
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Para tu comodidad, el castillo cuenta con:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...></svg>
        Visitas guiadas y audioguías
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...></svg>
        Jardines y senderos accesibles
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...></svg>
        Aparcamiento cercano
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...></svg>
        Cafetería y tienda de souvenirs
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-abbadia" class="mb-8">
    <h2 id="actividades-abbadia" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en el Castillo de Abbadia
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Entre las actividades destacadas:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...></svg>
        Recorridos culturales y visitas guiadas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...></svg>
        Fotografía de la arquitectura y jardines
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...></svg>
        Paseos por los acantilados y vistas panorámicas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...></svg>
        Actividades educativas para niños
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un destino ideal para amantes de la historia, la arquitectura y la naturaleza.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/castillo-abbadia-hendaya-nouvelle-aquitaine-1.jpg"
         alt="Vista frontal del Castillo de Abbadia en Hendaya"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/castillo-abbadia-hendaya-2.jpg"
         alt="Detalle de la arquitectura neogótica del Castillo de Abbadia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/castillo-abbadia-hendaya-3.jpg"
         alt="Jardines y entorno natural del Castillo de Abbadia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/castillo-abbadia-hendaya-4.jpg"
         alt="Vistas panorámicas desde el Castillo de Abbadia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Castillo de Abbadia en Hendaya</p>

  <div class="block lg:hidden">
    <iframe
      src="<?= PATH_HREF_RAIZ_BLOQUES . '/anuncios_derecha2.php' ?>"
      width="100%"
      height="640px"
      scrolling="no"
      style="border:1px solid #ccc; overflow:hidden;"
      title="Publicidad"
      frameborder="0"
      allowfullscreen>
    </iframe>
  </div>

  <section class="mb-6 text-gray-700">
    <h2 class="text-xl font-semibold text-blue-700 mb-2">📞 Información de contacto</h2>
    <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
      <li>
        <strong>Teléfono oficina de turismo:</strong>
        <a href="tel:+33559550000" class="text-blue-500 hover:underline">+33 5 59 55 00 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.tourisme-hendaye.fr/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          tourisme-hendaye.fr
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
