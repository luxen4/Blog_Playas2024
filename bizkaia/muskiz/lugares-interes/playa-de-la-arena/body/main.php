<main>
  <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de La Arena:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Un extenso arenal entre bizkaia y Cantabria
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de La Arena</strong>, situada en el municipio de <span class="font-medium">Muskiz</span>, bizkaia, es una de las playas más amplias del litoral vasco. Rodeada de dunas, praderas y con vistas al monte, es ideal para familias, surfistas y amantes del paseo marítimo.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con más de <span class="font-medium">1000 metros</span> de longitud y una gran anchura, La Arena dispone de un paseo costero, múltiples accesos y servicios, siendo uno de los destinos preferidos durante el verano en la zona.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-laarena" class="mb-8">
    <h2 id="servicios-laarena" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de La Arena
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Esta playa está bien equipada con servicios pensados para una experiencia cómoda:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Accesos adaptados para personas con movilidad reducida
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Duchas, aseos y vestuarios públicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Amplio aparcamiento gratuito
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Chiringuitos y cafeterías cercanas
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-laarena" class="mb-8">
    <h2 id="actividades-laarena" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de La Arena
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      La Arena es ideal para múltiples actividades recreativas y deportivas:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Surf y bodyboard
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Senderismo por el entorno natural
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Paseos en familia por el paseo marítimo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación de aves y naturaleza
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Gracias a su gran extensión, su entorno natural y la facilidad de acceso, La Arena es perfecta tanto para una jornada relajada como para actividades activas al aire libre.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-la-arena-muskiz-bizkaia-1.jpg"
         alt="Vista aérea de la Playa de La Arena en Muskiz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-la-arena-muskiz-bizkaia-2.jpg"
         alt="Zona de dunas y paseo marítimo en la Playa de La Arena"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de La Arena en Muskiz, bizkaia</p>

  <p class="mb-4 text-sm text-gray-700">
    Descubre uno de los mejores arenales del norte de España, perfecto para disfrutar del mar, el sol y el verde entorno del litoral vasco.
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
        <a href="tel:+34944670400" class="text-blue-500 hover:underline">+34 944 67 04 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.muskiz.org" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.muskiz.org
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>