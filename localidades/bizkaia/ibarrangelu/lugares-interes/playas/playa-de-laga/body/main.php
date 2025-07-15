<main>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Playa de Laga:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Un paraíso natural en el Parque de Urdaibai, Bizkaia
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Laga</strong>, ubicada en el entorno protegido de <span class="font-medium">Laga</span>, Bizkaia, forma parte del Parque Natural de Urdaibai. Esta playa de arena fina y aguas limpias es perfecta para surfistas, paseos y el disfrute de un paisaje natural único.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una longitud de aproximadamente <span class="font-medium">500 metros</span>, Laga ofrece acceso a rutas de senderismo, zonas de observación de aves y un ambiente tranquilo, ideal para desconectar y conectar con la naturaleza.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-laga" class="mb-8">
    <h2 id="servicios-laga" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Laga
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Aunque la Playa de Laga mantiene un carácter natural y protegido, cuenta con servicios básicos para facilitar la visita:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Aparcamiento cercano
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Zonas habilitadas para picnic
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Senderos señalizados para explorar el entorno natural
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Información ambiental y paneles interpretativos
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-laga" class="mb-8">
    <h2 id="actividades-laga" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Playa de Laga
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      La Playa de Laga es perfecta para quienes disfrutan de actividades en contacto con la naturaleza:
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
        Senderismo y observación de aves en el Parque Natural
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Paseos relajantes por la costa
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación de aves y fauna local
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Su entorno natural protegido hace que cada visita a la Playa de Laga sea una experiencia única de conexión con la naturaleza.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-laga-1.jpg"
         alt="Vista panorámica de la Playa de Laga en Bizkaia"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-laga-2.jpg"
         alt="Zona de arena y acantilados en la Playa de Laga"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Laga en Bizkaia</p>

  <p class="mb-4 text-sm text-gray-700">
    Un rincón único para disfrutar del mar, la arena y el espectacular paisaje del Parque Natural de Urdaibai.
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
        <a href="tel:+34944555000" class="text-blue-500 hover:underline">+34 944 55 50 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.urdaibai.org" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.urdaibai.org
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
