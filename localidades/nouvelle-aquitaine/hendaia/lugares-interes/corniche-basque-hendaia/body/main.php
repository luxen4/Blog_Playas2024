<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Corniche Basque – Hendaya:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Paseos panorámicos, naturaleza y vistas espectaculares del litoral atlántico
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Corniche Basque</strong>, situada en <span class="font-medium">Hendaya</span>, Francia, es un paseo costero emblemático que ofrece impresionantes vistas del océano Atlántico y del País Vasco francés.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Ideal para caminar, correr o recorrer en bicicleta, la Corniche combina naturaleza, paisajes y espacios de descanso, siendo perfecta para disfrutar de la costa de manera relajada.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-corniche" class="mb-8">
    <h2 id="servicios-corniche" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Corniche Basque
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Para tu comodidad, el paseo cuenta con:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...></svg>
        Senderos señalizados para caminar y correr
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...></svg>
        Áreas de descanso y miradores panorámicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...></svg>
        Acceso a rutas en bicicleta
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...></svg>
        Espacios naturales protegidos y vegetación autóctona
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-corniche" class="mb-8">
    <h2 id="actividades-corniche" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Corniche Basque
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Entre las actividades destacadas:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...></svg>
        Paseos a pie con vistas al océano
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...></svg>
        Recorridos en bicicleta a lo largo del litoral
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...></svg>
        Observación de flora y fauna costera
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...></svg>
        Fotografía de paisajes y acantilados
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un destino perfecto para amantes de la naturaleza, la fotografía y el aire libre.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/corniche-basque-hendaia-nouvelle-aquitaine-1.jpg"
         alt="Vista panorámica de la Corniche Basque en Hendaya"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/corniche-basque-hendaya-2.jpg"
         alt="Sendero peatonal de la Corniche Basque con vistas al mar"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/corniche-basque-hendaya-3.jpg"
         alt="Zona natural y miradores de la Corniche Basque"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/corniche-basque-hendaya-4.jpg"
         alt="Atardecer sobre el litoral desde la Corniche Basque"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Corniche Basque en Hendaya</p>

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
        <strong>Oficina de turismo:</strong>
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
