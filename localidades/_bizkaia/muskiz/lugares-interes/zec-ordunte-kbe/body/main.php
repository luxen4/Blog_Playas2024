<main class="bg-blue-50 min-h-screen p-4 md:p-8">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <header class="mb-8 text-center">
    <h1 class="text-3xl md:text-4xl font-extrabold text-blue-800 mb-2">
      🏞️ ZEC Ordunte KBE
    </h1>
    <p class="text-md md:text-lg text-blue-700 font-medium">
      Espacio protegido de gran valor ecológico en Bizkaia y Burgos
    </p>
  </header>

  <section class="grid md:grid-cols-2 gap-6 items-start mb-10">
    <div class="space-y-4">
      <p class="text-gray-800 text-sm md:text-base">
        La <strong>ZEC Ordunte KBE</strong> (Zona Especial de Conservación) abarca un extenso entorno natural que se
        extiende entre <span class="font-semibold">Bizkaia</span> y la provincia de Burgos. Reconocida por su gran
        <strong>valor ecológico</strong>, alberga bosques, humedales, pastizales de altura y especies protegidas.
      </p>
      <p class="text-gray-800 text-sm md:text-base">
        Ideal para quienes buscan <strong>rutas de montaña</strong>, observación de aves, investigación ambiental y
        desconexión en plena naturaleza.
      </p>
    </div>
    <figure class="grid grid-cols-1 gap-4 rounded-lg overflow-hidden shadow-lg">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/zec-ordunte-kbe-muskiz-1.jpg" 
           alt="Paisaje montañoso de la ZEC Ordunte KBE" 
           class="w-full aspect-video object-cover">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/zec-ordunte-kbe-muskiz-2.jpg" 
           alt="Biodiversidad en la ZEC Ordunte KBE" 
           class="w-full aspect-video object-cover">
    </figure>
  </section>

  <section class="mb-10">
    <h2 class="text-2xl font-bold text-blue-800 mb-4">🌍 Información del Espacio Natural</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
        <h3 class="font-semibold text-blue-700 mb-2">Superficie</h3>
        <p>≈ 3.500 ha de ecosistemas protegidos</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
        <h3 class="font-semibold text-blue-700 mb-2">Ecosistemas</h3>
        <p>Bosques de hayedos, robledales, humedales y prados de altura</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
        <h3 class="font-semibold text-blue-700 mb-2">Fauna</h3>
        <p>Aves rapaces, anfibios protegidos y especies en peligro</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
        <h3 class="font-semibold text-blue-700 mb-2">Acceso</h3>
        <p>Rutas señalizadas desde Muskiz y Valle de Mena</p>
      </div>
    </div>
  </section>

  <section class="mb-10">
    <h2 class="text-2xl font-bold text-blue-800 mb-4">🥾 Actividades recomendadas</h2>
    <ul class="grid md:grid-cols-2 gap-4">
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">🚶</span>
        <span>Senderismo por bosques y cumbres</span>
      </li>
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">🦅</span>
        <span>Observación de aves rapaces</span>
      </li>
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">🌱</span>
        <span>Rutas interpretativas de flora autóctona</span>
      </li>
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">📸</span>
        <span>Fotografía de paisajes y biodiversidad</span>
      </li>
    </ul>
  </section>

  <section class="mb-10 text-gray-700">
    <h2 class="text-2xl font-bold text-blue-800 mb-4">📞 Información de contacto</h2>
    <ul class="space-y-2">
      <li>
        <strong>Teléfono Ayuntamiento de Muskiz:</strong>
        <a href="tel:+34944400000" class="text-blue-600 hover:underline">+34 944 40 00 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.muskiz.eus" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
          www.muskiz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
