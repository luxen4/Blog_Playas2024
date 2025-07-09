<?php 
  $title = 'Playas del Cantabrico'; $lugar_interes= 'playas-cantabrico';
  $region_minuscula = 'cantabria';
  $carpeta = '';
  $tema_footer = 'Playas del Cantábrico';
  $tema = $tema_footer;
  $color_page = 'orange';

  $localidad_minuscula='santona'; $carpeta='santona'; $tema='actividades-playa-deberria'; $lugar_interes='playa-de berria';

  $author_content = 'Adrián Laya García'; 
?>


<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actividades en la Playa de Berria – Santoña, Cantabria</title>
  <meta name="description" content="Descubre actividades al aire libre, surf, kayak y senderismo en la Playa de Berria, Santoña. Reserva clases o tours guiados.">
  <meta name="keywords" content="Playa de Berria, actividades Santoña, surf Berria, kayak Cantabria, senderismo en marismas">
  <meta name="author" content="berriaactivities.com">

  <!-- Open Graph -->
  <meta property="og:title" content="Actividades en la Playa de Berria - Santoña">
  <meta property="og:description" content="Disfruta surf, kayak y naturaleza en una de las mejores playas de Cantabria.">
  <meta property="og:image" content="https://www.berriaactivities.com/og-image.jpg">
  <meta property="og:url" content="https://www.berriaactivities.com">
  <meta property="og:type" content="website">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-white text-gray-800">

  <!-- Hero -->
  <header class="bg-blue-50 py-12">
    <div class="max-w-5xl mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-blue-700">🌊 Actividades en la Playa de Berria</h1>
      <p class="mt-4 text-lg text-blue-600">Vive experiencias únicas en Santoña: surf, kayak, senderismo y más</p>
    </div>
  </header>

  <!-- Actividades -->
  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-semibold text-emerald-700 mb-10 text-center">🚴 Actividades destacadas</h2>

      <div class="grid md:grid-cols-3 gap-8">
        <!-- Surf -->
        <div class="bg-blue-100 p-6 rounded-xl shadow hover:shadow-md transition">
          <i class="bi bi-water fs-1 text-blue-700 text-4xl mb-3"></i>
          <h3 class="text-xl font-bold text-blue-800 mb-2">Clases de surf</h3>
          <p class="text-sm text-gray-700 mb-3">Aprende o mejora tu técnica con instructores locales certificados.</p>
          <a href="https://escueladesurfberria.com" class="text-blue-600 font-medium hover:underline" target="_blank">Más info & reservas →</a>
        </div>

        <!-- Kayak -->
        <div class="bg-teal-100 p-6 rounded-xl shadow hover:shadow-md transition">
          <i class="bi bi-boats text-teal-700 text-4xl mb-3"></i>
          <h3 class="text-xl font-bold text-teal-800 mb-2">Kayak por la bahía</h3>
          <p class="text-sm text-gray-700 mb-3">Rema entre marismas, descubre la fauna local y disfruta del atardecer.</p>
          <a href="https://cantabriakayak.com" class="text-teal-700 font-medium hover:underline" target="_blank">Ver excursiones →</a>
        </div>

        <!-- Senderismo -->
        <div class="bg-green-100 p-6 rounded-xl shadow hover:shadow-md transition">
          <i class="bi bi-tree-fill text-green-700 text-4xl mb-3"></i>
          <h3 class="text-xl font-bold text-green-800 mb-2">Rutas a pie</h3>
          <p class="text-sm text-gray-700 mb-3">Recorre senderos por el monte Buciero o las marismas del Asón.</p>
          <a href="https://turismosantona.net/rutas" class="text-green-700 font-medium hover:underline" target="_blank">Explorar rutas →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section class="bg-gray-50 py-14">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">📞 Contacto y reservas</h2>

      <ul class="text-gray-700 text-sm space-y-3 text-center">
        <li><i class="bi bi-telephone-fill text-green-600 mr-2"></i> <a href="tel:+34942859065" class="text-blue-600 hover:underline">+34 942 85 90 65</a></li>
        <li><i class="bi bi-globe2 text-indigo-600 mr-2"></i> <a href="https://www.turismosantona.net" target="_blank" class="text-blue-600 hover:underline">www.turismosantona.net</a></li>
        <li><i class="bi bi-geo-alt-fill text-red-500 mr-2"></i> Playa de Berria, Santoña, Cantabria</li>
      </ul>
    </div>
  </section>

  <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>

  <!-- Footer -->
  <footer class="bg-blue-800 text-white py-6 text-center text-sm">
    <p>© <?= date('Y') ?> berriaactivities.com - Diseñado para los amantes del mar y la naturaleza 🌿</p>
    <p>
      <a href="https://www.instagram.com/berriaactivities" class="underline hover:text-gray-300" target="_blank">
        Instagram
      </a>
      |
      <a href="https://maps.app.goo.gl/BerriaSantoña" class="underline hover:text-gray-300" target="_blank">
        Google Maps
      </a>
    </p>
  </footer>
</body>
</html>
