<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    ⛰️ Cabo Ogoño:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Acantilado y mirador natural sobre Urdaibai
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Cabo Ogoño</strong>, situado en <span class="font-medium">Ibarrangelu</span>, Bizkaia,
    es un imponente acantilado que se eleva más de <span class="font-medium">280 metros</span> sobre el mar Cantábrico.
    Forma parte de la <span class="font-medium">Reserva de la Biosfera de Urdaibai</span> y ofrece
    unas de las vistas panorámicas más espectaculares de la costa vasca, incluyendo la Playa de Laga.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Es un lugar ideal para senderismo, fotografía de naturaleza y contemplación del paisaje marino en un entorno virgen y protegido.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-ogono" class="mb-8">
    <h2 id="servicios-ogono" class="text-xl font-semibold text-blue-700 mb-3">
      Acceso y servicios en el Cabo Ogoño
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Al ser un espacio natural protegido, el Cabo Ogoño no cuenta con servicios propios, pero sí dispone de accesos desde los alrededores:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        ✅ Senderos señalizados desde la Playa de Laga y alrededores
      </li>
      <li class="flex items-center gap-2">
        🚶‍♂️ Rutas de senderismo con diferentes niveles de dificultad
      </li>
      <li class="flex items-center gap-2">
        📍 Miradores naturales con vistas sobre Urdaibai y el mar Cantábrico
      </li>
      <li class="flex items-center gap-2">
        🚗 Aparcamiento cercano en la zona de Laga (no en el propio cabo)
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-ogono" class="mb-8">
    <h2 id="actividades-ogono" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en el Cabo Ogoño
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Un enclave único para los amantes de la naturaleza y el paisaje:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🥾 Senderismo con vistas sobre la Playa de Laga</li>
      <li class="flex items-center gap-2">📸 Fotografía de paisajes y acantilados</li>
      <li class="flex items-center gap-2">🦅 Observación de aves en la Reserva de Urdaibai</li>
      <li class="flex items-center gap-2">🌅 Contemplación de atardeceres únicos</li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un lugar perfecto para desconectar y disfrutar de la costa vasca en su estado más salvaje.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/cabo-ogono-ibarrangelu-bizkaia-1.jpg"
         alt="Vista panorámica del Cabo Ogoño sobre el mar Cantábrico"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/cabo-ogono-ibarrangelu-bizkaia-2.jpg"
         alt="Sendero hacia el Cabo Ogoño en Ibarrangelu"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Cabo Ogoño en Ibarrangelu (Bizkaia)</p>

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
