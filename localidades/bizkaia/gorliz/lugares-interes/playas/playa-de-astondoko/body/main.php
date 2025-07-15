<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de Astondoko:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Naturaleza, tranquilidad y mar junto a Gorliz, en la costa de bizkaia
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    <strong class="text-gray-900">Playa de Astondoko</strong>, ubicada en el extremo oriental de la <span class="font-medium">Playa de Gorliz</span> (bizkaia), es un rincón costero de gran valor ecológico y paisajístico. Protegida por dunas naturales y colinas verdes, es perfecta para quienes buscan un entorno tranquilo, ideal para relajarse, caminar o practicar deportes acuáticos.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Esta zona, también conocida como <span class="font-medium">Playa de Astondo</span>, destaca por su ambiente menos urbanizado, senderos naturales y vistas espectaculares hacia el cabo Billano y su faro. Es un enclave singular de la costa vasca, accesible desde el paseo marítimo de Gorliz.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-astondo" class="mb-8">
    <h2 id="servicios-astondo" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en Playa de Astondoko
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Aunque más natural y menos concurrida, Astondo cuenta con acceso a servicios esenciales:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        ✅ Acceso desde el paseo marítimo de Gorliz
      </li>
      <li class="flex items-center gap-2">
        🚻 Proximidad a duchas y aseos públicos
      </li>
      <li class="flex items-center gap-2">
        🅿️ Aparcamiento disponible cerca del hospital de Gorliz
      </li>
      <li class="flex items-center gap-2">
        🚶 Senderos naturales hacia el faro de Gorliz y acantilados
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-astondo" class="mb-8">
    <h2 id="actividades-astondo" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en Playa de Astondoko
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Ideal para disfrutar de la costa vasca en su estado más natural:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🏄 Surf, bodyboard y kayak</li>
      <li class="flex items-center gap-2">🥾 Senderismo y rutas costeras</li>
      <li class="flex items-center gap-2">📸 Fotografía de naturaleza y paisajes</li>
      <li class="flex items-center gap-2">🦆 Observación de aves en las dunas y zonas protegidas</li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Astondo ofrece una alternativa tranquila a la playa principal, ideal para conectar con el entorno natural sin alejarse de los servicios.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/astondo-1.jpg"
         alt="Vista de la playa natural de Astondo, en Gorliz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/astondo-2.jpg"
         alt="Entorno natural y dunas de Playa de Astondoko"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Fotografías de Playa de Astondoko (zona este de la Playa de Gorliz)</p>

  <p class="mb-4 text-sm text-gray-700">
    Explora este rincón especial de la costa de bizkaia, donde el mar y la naturaleza se encuentran en armonía.
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
        <strong>Municipio:</strong> Gorliz (bizkaia)
      </li>
      <li>
        <strong>Coordenadas aproximadas:</strong> 43.4135° N, -2.9401° O
      </li>
      <li>
        <strong>Sitio oficial:</strong>
        <a href="https://www.gorliz.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.gorliz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
