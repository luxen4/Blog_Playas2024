<main class="bg-green-50 min-h-screen p-4 md:p-8">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-green-600 mb-4">
    🚶‍♂️ Paseo Itsaslur:
    <span class="block mt-1 text-base md:text-lg text-green-500 font-normal">
      Paseo costero con vistas al Cantábrico
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Paseo Itsaslur</strong>, situado en <span class="font-medium">Muskiz</span>, Bizkaia,
    ofrece un recorrido costero accesible, ideal para caminar, observar aves y disfrutar de panorámicas del mar Cantábrico.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Perfecto para familias, amantes del <strong>senderismo ligero</strong> y la <strong>fotografía de paisajes marinos</strong>.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="informacion-paseo" class="mb-8">
    <h2 id="informacion-paseo" class="text-xl font-semibold text-green-700 mb-3">
      Información sobre el Paseo Itsaslur
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Recorrido aproximado de <span class="font-medium">2 km</span> ida y vuelta, con duración estimada de <span class="font-medium">30-45 minutos</span> disfrutando de los principales miradores y áreas de descanso.
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🌊 Sendero costero señalizado</li>
      <li class="flex items-center gap-2">🦅 Observación de aves marinas</li>
      <li class="flex items-center gap-2">📍 Miradores con vistas al Cantábrico</li>
      <li class="flex items-center gap-2">🌿 Entorno natural protegido</li>
    </ul>
  </section>

  <section aria-labelledby="actividades-paseo" class="mb-8">
    <h2 id="actividades-paseo" class="text-xl font-semibold text-green-700 mb-3">
      Actividades en el Paseo
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Ideal para disfrutar de un paseo relajado con actividades al aire libre:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🥾 Caminatas ligeras por el sendero</li>
      <li class="flex items-center gap-2">📸 Fotografía de paisajes y aves</li>
      <li class="flex items-center gap-2">🦅 Observación de fauna costera</li>
      <li class="flex items-center gap-2">🌅 Atardeceres desde miradores naturales</li>
    </ul>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/paseo-itsaslur-muskiz-1.jpg"
         alt="Sendero y vistas del Paseo Itsaslur"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/paseo-itsaslur-muskiz-2.jpg"
         alt="Vistas panorámicas del Cantábrico desde el Paseo Itsaslur"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Paseo Itsaslur en Muskiz, Bizkaia</p>

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
        <strong>Teléfono Ayuntamiento:</strong>
        <a href="tel:+34944400000" class="text-green-500 hover:underline">+34 944 40 00 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.muskiz.eus" target="_blank" rel="noopener noreferrer" class="text-green-500 hover:underline">
          www.muskiz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
