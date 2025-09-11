<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🥾 Ruta Laga – Ogoño:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Sendero costero entre playa y acantilado
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Ruta Laga – Ogoño</strong>, situada en <span class="font-medium">Ibarrangelu</span>, Bizkaia,
    es uno de los recorridos más espectaculares de la <span class="font-medium">Reserva de la Biosfera de Urdaibai</span>.
    Parte desde la <span class="font-medium">Playa de Laga</span> y asciende hasta el <span class="font-medium">Cabo Ogoño</span>,
    ofreciendo vistas impresionantes del mar Cantábrico y del entorno natural protegido.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Es un sendero ideal para los amantes del <strong>senderismo</strong>, la <strong>fotografía</strong> y la
    <strong>naturaleza</strong>, con panorámicas únicas de la costa vasca.
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
      Información sobre la Ruta Laga – Ogoño
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Este itinerario combina playa y montaña, con un recorrido aproximado de <span class="font-medium">5 km</span> ida y vuelta
      y una duración estimada de <span class="font-medium">2 horas</span>.
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🚶‍♂️ Sendero señalizado desde la Playa de Laga</li>
      <li class="flex items-center gap-2">⛰️ Ascenso progresivo hasta el Cabo Ogoño</li>
      <li class="flex items-center gap-2">📍 Miradores naturales con vistas a Urdaibai</li>
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
      <li class="flex items-center gap-2">🥾 Senderismo en un entorno único</li>
      <li class="flex items-center gap-2">📸 Fotografía de paisajes y acantilados</li>
      <li class="flex items-center gap-2">🦅 Observación de aves en Urdaibai</li>
      <li class="flex items-center gap-2">🌅 Atardeceres inolvidables desde el mirador</li>
    </ul>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-laga-ogono-ibarrangelu-bizkaia-1.jpg"
         alt="Sendero desde la Playa de Laga hacia el Cabo Ogoño"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-laga-ogono-ibarrangelu-bizkaia-2.jpg"
         alt="Vistas panorámicas en la ruta Laga – Ogoño"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la ruta senderista Laga – Ogoño en Ibarrangelu (Bizkaia)</p>

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
        <a href="tel:+34946870002" class="text-blue-500 hover:underline">+34 946 87 00 02</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.ibarrangelu.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.ibarrangelu.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
