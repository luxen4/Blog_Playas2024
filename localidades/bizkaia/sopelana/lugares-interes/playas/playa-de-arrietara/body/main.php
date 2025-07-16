<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Playa de Arrietara:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Surf, acantilados y ambiente juvenil en Sopelana
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Arrietara</strong>, en <span class="font-medium">Sopelana</span>, Bizkaia, es uno de los arenales más conocidos de Euskadi por su fuerte oleaje, su belleza natural y su ambiente activo y juvenil.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con casi <span class="font-medium">800 metros</span> de longitud y una ubicación privilegiada entre acantilados, es perfecta para practicar <strong>surf</strong>, caminar por la costa y disfrutar de un entorno único a pocos kilómetros de Bilbao.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-arrietara" class="mb-8">
    <h2 id="servicios-arrietara" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Arrietara
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Esta playa cuenta con múltiples servicios de temporada:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...><path d="M5 12l5 5L20 7"/></svg>
        Accesos adaptados y pasarelas de madera
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...><path d="M3 7h18M3 12h18M3 17h18"/></svg>
        Duchas, aseos, socorristas y taquillas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...><path d="M12 2v20m9-9H3"/></svg>
        Zonas de aparcamiento y miradores
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        Bares, chiringuitos y escuelas de surf
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-arrietara" class="mb-8">
    <h2 id="actividades-arrietara" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Arrietara
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Algunas experiencias que puedes disfrutar:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...><path d="M12 2a4 4 0 100 8..." /></svg>
        Surf, bodyboard y campeonatos internacionales
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...><path d="M12 2C6.5 2 2 12..." /></svg>
        Rutas de senderismo por los acantilados de Sopela
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...><path d="M17 9V7H7v2..." /></svg>
        Fotografía paisajística y atardeceres espectaculares
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...><path d="M9 12h6..." /></svg>
        Ambiente joven, yoga y encuentros culturales
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Es una playa ideal tanto para la aventura como para relajarse con vistas al Cantábrico.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-arrietara-sopelana-bizkaia-1.jpg"
         alt="Vista aérea de la Playa de Arrietara en Sopelana"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-arrietara-sopelana-bizkaia-2.jpg"
         alt="Surfistas disfrutando en Arrietara"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Arrietara, Sopelana – Bizkaia</p>

  <p class="mb-4 text-sm text-gray-700">
    Una playa vibrante, natural y con todos los ingredientes para una escapada perfecta en la costa vizcaína.
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
        <a href="tel:+34946076000" class="text-blue-500 hover:underline">+34 946 076 000</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.sopela.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.sopela.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
