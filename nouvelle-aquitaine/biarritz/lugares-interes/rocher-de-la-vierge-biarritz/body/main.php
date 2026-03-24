<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖 Rocher de la Vierge en Biarritz:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Icono costero y mirador panorámico del océano Atlántico
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Rocher de la Vierge</strong> es un emblemático islote rocoso conectado al continente por una pasarela, ofreciendo unas vistas impresionantes del océano y de la ciudad de <span class="font-medium">Biarritz</span>.
    Ubicado en <span class="font-medium">Nouvelle-Aquitaine</span>, este lugar combina historia, arquitectura y paisaje costero.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Pasear por sus alrededores permite disfrutar de la belleza natural de la costa vasco-francesa y de un icónico símbolo de Biarritz.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-rocher" class="mb-8">
    <h2 id="servicios-rocher" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios y atractivos del Rocher de la Vierge
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      El entorno cuenta con servicios y puntos de interés para visitantes:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M5 12l5 5L20 7"/></svg>
        Pasarela de acceso al islote y miradores panorámicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M3 7h18M3 12h18M3 17h18"/></svg>
        Información histórica sobre la construcción y el lugar
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M12 2v20m9-9H3"/></svg>
        Zonas de descanso y acceso a la costa cercana
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        Caminos y paseos junto a la Grande Plage
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-rocher" class="mb-8">
    <h2 id="actividades-rocher" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en el Rocher de la Vierge
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Ideal para quienes buscan paisaje, historia y fotografía costera:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Paseo por la pasarela y el islote
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Fotografía panorámica de Biarritz y el Atlántico
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Paseos por las playas cercanas: Grande Plage y Miramar
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Restaurantes y cafeterías con vistas al mar
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Una visita al Rocher de la Vierge permite combinar historia local, arquitectura y paisajes costeros únicos.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/rocher-de-la-vierge-biarritz-nouvelle-aquitaine-2.jpg"
         alt="Vista del Rocher de la Vierge en Biarritz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/rocher-de-la-vierge-biarritz-nouvelle-aquitaine-.jpg"
         alt="Pasarela que une el Rocher de la Vierge con la costa"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Rocher de la Vierge</p>

  <p class="mb-4 text-sm text-gray-700">
    Una experiencia que combina patrimonio, naturaleza y vistas panorámicas del Atlántico.
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
        <a href="tel:+33559214000" class="text-blue-500 hover:underline">+33 5 59 21 40 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.biarritz.fr" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.biarritz.fr
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
