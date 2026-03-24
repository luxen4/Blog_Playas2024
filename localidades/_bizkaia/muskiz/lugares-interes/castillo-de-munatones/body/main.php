<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-green-600 mb-4">
    🏰 Castillo de Muñatones – Muskiz:
    <span class="block mt-1 text-base md:text-lg text-green-500 font-normal">
      Historia medieval y patrimonio cultural en Bizkaia
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Castillo de Muñatones</strong>, situado en <span class="font-medium">Muskiz</span>, Bizkaia, 
    es una de las fortalezas medievales mejor conservadas de Euskadi. Declarado <em>Bien de Interés Cultural</em>, 
    data del siglo XIV y fue residencia de la poderosa familia Salazar.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Este castillo defensivo, con su torre y murallas, es un testimonio único de la historia medieval vasca y un punto de interés cultural imprescindible para los amantes del patrimonio.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-munatones" class="mb-8">
    <h2 id="servicios-munatones" class="text-xl font-semibold text-green-700 mb-3">
      Servicios en el Castillo de Muñatones
    </h2>
    <p class="mb-4 text-sm text-gray-700">Durante tu visita podrás disfrutar de:</p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Visitas guiadas (previa reserva)
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Paneles informativos sobre la historia del castillo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Acceso al recinto amurallado
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Zona de aparcamiento cercano
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-munatones" class="mb-8">
    <h2 id="actividades-munatones" class="text-xl font-semibold text-green-700 mb-3">
      Actividades en el Castillo de Muñatones
    </h2>

    <p class="mb-4 text-sm text-gray-700">Algunas experiencias recomendadas:</p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Recorridos guiados por el interior del castillo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Conocer la historia de la familia Salazar y el Bizkaia medieval
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Talleres y actividades culturales
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2 2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Fotografía arquitectónica y paisajística
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Una visita imprescindible para conocer el patrimonio histórico de Bizkaia.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/castillo-de-munatones-muskiz-bizkaia-1.jpg"
         alt="Vista del Castillo de Muñatones en Muskiz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/murallas-castillo-munatones.png"
         alt="Murallas del Castillo de Muñatones"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/torre-del-castillo-munatones.jpg"
         alt="Torre principal del Castillo de Muñatones"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/interior-castillo-munatones.jpg"
         alt="Interior del Castillo de Muñatones"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Castillo de Muñatones en Muskiz</p>

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
        <strong>Teléfono oficina de turismo de Muskiz:</strong>
        <a href="tel:+34946070605" class="text-green-500 hover:underline">+34 946 07 06 05</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://turismo.euskadi.eus/es/monumentos/torre-de-munatones/" target="_blank" rel="noopener noreferrer" class="text-green-500 hover:underline">
          turismo.euskadi.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
