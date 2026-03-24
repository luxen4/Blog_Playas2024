<main>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
    
    <h1 class="text-2xl md:text-3xl font-semibold text-green-700 mb-4">
        🌲 Forêt Domaniale – Capbreton:
        <span class="block mt-1 text-base md:text-lg text-green-500 font-normal">
            Senderos y naturaleza atlántica para disfrutar del aire libre
        </span>
    </h1>

    <p class="mb-4 text-sm text-gray-700">
        La <strong class="text-gray-900">Forêt Domaniale de Capbreton</strong>, ubicada en <span class="font-medium">Capbreton</span>, Francia, es un espacio natural protegido con senderos para caminar, zonas de picnic y bosques típicos de Nouvelle-Aquitaine.
    </p>

    <p class="mb-6 text-sm text-gray-700">
        Ideal para familias, excursionistas y amantes del turismo activo que quieran disfrutar de la naturaleza atlántica.
    </p>

    <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

    <section aria-label="Publicidad relacionada" class="mb-8">
        <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
            <div class="text-center">
                <?php require $publicidad; ?>
            </div>
        </div>
    </section>

    <section aria-labelledby="servicios-foret-domaniale" class="mb-8">
        <h2 id="servicios-foret-domaniale" class="text-xl font-semibold text-green-700 mb-3">
            Servicios y facilidades
        </h2>
        <p class="mb-4 text-sm text-gray-700">
            Para tu comodidad, el bosque ofrece:
        </p>

        <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-green-500" ...></svg>
                Senderos señalizados
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-blue-500" ...></svg>
                Áreas de picnic
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-yellow-500" ...></svg>
                Miradores y puntos de observación
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-indigo-500" ...></svg>
                Acceso a rutas de ciclismo cercanas
            </li>
        </ul>
    </section>

    <section aria-labelledby="actividades-foret-domaniale" class="mb-8">
        <h2 id="actividades-foret-domaniale" class="text-xl font-semibold text-green-700 mb-3">
            Actividades en el bosque
        </h2>

        <p class="mb-4 text-sm text-gray-700">
            Entre las actividades que puedes disfrutar:
        </p>

        <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-green-500" ...></svg>
                Senderismo y rutas familiares
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-teal-500" ...></svg>
                Observación de fauna y flora
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-yellow-500" ...></svg>
                Picnic y descanso en áreas naturales
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-pink-500" ...></svg>
                Fotografía de paisajes y bosques
            </li>
        </ul>

        <p class="mb-4 text-sm text-gray-700">
            Una opción perfecta para combinar naturaleza, deporte y relax.
        </p>
    </section>

    <!-- Galería de 4 imágenes -->
    <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/les-forets-de-labenne-par-capbreton-a-vtt.jpg"
             alt="Senderos en la Forêt Domaniale de Capbreton"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/bosque-capbreton-2.jpg"
             alt="Áreas de picnic en la Forêt Domaniale"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/bosque-capbreton-3.jpg"
             alt="Miradores y observación de la naturaleza"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/bosque-capbreton-4.jpg"
             alt="Fotografía de la flora y fauna del bosque"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    </figure>

    <p class="mb-4 text-sm text-gray-700">Imágenes de la Forêt Domaniale de Capbreton</p>

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
        <h2 class="text-xl font-semibold text-green-700 mb-2">📞 Información de contacto</h2>
        <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
            <li>
                <strong>Oficina de turismo Capbreton:</strong>
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
