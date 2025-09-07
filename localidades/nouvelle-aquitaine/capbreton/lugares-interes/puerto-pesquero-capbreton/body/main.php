<main>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    ⚓ Puerto Pesquero – Capbreton:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Tradición marinera y gastronomía junto al Atlántico
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Puerto Pesquero</strong>, ubicado en <span class="font-medium">Capbreton</span>, Francia, es un enclave pintoresco donde se combina la actividad pesquera tradicional con restaurantes y paseos frente al mar.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Barcos coloridos, redes y el ambiente marinero hacen de este puerto un lugar ideal para descubrir la cultura local y disfrutar de productos frescos del Atlántico.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-puerto-pesquero" class="mb-8">
    <h2 id="servicios-puerto-pesquero" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en el Puerto Pesquero
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Para tu comodidad y disfrute, el puerto ofrece:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso peatonal y muelles
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Restaurantes y marisquerías
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento cercano
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Paseos junto al mar
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-puerto-pesquero" class="mb-8">
    <h2 id="actividades-puerto-pesquero" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en el Puerto Pesquero
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Entre las actividades destacadas:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Observación de barcos y redes
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Fotografía del ambiente marinero
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Degustación de pescado fresco
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Paseos y atardeceres frente al mar
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Ideal para quienes quieren combinar cultura pesquera y ocio costero.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-pesquero-de-capbreton-nouvelle-aquitaine-1.png"
         alt="Barcos en el Puerto Pesquero de Capbreton"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/muelle-redes-pesca-puerto-pesquero-capbreton-nouvelle-aquitaine.jpg"
         alt="Muelle y redes de pesca en el Puerto Pesquero"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-pesquero-capbreton-nouvelle-aquitaine-3.png"
         alt="Restaurantes y paseo marítimo en el Puerto Pesquero"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy"><?php /* https://www.izibikes.com/es/capbreton-es/guia-experta-2025-restaurantes-en-capbreton-que-encantan-a-los-locales/  */ ?>
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/atardecer-puerto-pesquero-capbreton.jpg"
         alt="Atardecer sobre el Puerto Pesquero de Capbreton"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Puerto Pesquero en Capbreton</p>

  <p class="mb-4 text-sm text-gray-700">
    Perfecto para turistas que buscan gastronomía, cultura marítima y vistas al Atlántico.
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
        <strong>Teléfono oficina de turismo:</strong>
        <a href="tel:+33558410575" class="text-blue-500 hover:underline">+33 5 58 41 05 75</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.capbreton.fr/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          capbreton.fr
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
