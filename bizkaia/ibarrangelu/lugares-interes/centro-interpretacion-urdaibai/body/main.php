<?php /* Cuidado que es unmain diferente   */ ?>
<main>
  <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

  <h1 class="text-2xl md:text-3xl font-semibold text-green-700 mb-4">
    🐦 Centro de Interpretación de Urdaibai:
    <span class="block mt-1 text-base md:text-lg text-green-600 font-normal">
      Naturaleza, aves y educación ambiental en Ibarrangelu
    </span>
  </h1>

  <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded">
    <p class="text-sm text-gray-700">
      El <strong class="text-gray-900">Centro de Interpretación de Urdaibai</strong>, también conocido como <span class="font-medium">Urdaibai Bird Center</span>,
      es un espacio único dedicado a la <span class="font-medium">observación de aves</span>, la <span class="font-medium">divulgación científica</span>
      y la <span class="font-medium">educación ambiental</span>, situado en el corazón de la Reserva de la Biosfera de Urdaibai.
    </p>
  </div>

  <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>
  <section aria-label="Publicidad relacionada" class="mb-8">
    <div class="bg-white shadow rounded-lg p-4">
      <div class="text-center">
        <?php require $publicidad; ?>
      </div>
    </div>
  </section>

  <section aria-labelledby="servicios-birdcenter" class="mb-8">
    <h2 id="servicios-birdcenter" class="text-xl font-semibold text-green-700 mb-3">
      Servicios del Centro de Interpretación
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Este centro cuenta con modernas instalaciones para conocer mejor la biodiversidad de Urdaibai:
    </p>

    <ul class="list-disc pl-6 space-y-2 text-gray-700 text-sm">
      <li>🔭 Observatorios equipados para ver aves en su hábitat natural</li>
      <li>📚 Exposiciones interactivas y audiovisuales</li>
      <li>👨‍👩‍👧‍👦 Actividades educativas y visitas guiadas</li>
      <li>♿ Accesibilidad para personas con movilidad reducida</li>
      <li>☕ Zona de descanso y servicios básicos</li>
    </ul>
  </section>

  <section aria-labelledby="actividades-birdcenter" class="mb-8">
    <h2 id="actividades-birdcenter" class="text-xl font-semibold text-green-700 mb-3">
      Actividades en el Urdaibai Bird Center
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      Un lugar perfecto para adentrarse en la riqueza natural de la reserva:
    </p>
    <div class="grid md:grid-cols-2 gap-4 text-sm text-gray-700">
      <div class="p-3 bg-green-50 rounded shadow-sm">🦆 Observación de aves migratorias</div>
      <div class="p-3 bg-green-50 rounded shadow-sm">🎥 Documentales sobre la biodiversidad</div>
      <div class="p-3 bg-green-50 rounded shadow-sm">🌱 Talleres de educación ambiental</div>
      <div class="p-3 bg-green-50 rounded shadow-sm">📸 Fotografía de marismas y humedales</div>
    </div>
  </section>

  <figure class="columns-1 md:columns-2 gap-4 my-8 space-y-4">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/centro-interpretacion-ibarrangelu-bizkaia-1.jpeg"
         alt="Vista exterior del Centro de Interpretación de Urdaibai"
         class="object-cover w-full rounded-lg shadow-sm" loading="lazy">
    <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/urdaibai-birdcenter-2.jpg"
         alt="Observatorio de aves en el Bird Center de Urdaibai"
         class="object-cover w-full rounded-lg shadow-sm" loading="lazy">
  </figure>

  <p class="mb-4 text-sm text-gray-700">Imágenes del Centro de Interpretación de Urdaibai (Ibarrangelu, Bizkaia)</p>

  <div class="block lg:hidden mb-6">
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
        <strong>Teléfono:</strong>
        <a href="tel:+34946870216" class="text-green-600 hover:underline">+34 946 87 02 16</a>
      </li>
      <li>
        <strong>Sitio web oficial:</strong>
        <a href="https://www.birdcenter.org" target="_blank" rel="noopener noreferrer" class="text-green-600 hover:underline">
          www.birdcenter.org
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
