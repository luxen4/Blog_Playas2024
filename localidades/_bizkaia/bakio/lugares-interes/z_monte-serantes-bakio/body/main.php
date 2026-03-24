<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-green-600 mb-4">
    ⛰ Monte Serantes – Bakio:
    <span class="block mt-1 text-base md:text-lg text-green-500 font-normal">
      Naturaleza, senderismo y vistas panorámicas en la costa vasca
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Monte Serantes</strong>, situado en <span class="font-medium">Bakio</span>, Bizkaia, es un lugar privilegiado para el senderismo y la naturaleza. 
    Con rutas bien señalizadas y vistas espectaculares sobre el Cantábrico y los montes vascos, es una excursión ideal para disfrutar en familia o con amigos.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Desde sus cimas se divisan panorámicas únicas de la costa de Bizkaia y del entorno natural que rodea Bakio, uniendo mar y montaña en un mismo paisaje.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-serantes" class="mb-8">
    <h2 id="servicios-serantes" class="text-xl font-semibold text-green-700 mb-3">
      Servicios en el Monte Serantes
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Durante tu visita podrás encontrar:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Rutas de senderismo señalizadas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Zonas de descanso y áreas naturales
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Miradores panorámicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Aparcamiento en las inmediaciones
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-serantes" class="mb-8">
    <h2 id="actividades-serantes" class="text-xl font-semibold text-green-700 mb-3">
      Actividades en el Monte Serantes
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Algunas experiencias recomendadas:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Excursiones de senderismo de diferentes niveles
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Observación de fauna y flora autóctona
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía de paisajes costeros y montañosos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2 2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Picnic en plena naturaleza
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Una ruta perfecta para conectar con la naturaleza y disfrutar de la tranquilidad del entorno vasco.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/monte-serantes-bakio-bizkaia-1.jpg"
         alt="Vista panorámica del Monte Serantes en Bakio"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/sendero-monte-serantes-bakio.jpg"
         alt="Sendero hacia la cima del Monte Serantes"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/vistas-desde-monte-serantes.jpg"
         alt="Vistas desde la cima del Monte Serantes"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/atardecer-monte-serantes.jpg"
         alt="Atardecer en el Monte Serantes"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Monte Serantes en Bakio</p>

  <p class="mb-4 text-sm text-gray-700">
    Un lugar ideal para los amantes del senderismo, la naturaleza y las vistas únicas de la costa de Bizkaia.
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
    <h2 class="text-xl font-semibold text-green-700 mb-2">📞 Información de contacto</h2>
    <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
      <li>
        <strong>Teléfono oficina de turismo de Bakio:</strong>
        <a href="tel:+34946501060" class="text-green-500 hover:underline">+34 946 50 10 60</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://turismo.euskadi.eus/es/" target="_blank" rel="noopener noreferrer" class="text-green-500 hover:underline">
          turismo.euskadi.eus
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
