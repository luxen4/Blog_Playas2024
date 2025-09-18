<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏄 Surf en la Playa de Bakio:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Olas, surf y ambiente costero en Bizkaia
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Bakio</strong> es uno de los epicentros del surf en el País Vasco. Con su arena dorada, oleaje constante y un entorno natural privilegiado, atrae a surfistas de todos los niveles durante todo el año.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Además de surf, la playa ofrece un ambiente joven y deportivo, con escuelas, alquiler de material y competiciones locales e internacionales.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-surf-bakio" class="mb-8">
    <h2 id="servicios-surf-bakio" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios para surfistas en Bakio
    </h2>
    <p class="mb-4 text-sm text-gray-700">En la playa encontrarás:</p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Escuelas de surf para todos los niveles
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Alquiler de tablas y trajes de neopreno
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Duchas y vestuarios públicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Bares y terrazas frente al mar
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-surf-bakio" class="mb-8">
    <h2 id="actividades-surf-bakio" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Bakio
    </h2>

    <p class="mb-4 text-sm text-gray-700">Entre las experiencias recomendadas:</p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Clases de surf individuales y en grupo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Fotografía y vídeos de surf
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Competiciones y eventos deportivos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2 2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Paseos al atardecer junto al mar
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Una experiencia ideal para surfistas, familias y amantes de la playa.
    </p>
  </section>

  <!-- Galería de imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/surf-playa-bakio-1.jpg"
         alt="Surfistas en la Playa de Bakio"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/olas-en-bakio.jpg"
         alt="Olas en Bakio, Bizkaia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy"><?php /* https://www.surfmarket.org/es/olas/europa/euskadi/bakio?srsltid=AfmBOop6SfgaB9R82yHDMREWxZPQbqUbOAHO81IWTKvs8TXlFNzHNQcN */ ?>
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/escuela-surf-bakio.jpg"
         alt="Escuela de surf en Bakio"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy"><?php /* https://kobasurfeskola.com/ */ ?>
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/atardecer-playa-bakio.jpg"
         alt="Atardecer en la playa de Bakio"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de surf en la Playa de Bakio</p>

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
        <strong>Teléfono oficina de turismo de Bakio:</strong>
        <a href="tel:+34946501060" class="text-blue-500 hover:underline">+34 946 50 10 60</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://turismo.euskadi.eus/es/playa-de-bakio/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          turismo.euskadi.eus/es/playa-de-bakio/
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
