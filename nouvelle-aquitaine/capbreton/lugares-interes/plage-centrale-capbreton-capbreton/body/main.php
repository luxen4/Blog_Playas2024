<main>
    <?php require PATH_RAIZ . '/_estructura/semantica/breadcrums-playa.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🏖️ Plage Centrale – Capbreton:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Surf y relax en la costa atlántica francesa
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Plage Centrale</strong>, situada en <span class="font-medium">Capbreton</span>, Francia, es una de las playas más icónicas para surfistas y visitantes que buscan un ambiente vibrante y vistas al océano Atlántico.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con su arena dorada, olas perfectas y un entorno lleno de vida, esta playa es ideal para deportes acuáticos, paseos junto al mar y días de descanso al sol.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-plage-centrale" class="mb-8">
    <h2 id="servicios-plage-centrale" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Plage Centrale
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Para tu comodidad, esta playa cuenta con:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" ...>
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso peatonal y pasarelas adaptadas
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gray-500" ...>
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Duchas y aseos públicos
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento cercano
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" ...>
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Restaurantes y bares en el paseo marítimo
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-plage-centrale" class="mb-8">
    <h2 id="actividades-plage-centrale" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Plage Centrale
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Entre las actividades más populares:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" ...>
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Surf y bodyboard
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" ...>
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Paseos por el puerto y el espigón
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" ...>
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía de paisajes y atardeceres
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" ...>
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Relax en la arena y picnic
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      Un lugar perfecto para disfrutar de la energía atlántica y el ambiente surfero.
    </p>
  </section>

  <!-- Galería de 4 imágenes -->
  <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/plage-centrale-capbreton-nouvelle-aquitaine-1.jpg"
         alt="Vista panorámica de la Plage Centrale en Capbreton"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/plage-centrale-capbreton-nouvelle-aquitaine-2.jpg"
         alt="Zona de arena y olas en la Plage Centrale"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy"><?php /* https://www.tripadvisor.es/Attractions-g641840-Activities-Capbreton_Landes_Nouvelle_Aquitaine.html */?>
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/plage-centrale-capbreton-nouvelle-aquitaine-3.png"
         alt="Paseo marítimo y ambiente surfero en la Plage Centrale"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy"><?php /* https://www.landesatlantiquesud.com/es/capbreton/le-top-des-incontournables-a-faire/*/ ?> 
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/plage-centrale-capbreton-nouvelle-aquitaine-4.jpg"
         alt="Atardecer sobre la Plage Centrale en Capbreton"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Plage Centrale en Capbreton</p>

  <p class="mb-4 text-sm text-gray-700">
    Ideal para surfistas, familias y viajeros que buscan disfrutar del Atlántico.
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
        <strong>Teléfono oficina de turismo:</strong>
        <a href="tel:+33558410575" class="text-blue-500 hover:underline">+33 5 58 41 05 75</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.capbreton.fr/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          capbreton.fr
        </a>
      </li>
    </ul>
  </section>
  
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
