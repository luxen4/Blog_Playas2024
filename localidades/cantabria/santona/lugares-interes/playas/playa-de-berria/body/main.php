<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Playa de Berria:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      El arenal más extenso de Cantabria
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Berria</strong>, ubicada en <span class="font-medium">Santona</span>, Cantabria, es un arenal de más de 2 km de longitud junto a las marismas del río Asón. Su entorno natural protegido y suave oleaje la hacen ideal tanto para familias como para surfistas.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una anchura media de <span class="font-medium">80 metros</span>, Berria ofrece amplias zonas para tomar el sol, nadar en aguas tranquilas y practicar deportes náuticos como surf y paddle surf.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>



  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-berria" class="mb-8">
    <h2 id="servicios-berria" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Berria
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Entre sus servicios encontrarás:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Vigilancia y socorrismo en temporada
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Amplio aparcamiento gratuito
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Duchas y baños públicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Chiringuitos y alquiler de sombrillas
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-berria" class="mb-8">
    <h2 id="actividades-berria" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Berria
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Berria es punto de encuentro para:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Surf y paddle surf
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2zm0 17a7 7 0 110-14 7 7 0 010 14z"/>
        </svg>
        Paseos en kayak por la bahía
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 3v18m9-9H3"/>
        </svg>
        Senderismo por el entorno de marismas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14l4-4z"/>
        </svg>
        Fotografía de aves y paisaje costero
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Además, la proximidad al Parque Natural de las Marismas ofrece un valor añadido para la observación de aves y rutas interpretativas.
    </p>
  </section>

<p class="mb-4 text-sm text-gray-700">
  Además, la proximidad al Parque Natural de las Marismas ofrece un valor añadido para la observación de aves y rutas interpretativas.
</p>

<p class="mb-6 text-sm text-blue-600">
  Consulta más actividades, clases de surf y excursiones en:
  <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES . '/playas/playa-de-berria/actividades-playa-de-berria.php'?>" target="_blank" rel="noopener noreferrer" class="font-medium underline hover:text-blue-800">
    berriaactivities.com
  </a>
</p>


  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-berria-santona-cantabria-1.jpg"
         alt="Vista panorámica de la Playa de Berria junto a las marismas"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/vista-panoramica-playa-berria-cantabria.jpg"
         alt="Surfista en la Playa de Berria en Cantabria"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Berria en Santona</p>

  <p class="mb-4 text-sm text-gray-700">
    No pierdas la oportunidad de disfrutar de uno de los arenales más famosos de Cantabria, con servicios completos y un entorno natural incomparable.
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
        <a href="tel:+34942859065" class="text-blue-500 hover:underline">+34 942 85 90 65</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.turismosantona.net" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.turismosantona.net
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
