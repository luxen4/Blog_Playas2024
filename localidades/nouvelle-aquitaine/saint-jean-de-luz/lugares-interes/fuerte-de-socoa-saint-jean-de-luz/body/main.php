<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏰 Fuerte de Socoa en Saint-Jean-de-Luz:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Historia, defensa costera y vistas espectaculares de la bahía
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Fuerte de Socoa</strong>, ubicado en la entrada de la bahía de <span class="font-medium">Saint-Jean-de-Luz</span>, es una fortificación histórica construida para proteger la costa vasca de invasiones y ataques marítimos.
    Con una ubicación estratégica en <span class="font-medium">Nouvelle-Aquitaine</span>, ofrece impresionantes vistas al mar y a la ciudad.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Pasear por sus murallas y alrededores es un viaje al pasado militar y marítimo de la región, combinando patrimonio histórico con la belleza natural del Atlántico.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-fuerte" class="mb-8">
    <h2 id="servicios-fuerte" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios y atractivos del Fuerte de Socoa
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      El entorno del fuerte cuenta con varios servicios y puntos de interés para los visitantes:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M5 12l5 5L20 7"/></svg>
        Acceso a zonas panorámicas con vistas a la bahía y al puerto
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M3 7h18M3 12h18M3 17h18"/></svg>
        Paneles informativos sobre la historia y arquitectura del fuerte
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M12 2v20m9-9H3"/></svg>
        Aparcamiento cercano y zonas de descanso
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        Acceso a la playa de Socoa y su paseo marítimo
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-fuerte" class="mb-8">
    <h2 id="actividades-fuerte" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en el Fuerte de Socoa
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Ideal para quienes buscan historia, paisaje y actividades junto al mar:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Recorrido histórico por sus murallas y torres
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Fotografía panorámica del puerto y la bahía
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Actividades náuticas en la playa cercana
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Disfrutar de restaurantes y terrazas con vistas al mar
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      El Fuerte de Socoa es una combinación perfecta de historia militar y belleza natural, imprescindible en tu visita a Saint-Jean-de-Luz.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/fuerte-de-socoa-1.jpg"
         alt="Vista del Fuerte de Socoa en Saint-Jean-de-Luz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/murallas-fuerte-socoa.jpg"
         alt="Murallas del Fuerte de Socoa con vistas a la bahía"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Fuerte de Socoa</p>

  <p class="mb-4 text-sm text-gray-700">
    Una experiencia que combina patrimonio histórico y la fuerza del paisaje atlántico.
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
