<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🥾 Ruta Muskiz – Punta Lucero:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Sendero costero con vistas al Cantábrico
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Ruta Muskiz – Punta Lucero</strong>, situada en <span class="font-medium">Muskiz</span>, Bizkaia,
    ofrece un recorrido espectacular a lo largo de la costa vasca. Parte desde <span class="font-medium">Muskiz</span> y llega hasta <span class="font-medium">Punta Lucero</span>,
    con acantilados, miradores naturales y panorámicas únicas del mar Cantábrico.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Ideal para los amantes del <strong>senderismo</strong>, la <strong>fotografía</strong> y la <strong>naturaleza</strong>.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="informacion-ruta" class="mb-8">
    <h2 id="informacion-ruta" class="text-xl font-semibold text-blue-700 mb-3">
      Información sobre la Ruta Muskiz – Punta Lucero
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Recorrido aproximado de <span class="font-medium">6 km</span> ida y vuelta con una duración estimada de <span class="font-medium">2-3 horas</span>.
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🚶‍♂️ Sendero señalizado desde Muskiz</li>
      <li class="flex items-center gap-2">⛰️ Ascenso ligero hasta Punta Lucero</li>
      <li class="flex items-center gap-2">📍 Miradores con vistas al Cantábrico</li>
      <li class="flex items-center gap-2">🌿 Recorrido por entorno natural protegido</li>
    </ul>
  </section>

  <section aria-labelledby="actividades-ruta" class="mb-8">
    <h2 id="actividades-ruta" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Ruta
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Una experiencia completa en plena naturaleza:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🥾 Senderismo en un entorno costero único</li>
      <li class="flex items-center gap-2">📸 Fotografía de paisajes y acantilados</li>
      <li class="flex items-center gap-2">🦅 Observación de aves marinas</li>
      <li class="flex items-center gap-2">🌅 Atardeceres desde los miradores naturales</li>
    </ul>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-muskiz-playa-lucero.jpg"
         alt="Sendero desde Muskiz hacia Punta Lucero"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-senderista-muskiz-playa-lucero-2.jpg"
         alt="Vistas panorámicas en la ruta Muskiz – Punta Lucero"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la ruta senderista Muskiz – Punta Lucero en Bizkaia</p>

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
        <strong>Teléfono Ayuntamiento:</strong>
        <a href="tel:+34944400000" class="text-blue-500 hover:underline">+34 944 40 00 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.muskiz.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.muskiz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
