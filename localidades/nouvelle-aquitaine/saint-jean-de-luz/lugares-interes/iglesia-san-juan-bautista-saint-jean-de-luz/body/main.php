<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    ⛪ Iglesia de San Juan Bautista de Saint-Jean-de-Luz:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Historia, arte y tradición en el corazón del País Vasco Francés
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Iglesia de San Juan Bautista</strong>, situada en pleno centro de <span class="font-medium">Saint-Jean-de-Luz</span>, es uno de los templos más emblemáticos de la región. Famosa por haber sido escenario del matrimonio real entre Luis XIV y María Teresa de Austria en 1660, combina un imponente estilo arquitectónico con un interior de gran riqueza artística.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Sus galerías de madera, su retablo barroco dorado y su historia centenaria hacen de esta iglesia un lugar imprescindible para comprender la cultura y la espiritualidad del País Vasco francés.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-iglesia" class="mb-8">
    <h2 id="servicios-iglesia" class="text-xl font-semibold text-blue-700 mb-3">
      Qué encontrarás en la Iglesia de San Juan Bautista
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      El templo y su entorno ofrecen una experiencia cultural y espiritual única:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg>
        Retablo barroco del siglo XVII
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M12 3v18m9-9H3"/></svg>
        Galerías de madera típicas de la arquitectura vasca
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        Vitrales y elementos artísticos de gran valor histórico
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M5 12l5 5L20 7"/></svg>
        Acceso gratuito y visitas guiadas en temporada alta
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-iglesia" class="mb-8">
    <h2 id="actividades-iglesia" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades y visitas en la Iglesia
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Un espacio para disfrutar del patrimonio y la historia:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Recorridos por el interior del templo y sus galerías
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Visitas guiadas con contexto histórico y artístico
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Asistencia a eventos religiosos y conciertos de órgano
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      La Iglesia de San Juan Bautista es un testigo vivo de la historia de Saint-Jean-de-Luz y un símbolo del patrimonio vasco.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/iglesia-san-juan-bautista-saint-jean-de-luz-1.jpg"
         alt="Interior de la Iglesia de San Juan Bautista de Saint-Jean-de-Luz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/fachada-iglesia-san-juan-bautista-saint-jean-de-luz.jpg"
         alt="Fachada principal de la Iglesia de San Juan Bautista de Saint-Jean-de-Luz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Iglesia de San Juan Bautista</p>

  <p class="mb-4 text-sm text-gray-700">
    Una joya histórica que conecta el pasado real de Francia con la tradición marinera y cultural del País Vasco.
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
        <strong>Dirección:</strong> Place Louis XIV, 64500 Saint-Jean-de-Luz, Francia
      </li>
      <li>
        <strong>Teléfono:</strong>
        <a href="tel:+33559262488" class="text-blue-500 hover:underline">+33 5 59 26 24 88</a>
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
