<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de Antuerta:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Naturaleza salvaje y surf en Ajo, Cantabria
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Antuerta</strong>, situada en <span class="font-medium">Ajo</span>, Cantabria, es una playa de gran belleza natural, rodeada de acantilados y praderas verdes, muy apreciada por surfistas y amantes de la naturaleza.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una <span class="font-medium">longitud de unos 200 metros</span> y arena dorada fina, Antuerta ofrece un entorno más salvaje y tranquilo, ideal para quienes buscan playas menos concurridas.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>
  <?php //$publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_camisas_hawaianas_man.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-antuerta" class="mb-8">
    <h2 id="servicios-antuerta" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Antuerta
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Aunque es una playa de carácter virgen, dispone de:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso a pie por senderos naturales
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Entorno sin urbanización cercana
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento en zonas altas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Vistas panorámicas del Cantábrico
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-antuerta" class="mb-8">
    <h2 id="actividades-antuerta" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Antuerta
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Es un lugar perfecto para actividades al aire libre como:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Surf y deportes acuáticos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Senderismo por la costa
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía de paisajes y naturaleza
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación de aves y fauna marina
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Antuerta es una playa para quienes buscan una experiencia natural y auténtica en la costa cántabra.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-antuerta-ajo-cantabria-1.jpg"
         alt="Vista panorámica de la Playa de Antuerta"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-antuerta-ajo-cantabria-2.jpg"
         alt="Zona de olas en Playa de Antuerta"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Antuerta en Ajo, Cantabria</p>

  <p class="mb-4 text-sm text-gray-700">
    Una playa perfecta para amantes del surf, senderistas y quienes buscan desconexión total en la naturaleza.
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
        <a href="tel:+34942854001" class="text-blue-500 hover:underline">+34 942 85 40 01</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.bareyo.com/turismo" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.bareyo.com/turismo
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
