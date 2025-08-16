<main>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de Plentzia:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Una playa familiar junto a la ría de Plentzia
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Plentzia</strong>, ubicada en el municipio de <span class="font-medium">Plentzia</span>, vizkaia, es un arenal muy apreciado por su tranquilidad, aguas seguras y entorno natural. Ideal para familias, cuenta con una ubicación privilegiada junto a la ría.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una longitud de <span class="font-medium">350 metros</span>, esta playa ofrece todos los servicios necesarios para disfrutar de una jornada completa, además de un animado paseo marítimo y acceso al centro del municipio.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-plentzia" class="mb-8">
    <h2 id="servicios-plentzia" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Plentzia
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Esta playa urbana ofrece servicios para disfrutar cómodamente del entorno:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        ✅ Accesos adaptados para personas con movilidad reducida
      </li>
      <li class="flex items-center gap-2">
        🚿 Duchas, aseos y lavapiés
      </li>
      <li class="flex items-center gap-2">
        🚗 Zona de aparcamiento cercana (de pago en temporada)
      </li>
      <li class="flex items-center gap-2">
        ☕ Bares y restaurantes en el paseo marítimo
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-plentzia" class="mb-8">
    <h2 id="actividades-plentzia" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Plentzia
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Gracias a su ubicación y condiciones, esta playa es ideal para:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">🏄 Paddle surf y kayak</li>
      <li class="flex items-center gap-2">🚶‍♀️ Paseos por la ría y el casco urbano</li>
      <li class="flex items-center gap-2">🏖️ Juegos y descanso en la arena</li>
      <li class="flex items-center gap-2">🦆 Observación de aves y naturaleza en la ría</li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Perfecta para una jornada tranquila en familia o con amigos, con fácil acceso desde Bilbao en metro o coche.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-plentzia-plentzia-bizkaia-1.jpg"
         alt="Vista general de la Playa de Plentzia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-de-plentzia-bizkaia.jpg"
         alt="Paseo junto a la ría en Plentzia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Plentzia, en la desembocadura de la ría</p>

  <p class="mb-4 text-sm text-gray-700">
    Plentzia es uno de los destinos más accesibles y encantadores de la costa de vizkaia para quienes buscan mar, cultura y tranquilidad.
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
        <a href="tel:+34946677500" class="text-blue-500 hover:underline">+34 946 67 75 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.plentzia.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.plentzia.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>