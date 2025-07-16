<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Playa de Laga:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Arena dorada y surf frente a Urdaibai
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Laga</strong>, ubicada en <span class="font-medium">Ibarrangelu</span>, Bizkaia, es una de las joyas naturales del litoral vasco. Se extiende al pie del Cabo Ogoño, dentro de la Reserva de la Biosfera de Urdaibai, y es famosa por sus aguas limpias, paisaje virgen y olas perfectas para surfistas.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una longitud de <span class="font-medium">574 metros</span> y una anchura media de <span class="font-medium">120 metros</span>, Laga ofrece espacio y belleza en un entorno protegido.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-laga" class="mb-8">
    <h2 id="servicios-laga" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Laga
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      La playa cuenta con varios servicios que la hacen accesible y cómoda:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso peatonal y aparcamiento cercano
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Servicios higiénicos: duchas, aseos y papeleras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento en temporada estival
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Zona de restauración y socorrismo en verano
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-laga" class="mb-8">
    <h2 id="actividades-laga" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Laga
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Una playa versátil tanto para amantes del deporte como de la naturaleza:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Surf con olas consistentes y escuelas locales
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Senderismo en el entorno de Cabo Ogoño
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Toma de sol, relax y fotografía
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación de aves en la Reserva de Urdaibai
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Laga es perfecta para quienes buscan desconectar y vivir la naturaleza en estado puro.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-laga-ibarrangelu-bizkaia-1.jpg"
         alt="Vista general de la Playa de Laga y el Cabo Ogoño"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-laga-ibarrangelu-bizkaia-2.jpg"
         alt="Surfistas en la Playa de Laga, entorno natural"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Laga en Ibarrangelu (Bizkaia)</p>

  <p class="mb-4 text-sm text-gray-700">
    Una de las playas más impresionantes del País Vasco, ideal para combinar aventura y tranquilidad.
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
        <a href="tel:+34946870002" class="text-blue-500 hover:underline">+34 946 87 00 02</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.ibarrangelu.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.ibarrangelu.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
