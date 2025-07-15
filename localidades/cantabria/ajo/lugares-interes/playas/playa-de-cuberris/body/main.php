<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Playa de Cuberris:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Naturaleza salvaje y olas en Ajo
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Cuberris</strong>, situada en <span class="font-medium">Ajo</span>, Cantabria, es una playa abierta al mar Cantábrico, caracterizada por su fuerte oleaje, entorno natural y excelentes condiciones para el surf.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una longitud de <span class="font-medium">300 metros</span> y una anchura de hasta <span class="font-medium">50 metros</span>, Cuberris es muy frecuentada por surfistas, familias y amantes de la costa cántabra.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-cuberris" class="mb-8">
    <h2 id="servicios-cuberris" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Cuberris
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Cuberris cuenta con buenos servicios y accesos, ideal para disfrutar en familia:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso cómodo para peatones y vehículos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Duchas, aseos y papeleras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento amplio en las inmediaciones
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Chiringuito en temporada de verano
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-cuberris" class="mb-8">
    <h2 id="actividades-cuberris" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Cuberris
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      La playa ofrece un entorno ideal tanto para deportes acuáticos como para la relajación:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Surf para todos los niveles
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Paseos por los acantilados cercanos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Toma de sol y fotografía natural
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación de aves y flora costera
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Si buscas naturaleza, tranquilidad y un mar potente, Cuberris es una parada obligada en tu visita a Cantabria.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-cuberris-ajo-cantabria-1.jpg"
         alt="Playa de Cuberris desde el mirador de Ajo"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-cuberris-ajo-cantabria-2.jpg"
         alt="Oleaje en la Playa de Cuberris, ideal para surf"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Cuberris en Ajo (Cantabria)</p>

  <p class="mb-4 text-sm text-gray-700">
    Vive una experiencia costera auténtica en una de las playas con más carácter del norte de España.
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
        <a href="tel:+34942620001" class="text-blue-500 hover:underline">+34 942 62 00 01</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.bareyo.org" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.bareyo.org
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
