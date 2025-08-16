<main>
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Playa de Ostende:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      La playa más popular de Cantabria
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Playa de Ostende</strong>, ubicada en <span class="font-medium">Castro Urdiales</span>, Cantabria, es una de las playas más queridas tanto por los locales como por los turistas. Este hermoso rincón costero ofrece unas vistas inmejorables y una atmósfera tranquila, perfecta para relajarse.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con una extensión de aproximadamente <span class="font-medium">900 metros de longitud</span> y <span class="font-medium">40 metros de ancho</span>, la Playa de Ostende es ideal para disfrutar del baño, tomar el sol y practicar diversas actividades acuáticas.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>


<section aria-labelledby="servicios-ostende" class="mb-8">
  <h2 id="servicios-ostende" class="text-xl font-semibold text-blue-700 mb-3">
    Servicios en la Playa de Ostende
  </h2>
  <p class="mb-4 text-sm text-gray-700">
    Entre los servicios disponibles para los visitantes se encuentran:
  </p>

  <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 12h6m-3 -3v6m-7 4h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14l4-4z"/>
      </svg>
      Duchas y baños públicos
    </li>
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 12l2 2l4-4M5 13l4 4l10-10"/>
      </svg>
      Accesibilidad para personas con movilidad reducida
    </li>
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 3v18m9-9H3"/>
      </svg>
      Alquiler de sombrillas y hamacas
    </li>
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
      Chiringuitos y bares junto al mar
    </li>
  </ul>
</section>









<section aria-labelledby="actividades-ostende" class="mb-8">
  <h2 id="actividades-ostende" class="text-xl font-semibold text-blue-700 mb-3">
    Actividades y deportes en la Playa de Ostende
  </h2>

  <p class="mb-4 text-sm text-gray-700">
    La Playa de Ostende ofrece diversas actividades recreativas y deportivas:
  </p>

  <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
      </svg>
      Voleibol de playa
    </li>
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M4 20c1-4 5-6 8-6s7 2 8 6H4zM12 2a4 4 0 100 8 4 4 0 000-8z"/>
      </svg>
      Surf y paddle surf
    </li>
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M2 20h20v-2l-3-6V6a2 2 0 00-2-2H7a2 2 0 00-2 2v6l-3 6v2z"/>
      </svg>
      Paseos en barco por la costa
    </li>
    <li class="flex items-center gap-2">
      <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2zm0 17a7 7 0 110-14 7 7 0 010 14z"/>
      </svg>
      Buceo y snorkel en aguas cristalinas
    </li>
  </ul>

  <p class="mb-4 text-sm text-gray-700">
    Además de ser un lugar para el ocio, la Playa de Ostende tiene un gran valor cultural y económico para la comunidad local, siendo un punto de encuentro para residentes y turistas. Es una de las playas más concurridas y apreciadas de la región.
  </p>
</section>


  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-ostende-castro-urdiales-cantabria-1.jpg"
      alt="Vista panorámica de la Playa de Ostende con el mar Cantábrico en Castro Urdiales"
      class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-ostende-castro-urdiales-cantabria-2.jpg"
      alt="Playa de Ostende en Castro Urdiales con turistas disfrutando del sol y el mar"
      class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Playa de Ostende en Castro Urdiales</p>

  <p class="mb-4 text-sm text-gray-700">
    Disfruta del entorno natural y la tranquilidad de la Playa de Ostende, un lugar de visita obligada para quienes buscan relajarse, practicar deportes acuáticos y disfrutar de la belleza costera de Cantabria.
  </p>

  <p class="mb-4 text-sm text-gray-700">
    No dejes pasar la oportunidad de disfrutar de la Playa de Ostende en Castro Urdiales, un lugar perfecto para relajarte, practicar deportes acuáticos o simplemente disfrutar del sol.
  </p>



<div class="block lg:hidden">
  <iframe
    src="<?= PATH_HREF_RAIZ_BLOQUES . '/anuncios_derecha2.php' ?>"
    width="100%"
    height="640px"
    scrolling="no"
    style="border:1px solid #ccc; overflow:hidden;"
    title="Ejemplo"
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


  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>