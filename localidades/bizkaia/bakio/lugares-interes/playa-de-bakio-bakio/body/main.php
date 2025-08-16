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
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
        Accesos adaptados para personas con movilidad reducida
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
        Duchas, aseos, socorristas y papeleras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a4 4 0 00-8 0v2m-2 0h12v10H7V9z" /></svg>
        Aparcamientos y zonas de picnic cercanas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-5H3v5a2 2 0 002 2z" /></svg>
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
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.997 2.237l-.58 5.22a2 2 0 01-1.994 1.763H5.813a2 2 0 01-1.993-1.763l-.58-5.22A2 2 0 014.237 10H9m5 0V7a3 3 0 10-6 0v3m6 0H9" /></svg>
        Surf y cursos de iniciación durante todo el año
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m0 0H6m6 0h6" /></svg>
        Senderismo hacia San Juan de Gaztelugatxe
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12a9 9 0 0118 0 9 9 0 01-18 0zm9 3a3 3 0 100-6 3 3 0 000 6z" /></svg>
        Bronceado y fotografía del paisaje vasco
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7l6 6-6 6M9 5h6a2 2 0 012 2v10a2 2 0 01-2 2H9m-6-6h6" /></svg>
        Observación de aves marinas y naturaleza
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Ideal como destino veraniego o parada en ruta por la costa vasca.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG ?>/playa-de-bakio-bakio-bizkaia-1.png"
         alt="Vista panorámica de la Playa de Bakio"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG ?>/surfistas-playa-de-Bakio-Bizkaio.jfif"
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
