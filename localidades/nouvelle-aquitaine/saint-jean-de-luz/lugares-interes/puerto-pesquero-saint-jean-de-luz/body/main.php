<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    ⚓ Puerto Pesquero de Saint-Jean-de-Luz:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Tradición marinera y encanto vasco junto al Atlántico
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Puerto Pesquero de Saint-Jean-de-Luz</strong>, situado en el corazón de esta localidad de la <span class="font-medium">Nouvelle Aquitaine</span>, es uno de los puertos más pintorescos del País Vasco francés, con barcos de colores, tradición marinera centenaria y una fuerte conexión con la gastronomía local.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Pasear por sus muelles es sumergirse en la historia de una ciudad ligada al mar, donde todavía se pueden ver faenas de pesca y degustar pescado fresco en los restaurantes y tabernas del puerto.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-puerto" class="mb-8">
    <h2 id="servicios-puerto" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios y atractivos del Puerto Pesquero
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      El puerto y su entorno ofrecen múltiples servicios y comodidades para el visitante:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M5 12l5 5L20 7"/></svg>
        Restaurantes especializados en pescado y marisco fresco
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M3 7h18M3 12h18M3 17h18"/></svg>
        Tiendas de recuerdos y productos locales
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M12 2v20m9-9H3"/></svg>
        Aparcamiento cercano y accesible
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        Paseo marítimo con vistas a la bahía y al Atlántico
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-puerto" class="mb-8">
    <h2 id="actividades-puerto" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en el Puerto Pesquero
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Un lugar perfecto para disfrutar de la cultura marinera y el paisaje costero:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Observación de barcos pesqueros y sus maniobras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Paseos fotográficos por el casco antiguo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Compra de pescado fresco en lonja (en días de actividad)
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Disfrutar de la gastronomía local en terrazas frente al mar
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      La mezcla de tradición, actividad pesquera y belleza paisajística hace de este puerto un lugar imprescindible en tu visita a Saint-Jean-de-Luz.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-pesquero-saint-jean-de-luz-1.jpg"
         alt="Barcos en el Puerto Pesquero de Saint-Jean-de-Luz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/vista-puerto-saint-jean-de-luz.jpg"
         alt="Vista panorámica del Puerto Pesquero de Saint-Jean-de-Luz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Puerto Pesquero de Saint-Jean-de-Luz</p>

  <p class="mb-4 text-sm text-gray-700">
    Un enclave perfecto para combinar historia, mar y gastronomía en el corazón del País Vasco francés.
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
        <a href="tel:+33559269000" class="text-blue-500 hover:underline">+33 5 59 26 90 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.saintjeandeluz.fr" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.saintjeandeluz.fr
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
