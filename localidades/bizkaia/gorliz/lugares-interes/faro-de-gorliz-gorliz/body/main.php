<main>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

    <h1 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4">
        🗼 Faro de Gorliz:
        <span class="block mt-1 text-base md:text-lg text-blue-500 font-normal">
            Historia, vistas panorámicas y naturaleza en la costa de Bizkaia
        </span>
    </h1>

    <p class="mb-4 text-sm text-gray-700">
        <strong>Faro de Gorliz</strong>, situado en el cabo Billano, es un referente histórico y natural de la costa vizcaína. Rodeado de acantilados y senderos, ofrece vistas espectaculares del mar Cantábrico y es ideal para paseos y fotografía de paisaje.
    </p>

    <p class="mb-6 text-sm text-gray-700">
        Este faro, construido a finales del siglo XIX, sigue activo y permite conocer la historia marítima de la región mientras se disfruta de un entorno natural protegido y accesible desde Gorliz.
    </p>

    <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>

    <section aria-label="Publicidad relacionada" class="mb-8">
        <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
            <div class="text-center">
                <?php require $publicidad; ?>
            </div>
        </div>
    </section>

    <section aria-labelledby="servicios-faro" class="mb-8">
        <h2 id="servicios-faro" class="text-xl font-semibold text-blue-700 mb-3">
            Servicios en Faro de Gorliz
        </h2>
        <p class="mb-4 text-sm text-gray-700">
            Aunque no cuenta con servicios propios como la playa, en sus alrededores encontrarás:
        </p>

        <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
            <li class="flex items-center gap-2">✅ Acceso desde el paseo marítimo de Gorliz</li>
            <li class="flex items-center gap-2">🚶 Senderos naturales y miradores</li>
            <li class="flex items-center gap-2">🅿️ Aparcamiento cercano en Gorliz</li>
            <li class="flex items-center gap-2">📸 Fotografía de paisaje y observación de aves</li>
        </ul>
    </section>

    <section aria-labelledby="actividades-faro" class="mb-8">
        <h2 id="actividades-faro" class="text-xl font-semibold text-blue-700 mb-3">
            Actividades en Faro de Gorliz
        </h2>

        <p class="mb-4 text-sm text-gray-700">
            Ideal para los amantes de la naturaleza y la historia marítima:
        </p>

        <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
            <li class="flex items-center gap-2">🥾 Senderismo y rutas costeras</li>
            <li class="flex items-center gap-2">📸 Fotografía de paisajes y acantilados</li>
            <li class="flex items-center gap-2">🦆 Observación de aves y flora costera</li>
            <li class="flex items-center gap-2">🌅 Vistas panorámicas del Cantábrico al atardecer</li>
        </ul>

        <p class="mb-4 text-sm text-gray-700">
            Un lugar perfecto para paseos tranquilos y conexión con la naturaleza sin alejarse del pueblo de Gorliz.
        </p>
    </section>

    <figure class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/faro-de-gorliz-gorliz-cantabria-1.png"
             alt="Faro de Gorliz sobre acantilados de la costa vizcaína"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
        <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/Mirador-de-Isaure-en-Gorliz.jpg"
             alt="Senderos naturales alrededor del Faro de Gorliz"
             class="aspect-video object-cover w-full rounded-lg shadow-sm" loading="lazy">
    </figure>

    <p class="mb-4 text-sm text-gray-700">Fotografías del Faro de Gorliz y su entorno natural</p>

    <p class="mb-4 text-sm text-gray-700">
        Explora este punto emblemático de la costa vizcaína, donde historia, mar y naturaleza se encuentran.
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
        <h2 class="text-xl font-semibold text-blue-700 mb-2">📍 Información adicional</h2>
        <ul class="list-none pl-0 space-y-1 text-gray-700 mb-6">
            <li><strong>Municipio:</strong> Gorliz (Bizkaia)</li>
            <li><strong>Coordenadas aproximadas:</strong> 43.4130° N, -2.9405° O</li>
            <li><strong>Sitio oficial:</strong>
                <a href="https://www.gorliz.eus" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
                    www.gorliz.eus
                </a>
            </li>
        </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
