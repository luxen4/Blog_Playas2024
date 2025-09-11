<?php /* estilo visual más moderno y “card-based” */ ?>
<?php /* Main alternativo para la Torre de Muskiz */ ?>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

  <header class="mb-6 text-center">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
      🏰 Torre de Muskiz
    </h1>
    <p class="mt-2 text-gray-600 text-base md:text-lg">
      Historia, cultura y patrimonio medieval en Muskiz, Bizkaia
    </p>
  </header>

  <section class="mb-8">
    <div class="bg-gray-50 border-l-4 border-gray-400 p-5 rounded-lg shadow-sm">
      <p class="text-gray-700 text-sm md:text-base">
        La <strong>Torre de Muskiz</strong> es un emblemático edificio medieval que se alza
        como testimonio de la historia de Bizkaia. Actualmente se encuentra restaurada
        y abierta al público, ofreciendo visitas culturales y eventos relacionados con el patrimonio.
      </p>
    </div>
  </section>

  <section class="grid md:grid-cols-2 gap-6 mb-8">
    <figure class="rounded-lg overflow-hidden shadow-lg">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/torre-muskiz-1.jpg"
           alt="Vista exterior de la Torre de Muskiz"
           class="object-cover w-full h-64 md:h-80" loading="lazy">
    </figure>
    <figure class="rounded-lg overflow-hidden shadow-lg">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/torre-muskiz-2.jpg"
           alt="Detalle de la Torre de Muskiz"
           class="object-cover w-full h-64 md:h-80" loading="lazy">
    </figure>
  </section>

  <section class="mb-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-3">🏰 Qué ver y hacer</h2>
    <div class="grid md:grid-cols-2 gap-4 text-gray-700 text-sm">
      <div class="p-4 bg-white border rounded-lg shadow hover:shadow-md transition">
        🏺 Visita guiada por la torre y la historia medieval
      </div>
      <div class="p-4 bg-white border rounded-lg shadow hover:shadow-md transition">
        📜 Exposiciones sobre arquitectura y patrimonio
      </div>
      <div class="p-4 bg-white border rounded-lg shadow hover:shadow-md transition">
        📸 Fotografía de la torre y sus alrededores
      </div>
      <div class="p-4 bg-white border rounded-lg shadow hover:shadow-md transition">
        🌳 Paseos por el entorno y jardines históricos
      </div>
    </div>
  </section>

  <section class="mb-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-3">📍 Información práctica</h2>
    <ul class="list-disc pl-5 text-gray-700 space-y-1 text-sm">
      <li><strong>Dirección:</strong> Calle Torre, s/n, Muskiz, Bizkaia, España</li>
      <li><strong>Teléfono:</strong> <a href="tel:+349486XXXXX" class="text-gray-800 underline">+34 948 6XX XXX</a></li>
      <li><strong>Sitio web oficial:</strong> <a href="https://www.torre-muskiz.org" target="_blank" rel="noopener noreferrer" class="text-gray-800 underline">www.torre-muskiz.org</a></li>
      <li><strong>Horario:</strong> 10:00 - 18:00 (Lunes a Domingo)</li>
      <li><strong>Accesibilidad:</strong> Acceso adaptado parcialmente</li>
    </ul>
  </section>

<section class="mb-8">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12127.XXXXXXX"
    width="100%"
    height="450"
    style="border:0; border-radius:8px;"
    allowfullscreen=""
    loading="lazy"
    title="Mapa del Centro de Interpretación de Urdaibai en Ibarrangelu">
  </iframe>
</section>


  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>

</main>
