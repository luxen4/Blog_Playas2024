<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de La Grande Plage:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      La playa emblemática de Saint-Jean-de-Luz con arena fina y ambiente familiar.
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    <strong>La Grande Plage</strong>, ubicada en Saint-Jean-de-Luz, es un rincón costero de gran valor ecológico y paisajístico. Protegida por dunas y un entorno urbano cuidado, es perfecta para quienes buscan un entorno tranquilo, ideal para relajarse, caminar o practicar deportes acuáticos.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Esta zona, también conocida como <span class="font-medium">la playa central de Saint-Jean</span>, destaca por su amplia extensión y servicios turísticos. Es un enclave singular de la costa vasca francesa, accesible desde el centro del municipio.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-la-grande-plage" class="mb-8">
    <h2 id="servicios-la-grande-plage" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en Playa de La Grande Plage
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Aunque es una playa urbana, La Grande Plage cuenta con acceso a servicios esenciales:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        ✅ Vigilancia y socorrismo en temporada alta
      </li>
      <li class="flex items-center gap-2">
        🚻 Baños públicos y vestuarios
      </li>
      <li class="flex items-center gap-2">
        🅿️ Aparcamiento cercano
      </li>
      <li class="flex items-center gap-2">
        🚶 Fácil acceso desde el paseo marítimo
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-la-grande-plage" class="mb-8">
    <h2 id="actividades-la-grande-plage" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en Playa de La Grande Plage
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Ideal para disfrutar de la costa vasca francesa en un entorno urbano y familiar:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🏄 Surf y paddle surf</li>
      <li class="flex items-center gap-2">🥾 Paseos por el paseo marítimo</li>
      <li class="flex items-center gap-2">📸 Fotografía del paisaje costero</li>
      <li class="flex items-center gap-2">🦆 Observación de aves y naturaleza marina</li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      La Grande Plage es perfecta para familias y amantes de las playas con todos los servicios cerca, manteniendo un ambiente agradable y cuidado.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/la-grande-plage-saint-jean-de-luz-1.jpg"
         alt="Vista panorámica de La Grande Plage en Saint-Jean-de-Luz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/la-grande-plage-2.jpg"
         alt="Paseo marítimo y arena de La Grande Plage"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Fotografías de Playa de La Grande Plage</p>

  <p class="mb-4 text-sm text-gray-700">
    La Grande Plage combina la belleza natural con una ubicación céntrica en Saint-Jean-de-Luz, siendo uno de los lugares favoritos tanto para turistas como para locales.
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
    <h2 class="text-xl font-semibold text-blue-700 mb-2">📍 Información adicional</h2>
    <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
      <li>
        <strong>Municipio:</strong> Saint-Jean-de-Luz (Nouvelle-Aquitaine)
      </li>
      <li>
        <strong>Coordenadas aproximadas:</strong> 43.3870° N, -1.6759° O
      </li>
      <li>
        <strong>Sitio oficial:</strong>
        <a href="https://www.saintjeandeluz.fr" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          https://www.saintjeandeluz.fr
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
