<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Playa de Bakio:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Surf, naturaleza y tradición en la costa vasca
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Bakio</strong>, en el municipio de <span class="font-medium">Bakio</span>, Bizkaia, es una de las playas más emblemáticas del litoral vasco. Destaca por su gran tamaño, oleaje potente y entorno natural espectacular.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una longitud de <span class="font-medium">1 km</span> y una anchura media de <span class="font-medium">100 metros</span>, es muy frecuentada por surfistas, familias y excursionistas que visitan también el cercano San Juan de Gaztelugatxe.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-bakio" class="mb-8">
    <h2 id="servicios-bakio" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Bakio
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      La playa cuenta con múltiples servicios que la hacen cómoda para pasar el día:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...> <path d="M5 12l5 5L20 7"/></svg>
        Accesos adaptados para personas con movilidad reducida
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...> <path d="M3 7h18M3 12h18M3 17h18"/></svg>
        Duchas, aseos, socorristas y papeleras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...> <path d="M12 2v20m9-9H3"/></svg>
        Aparcamientos y zonas de picnic cercanas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...> <path d="M4 6h16M4 12h16M4 18h16"/></svg>
        Chiringuitos y bares abiertos en verano
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-bakio" class="mb-8">
    <h2 id="actividades-bakio" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Bakio
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Perfecta para una jornada activa o de relax, Bakio ofrece:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...> <path d="M12 2a4 4 0 100 8..." /></svg>
        Surf y cursos de iniciación durante todo el año
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...> <path d="M12 2C6.5 2 2 12..." /></svg>
        Senderismo hacia San Juan de Gaztelugatxe
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...> <path d="M17 9V7H7v2..." /></svg>
        Bronceado y fotografía del paisaje vasco
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...> <path d="M9 12h6..." /></svg>
        Observación de aves marinas y naturaleza
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Ideal como destino veraniego o parada en ruta por la costa vasca.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-bakio-bizkaia-1.jpg"
         alt="Vista panorámica de la Playa de Bakio"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-bakio-2.jpg"
         alt="Surfistas en la Playa de Bakio"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Bakio en Bizkaia</p>

  <p class="mb-4 text-sm text-gray-700">
    Disfruta de la fuerza del Cantábrico en una playa amplia, bien equipada y rodeada de paisaje tradicional vasco.
  </p>

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
        <strong>Teléfono:</strong>
        <a href="tel:+34946019120" class="text-blue-500 hover:underline">+34 946 019 120</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.bakio.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.bakio.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
