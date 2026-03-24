<main>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>
    
    <h1 class="text-2xl md:text-3xl font-semibold text-green-600 mb-4">
        🚴 Piste Cyclable Vélodyssée – Capbreton:
        <span class="block mt-1 text-base md:text-lg text-green-500 font-normal">
            Ruta ciclista atlántica para disfrutar de la costa y la naturaleza
        </span>
    </h1>

    <p class="mb-4 text-sm text-gray-700">
        La <strong class="text-gray-900">Piste Cyclable Vélodyssée</strong>, ubicada en <span class="font-medium">Capbreton</span>, Francia, es una ruta ciclista que atraviesa paisajes costeros, playas y bosques de la región de Nouvelle-Aquitaine.
    </p>

    <p class="mb-6 text-sm text-gray-700">
        Ideal para ciclistas, familias y amantes del turismo activo que quieran recorrer la costa atlántica de forma segura y divertida.
    </p>

    <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

    <section aria-label="Publicidad relacionada" class="mb-8">
        <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
            <div class="text-center">
                <?php require $publicidad; ?>
            </div>
        </div>
    </section>

    <section aria-labelledby="servicios-piste-cyclable" class="mb-8">
        <h2 id="servicios-piste-cyclable" class="text-xl font-semibold text-green-700 mb-3">
            Servicios y facilidades
        </h2>
        <p class="mb-4 text-sm text-gray-700">
            Para tu comodidad, la ruta cuenta con:
        </p>

        <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-green-500" ...></svg>
                Señalización y carriles seguros
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-blue-500" ...></svg>
                Aparcamientos para bicicletas
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-yellow-500" ...></svg>
                Áreas de descanso y miradores
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-indigo-500" ...></svg>
                Acceso a playas y restaurantes cercanos
            </li>
        </ul>
    </section>

    <section aria-labelledby="actividades-piste-cyclable" class="mb-8">
        <h2 id="actividades-piste-cyclable" class="text-xl font-semibold text-green-700 mb-3">
            Actividades en la ruta
        </h2>

        <p class="mb-4 text-sm text-gray-700">
            Entre las actividades que puedes disfrutar:
        </p>

        <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-green-500" ...></svg>
                Paseos en bicicleta y rutas familiares
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-teal-500" ...></svg>
                Fotografía de paisajes y costa atlántica
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-yellow-500" ...></svg>
                Picnic y descanso en áreas naturales
            </li>
            <li class="flex items-center gap-2">
                <svg class="w-5 h-5 text-pink-500" ...></svg>
                Exploración de playas y bosques cercanos
            </li>
        </ul>

        <p class="mb-4 text-sm text-gray-700">
            Una opción perfecta para combinar deporte, naturaleza y turismo costero.
        </p>
    </section>

    <!-- Galería de 4 imágenes -->
    <figure class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-8">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ciclistas-piste-cyclable-velodyssee-capbreton.jpg"
             alt="Ciclistas en la Piste Cyclable Vélodyssée de Capbreton"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/velodyssee-capbreton-2.jpg"
             alt="Paisaje costero desde la Vélodyssée"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/velodyssee-capbreton-3.jpg"
             alt="Zona de descanso y miradores en la Piste Cyclable"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/velodyssee-capbreton-4.jpg"
             alt="Playa y bosque cerca de la Piste Cyclable Vélodyssée"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    </figure>

    <p class="mb-4 text-sm text-gray-700">Imágenes de la Piste Cyclable Vélodyssée en Capbreton</p>

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
