<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Playa de Sonabia:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Un rincón salvaje de Cantabria
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Sonabia</strong>, ubicada en <span class="font-medium">Sonabia</span>, Cantabria, es una pequeña cala de arena dorada flanqueada por acantilados y pinares. Su carácter casi virgen la convierte en un destino reservado para quienes buscan tranquilidad y naturaleza en estado puro.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una longitud aproximada de <span class="font-medium">450 metros</span> y una anchura que no supera los <span class="font-medium">30 metros</span>, Sonabia es perfecta para el baño en aguas cristalinas, la observación de aves y el senderismo costero.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-sonabia" class="mb-8">
    <h2 id="servicios-sonabia" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Sonabia
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Ten en cuenta que al tratarse de una playa más aislada, los servicios son mínimos:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso peatonal por escaleras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Sin duchas ni baños públicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento limitado en el acantilado
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Sin chiringuitos ni alquiler de hamacas
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-sonabia" class="mb-8">
    <h2 id="actividades-sonabia" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Sonabia
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Sonabia es un paraíso para los amantes de la naturaleza y los deportes suaves:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Snorkel y buceo en aguas claras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Senderismo por los acantilados
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía de paisaje costero
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación de aves marinas
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Rodeada de pinos y formaciones rocosas, la Playa de Sonabia ofrece un entorno único para desconectar y disfrutar de la serenidad del Cantábrico.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-sonabia-cantabria-1.jpg"
         alt="Playa de Sonabia vista desde los acantilados"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-sonabia-cantabria-2.jpg"
         alt="Acceso peatonal a la Playa de Sonabia rodeada de pinos"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Sonabia en Cantabria</p>

  <p class="mb-4 text-sm text-gray-700">
    No te pierdas la oportunidad de conocer esta joya natural en la costa oriental de Cantabria, perfecta para una escapada lejos del bullicio.
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
        <a href="tel:+34942859065" class="text-blue-500 hover:underline">+34 942 85 90 65</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.turismocastrourdiales.net" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.turismocastrourdiales.net
        </a>
      </li>
    </ul>
  </section>




  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
