<main class="bg-green-50 min-h-screen p-4 md:p-8">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <header class="mb-8 text-center">
    <h1 class="text-3xl md:text-4xl font-extrabold text-green-800 mb-2">
      🌲 Parque Natural de los Montes de Triaño
    </h1>
    <p class="text-md md:text-lg text-green-700 font-medium">
      Naturaleza protegida y rutas de senderismo para toda la familia
    </p>
  </header>

  <section class="grid md:grid-cols-2 gap-6 items-start mb-10">
    <div class="space-y-4">
      <p class="text-gray-800 text-sm md:text-base">
        El <strong>Parque Natural de los Montes de Triaño</strong> en <span class="font-semibold">Muskiz</span>, Bizkaia,
        es un espacio natural protegido que combina senderos señalizados, fauna y flora autóctona, zonas de descanso y miradores panorámicos.
      </p>
      <p class="text-gray-800 text-sm md:text-base">
        Perfecto para familias, amantes de la <strong>naturaleza</strong>, el <strong>senderismo</strong> y la <strong>fotografía</strong>.
      </p>
    </div>
    <figure class="grid grid-cols-1 gap-4 rounded-lg overflow-hidden shadow-lg">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-natural-montes-triano-1.jpg" 
           alt="Senderos y áreas verdes del Parque Natural de los Montes de Triaño" 
           class="w-full aspect-video object-cover">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/parque-natural-montes-triano-2.jpg" 
           alt="Fauna y flora en el Parque Natural de los Montes de Triaño" 
           class="w-full aspect-video object-cover">
    </figure>
  </section>

  <section class="mb-10">
    <h2 class="text-2xl font-bold text-green-800 mb-4">🌿 Información del Parque</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-2">Superficie</h3>
        <p>≈ 25 ha de espacio natural protegido</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-2">Rutas</h3>
        <p>Senderismo fácil y moderado, duración 2-3 horas</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-2">Fauna y Flora</h3>
        <p>Observación de aves, flora autóctona y zonas de conservación</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-green-600">
        <h3 class="font-semibold text-green-700 mb-2">Miradores</h3>
        <p>Vistas panorámicas de montes y costa cercana</p>
      </div>
    </div>
  </section>

  <section class="mb-10">
    <h2 class="text-2xl font-bold text-green-800 mb-4">🥾 Actividades</h2>
    <ul class="grid md:grid-cols-2 gap-4">
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">🌿</span>
        <span>Paseos por senderos naturales</span>
      </li>
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">📸</span>
        <span>Fotografía de paisajes y biodiversidad</span>
      </li>
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">🦋</span>
        <span>Observación de fauna y flora autóctona</span>
      </li>
      <li class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-all flex items-center gap-3">
        <span class="text-2xl">🌅</span>
        <span>Miradores con vistas a montes y costa</span>
      </li>
    </ul>
  </section>

  <section class="mb-10 text-gray-700">
    <h2 class="text-2xl font-bold text-green-800 mb-4">📞 Información de contacto</h2>
    <ul class="space-y-2">
      <li>
        <strong>Teléfono Ayuntamiento:</strong>
        <a href="tel:+34944400000" class="text-green-600 hover:underline">+34 944 40 00 00</a>
      </li>
      <li>
        <strong>Sitio web:</strong>
        <a href="https://www.muskiz.eus" target="_blank" rel="noopener noreferrer" class="text-green-600 hover:underline">
          www.muskiz.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
