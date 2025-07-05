<main class="container py-8 px-4 mx-auto max-w-7xl" itemscope itemtype="https://schema.org/TouristAttraction">
  <article class="bg-white rounded-2xl shadow-md p-6 md:p-8" itemprop="description">
    <header>
      <h1 class="text-3xl md:text-5xl font-extrabold text-blue-700 mb-4" itemprop="name">Playa de Brazomar</h1>
      <p class="text-gray-500 text-sm mb-6">Ubicada en <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>" class="text-blue-600 hover:underline" itemprop="addressLocality">Castro Urdiales</a>, Cantabria</p>
    </header>

    <section class="mb-6 text-gray-700 leading-relaxed">
      <p><strong class="text-gray-900">Playa de Brazomar</strong> es una de las principales <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES; ?>" class="text-blue-600 hover:underline">playas urbanas</a> de Castro Urdiales, destacada por su belleza natural y su proximidad al centro urbano.</p>
    </section>

    <section class="mb-6 text-gray-700">
      <h2 class="text-2xl font-semibold text-blue-800 mb-2">Características</h2>
      <p>Esta playa de arena dorada tiene aproximadamente 400 metros de longitud y 40 metros de anchura. Es ideal para familias, gracias a sus aguas tranquilas y servicios completos.</p>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold text-blue-800 mb-3">🧾 Servicios disponibles</h3>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li><span class="text-green-600">✔️</span> Duchas y baños públicos</li>
        <li><span class="text-green-600">♿</span> Accesos para personas con movilidad reducida</li>
        <li><span class="text-green-600">🌴</span> Zonas verdes y paseo marítimo</li>
        <li><span class="text-green-600">🍹</span> Chiringuitos y terrazas cercanas</li>
      </ul>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold text-blue-800 mb-3">🎯 Actividades populares</h3>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>Natación y juegos en la orilla</li>
        <li>Paseos por el paseo marítimo</li>
        <li>Vóley playa</li>
        <li>Alquiler de <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/actividades-nauticas.php" class="text-blue-600 hover:underline">hidropedales y kayaks</a></li>
      </ul>
    </section>

    <section class="my-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-brazomar-castro-urdiales-cantabria-1.jpg"
          alt="Vista panorámica de la Playa de Brazomar en Castro Urdiales"
          class="rounded-lg shadow-sm object-cover w-full h-64" itemprop="image">

        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-brazomar-castro-urdiales-cantabria-2.jpg"
          alt="Orilla y paseo marítimo de la Playa de Brazomar"
          class="rounded-lg shadow-sm object-cover w-full h-64">

        <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG; ?>/playa-de-brazomar-castro-urdiales-cantabria-3.jpg"
          alt="Atardecer en la Playa de Brazomar con el sol sobre el mar"
          class="rounded-lg shadow-sm object-cover w-full h-64">
      </div>
      <p class="text-center text-sm text-gray-500 mt-4">Imágenes de la Playa de Brazomar</p>
    </section>


    <section class="mb-6 text-gray-700">
      <h3 class="text-xl font-semibold text-blue-800 mb-2">💡 Interés cultural y social</h3>
      <p>Esta playa no solo es un punto turístico, sino también un espacio social clave para los habitantes de Castro Urdiales. Es habitual ver reuniones familiares, eventos locales y actividades organizadas por el ayuntamiento en temporada estival.</p>
    </section>

    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>

    <footer class="mt-8 flex flex-col sm:flex-row sm:justify-between items-center gap-4">

      <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>

      <div class="flex gap-3">
        <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/playa-de-ostende.php" class="text-blue-500 hover:underline text-sm">Playa de Ostende</a>
        <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/puerto-pesquero.php" class="text-blue-500 hover:underline text-sm">Puerto Pesquero</a>
        <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/casco-antiguo.php" class="text-blue-500 hover:underline text-sm">Casco Antiguo</a>
      </div>
    </footer>
  </article>
</main>