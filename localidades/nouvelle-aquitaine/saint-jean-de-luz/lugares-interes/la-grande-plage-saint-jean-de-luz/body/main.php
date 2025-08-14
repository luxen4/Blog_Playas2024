<main>
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
    🌊 Grande Plage de Saint-Jean-de-Luz:
    <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
      Tranquilidad y encanto vasco en la costa atlántica
    </span>
  </h1>

  <p class="mb-4 text-sm text-gray-700">
    La <strong class="text-gray-900">Grande Plage de Saint-Jean-de-Luz</strong>, situada en el corazón de <span class="font-medium">Saint-Jean-de-Luz</span>, en Nouvelle Aquitaine, es una playa urbana famosa por su bahía protegida, su ambiente familiar y su conexión con la tradición vasca francesa.
  </p>

  <p class="mb-6 text-sm text-gray-700">
    Con aproximadamente <span class="font-medium">400 metros</span> de longitud y una orilla de suave pendiente, esta playa ofrece un baño seguro, ideal para familias con niños y para quienes buscan relajación frente al mar con todas las comodidades.
  </p>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-saint-jean" class="mb-8">
    <h2 id="servicios-saint-jean" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Grande Plage de Saint-Jean-de-Luz
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Esta playa urbana cuenta con todos los servicios necesarios para una jornada cómoda junto al mar:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso adaptado para personas con movilidad reducida
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        Duchas, baños y vestuarios
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2v20m9-9H3"/>
        </svg>
        Aparcamiento cercano y accesible
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        Restaurantes, heladerías y tiendas en el paseo marítimo
      </li>
    </ul>
  </section>

  <section aria-labelledby="actividades-saint-jean" class="mb-8">
    <h2 id="actividades-saint-jean" class="text-xl font-semibold text-blue-700 mb-3">
      Actividades en la Grande Plage
    </h2>

    <p class="mb-4 text-sm text-gray-700">
      Esta playa es perfecta tanto para la relajación como para actividades activas al aire libre:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2a4 4 0 100 8 4 4 0 000-8zM4 20c1-4 5-6 8-6s7 2 8 6H4z"/>
        </svg>
        Baño en aguas tranquilas y seguras
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C6.5 2 2 12 2 12s4.5 10 10 10 10-10 10-10S17.5 2 12 2z"/>
        </svg>
        Paseos por el paseo marítimo y el casco antiguo
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17 9V7H7v2h10zm0 4v-2H7v2h10zm0 4v-2H7v2h10z"/>
        </svg>
        Fotografía arquitectónica y de paisajes costeros
      </li>
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 12h6m-3-3v6m-7 4h14a2 2 0 002-2V5a2 2 0-00-2-2H5a2 2 0-00-2 2v14l4-4z"/>
        </svg>
        Observación del paisaje urbano y marino
      </li>
    </ul>

    <p class="mb-4 text-sm text-gray-700">
      La combinación de tradición, belleza natural y confort hace de esta playa un destino imprescindible en el País Vasco francés.
    </p>
  </section>

  <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/playa-de-grande-plage-saint-jean-de-luz-nouvelle-aquitaine-1.jpg"
         alt="Vista panorámica de la Grande Plage de Saint-Jean-de-Luz"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/paseo-maritimo-junto-a-la-grande-plage.jpg"
         alt="Paseo marítimo junto a la Grande Plage"
         class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes de la Grande Plage de Saint-Jean-de-Luz</p>

  <p class="mb-4 text-sm text-gray-700">
    Disfruta de una experiencia única en uno de los destinos más encantadores del suroeste de Francia, perfecto para combinar descanso, gastronomía y cultura.
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
        <a href="tel:+33559269000" class="text-blue-500 hover:underline">+33 5 59 26 90 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.saintjeandeluz.fr" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
          www.saintjeandeluz.fr
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
