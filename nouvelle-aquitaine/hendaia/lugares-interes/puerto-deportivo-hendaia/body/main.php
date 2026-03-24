<main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    ⛵ Puerto Deportivo de Hendaya:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Actividades náuticas, ocio y vistas al mar en la costa vasco-francesa
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    El <strong class="text-gray-900">Puerto Deportivo de Hendaya</strong> es un espacio emblemático para la náutica y el ocio, situado en <span class="font-medium">Hendaya</span>, Francia. Ofrece embarcaderos, servicios para barcos y un entorno ideal para pasear junto al mar.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Además de la actividad náutica, el puerto cuenta con restaurantes, tiendas y zonas de ocio, convirtiéndose en un lugar perfecto para disfrutar del litoral atlántico.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-puerto" class="mb-8">
    <h2 id="servicios-puerto" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en el Puerto Deportivo de Hendaya
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Entre los servicios disponibles:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...></svg>
        Amarre para embarcaciones
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...></svg>
        Mantenimiento y servicios náuticos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...></svg>
        Restaurantes y cafeterías frente al mar
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...></svg>
        Zonas de paseo y observación del puerto
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-puerto" class="mb-8">
    <h2 id="actividades-puerto" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en el Puerto Deportivo
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Las principales actividades incluyen:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...></svg>
        Navegación y alquiler de embarcaciones
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...></svg>
        Pesca deportiva
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...></svg>
        Paseos junto al puerto y fotografía
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...></svg>
        Eventos y actividades culturales en temporada
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un lugar ideal para amantes de la náutica, la gastronomía y los paseos junto al mar.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-deportivo-hendaia-nouvelle-aquitaine-1.jpg"
         alt="Vista general del Puerto Deportivo de Hendaya"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-hendaya-2.jpg"
         alt="Embarcaciones amarradas en el Puerto Deportivo de Hendaya"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-hendaya-3.jpg"
         alt="Restaurantes y cafeterías frente al Puerto Deportivo"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-hendaya-4.jpg"
         alt="Paseo marítimo y vistas del Puerto Deportivo de Hendaya"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Puerto Deportivo de Hendaya</p>

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
        <strong>Oficina de turismo:</strong>
        <a href="tel:+33559550000" class="text-blue-500 hover:underline">+33 5 59 55 00 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.tourisme-hendaye.fr/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          tourisme-hendaye.fr
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
