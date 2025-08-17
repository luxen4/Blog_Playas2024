<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-rose-600 mb-4">
    ⛪ San Juan de Gaztelugatxe – Bakio:
    <span class="block mt-1 text-base md:text-lg text-rose-500 font-normal">
      Naturaleza, historia y leyenda en la costa vasca
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    <strong class="text-gray-900">San Juan de Gaztelugatxe</strong>, situado en <span class="font-medium">Bakio</span>, Bizkaia, es uno de los enclaves más mágicos del País Vasco: una ermita en lo alto de un islote unido a tierra firme por un puente de piedra y 241 escalones.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Rodeado de acantilados y del Cantábrico, Gaztelugatxe es famoso por su belleza natural, sus leyendas marineras y por haber sido escenario de rodajes internacionales como <em>Juego de Tronos</em>.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-gaztelugatxe" class="mb-8">
    <h2 id="servicios-gaztelugatxe" class="text-xl font-semibold text-rose-700 mb-3">
      Servicios en San Juan de Gaztelugatxe
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Para tu visita encontrarás:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Senderos y miradores señalizados
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Áreas de descanso y merenderos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Centro de interpretación y visitas guiadas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Parking en las inmediaciones
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-gaztelugatxe" class="mb-8">
    <h2 id="actividades-gaztelugatxe" class="text-xl font-semibold text-rose-700 mb-3">
      Actividades en San Juan de Gaztelugatxe
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Entre las experiencias más recomendadas:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Subida a la ermita y toque de campana
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Fotografía de acantilados y panorámicas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Rutas de senderismo en los alrededores
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2 2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Avistamiento de aves marinas
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Una experiencia única que combina naturaleza, cultura y espiritualidad.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/san-juan-gaztelugatxe-bakio-1.jpg"
         alt="Vista panorámica de San Juan de Gaztelugatxe"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/san-juan-gaztelugatxe-bakio-2.jpg"
         alt="Puente de piedra hacia Gaztelugatxe"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/san-juan-gaztelugatxe-bakio-3.jpg"
         alt="Ermita en lo alto del islote de Gaztelugatxe"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/san-juan-gaztelugatxe-bakio-4.jpg"
         alt="Atardecer en San Juan de Gaztelugatxe"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de San Juan de Gaztelugatxe en Bakio</p>

  <p class="mb-4 text-sm text-gray-700">
    Ideal para quienes buscan naturaleza, espiritualidad y rincones únicos en la costa vasca.
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
    <h2 class="text-xl font-semibold text-rose-700 mb-2">📞 Información de contacto</h2>
    <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
      <li>
        <strong>Teléfono oficina de turismo de Bakio:</strong>
        <a href="tel:+34946501060" class="text-rose-500 hover:underline">+34 946 50 10 60</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://turismo.euskadi.eus/es/gaztelugatxe/" target="_blank" rel="noopener noreferrer" class="text-rose-500 hover:underline">
          turismo.euskadi.eus/es/gaztelugatxe/
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
