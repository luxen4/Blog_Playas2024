<?php
$titulo = 'Castillo de Azay-le-Rideau'; 
$carpeta = 'castillo-de-azay-le-rideau'; 
$archivo_name = 'castillo-de-azay-le-rideau';
$presentacion = '🏰 El Castillo de Azay-le-Rideau, en el Valle del Loira, Francia, es una joya renacentista rodeada de un foso de agua que le da un encanto mágico. Ideal para amantes de la historia, arquitectura y paisajes románticos.';
$keywords = 'Castillo de Azay-le-Rideau, Valle del Loira, castillos Francia, turismo histórico, arquitectura renacentista';
$canonical = 'https://www.tusitio.com/'.$archivo_name.'.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $presentacion; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="Tu Nombre">
  <link rel="canonical" href="<?php echo $canonical; ?>">
  <meta property="og:title" content="<?php echo $titulo; ?>">
  <meta property="og:description" content="<?php echo $presentacion; ?>">
  <meta property="og:image" content="https://www.tusitio.com/imagenes/<?php echo $carpeta; ?>/azay1.jpg">
  <meta property="og:url" content="<?php echo $canonical; ?>">
  <meta name="twitter:card" content="summary_large_image">
  <title><?php echo $titulo; ?> | Turismo en el Valle del Loira</title>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
  <!-- Header -->
  <header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
      <h1 class="text-2xl font-bold text-indigo-600"><?php echo $titulo; ?></h1>
      <nav class="space-x-6">
        <a href="#galeria" class="hover:text-indigo-600">Galería</a>
        <a href="#info" class="hover:text-indigo-600">Información</a>
        <a href="#historia" class="hover:text-indigo-600">Historia</a>
      </nav>
    </div>
  </header>

  <!-- Presentación -->
  <main class="max-w-6xl mx-auto px-4 py-10">
    <section class="text-center mb-12">
      <p class="text-lg text-gray-700"><?php echo $presentacion; ?></p>
      <a href="https://www.loirevalley-france.co.uk/azay-le-rideau" target="_blank" rel="noopener noreferrer" class="mt-6 inline-block bg-indigo-600 text-white py-2 px-6 rounded-full shadow-lg hover:bg-indigo-500 transition">Sitio Oficial</a>
    </section>

    <!-- Galería -->
    <section id="galeria" class="mb-16">
      <h2 class="text-2xl font-semibold text-indigo-700 mb-6 flex items-center"><i data-lucide="image" class="mr-2 text-indigo-600"></i>Galería de imágenes</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <img src="imagenes/<?php echo $carpeta; ?>/azay1.jpg" alt="Vista aérea del Castillo de Azay-le-Rideau" class="rounded-2xl shadow-lg hover:scale-105 transition-transform">
        <img src="imagenes/<?php echo $carpeta; ?>/azay2.jpg" alt="Castillo reflejado en el agua" class="rounded-2xl shadow-lg hover:scale-105 transition-transform">
        <img src="imagenes/<?php echo $carpeta; ?>/azay3.jpg" alt="Jardines del Castillo" class="rounded-2xl shadow-lg hover:scale-105 transition-transform">
      </div>
    </section>

    <!-- Información -->
    <section id="info" class="mb-16">
      <h2 class="text-2xl font-semibold text-indigo-700 mb-6 flex items-center"><i data-lucide="map-pin" class="mr-2 text-red-500"></i>Información útil</h2>
      <ul class="space-y-3">
        <li><strong>Ubicación:</strong> Azay-le-Rideau, Valle del Loira, Francia.</li>
        <li><strong>Estilo:</strong> Renacentista, Siglo XVI.</li>
        <li><strong>Horario:</strong> Abierto todos los días, horarios variables por temporada.</li>
        <li><strong>Entrada:</strong> Desde 12 € (adultos).</li>
        <li><a href="https://goo.gl/maps/ncTSxWZsW5C2" target="_blank" rel="noopener noreferrer" class="text-indigo-600 hover:underline">Ver en Google Maps</a></li>
      </ul>
    </section>

    <!-- Historia -->
    <section id="historia" class="mb-16">
      <h2 class="text-2xl font-semibold text-indigo-700 mb-6 flex items-center"><i data-lucide="book-open" class="mr-2 text-green-500"></i>Historia y curiosidades</h2>
      <p class="text-gray-700 leading-relaxed">
        El Castillo de Azay-le-Rideau fue construido durante el reinado de Francisco I en el siglo XVI, mezclando elegancia renacentista italiana con tradición arquitectónica francesa. Rodeado por un foso que refleja su silueta, es uno de los castillos más pintorescos del Valle del Loira. En su interior se encuentran muebles originales, tapices y colecciones de arte que evocan la vida cortesana de la época. 
      </p>
      <p class="text-gray-700 leading-relaxed mt-4">
        Fue clasificado como Monumento Histórico en 1914 y restaurado por el Centro de Monumentos Nacionales de Francia. Hoy es una de las paradas más recomendadas para quienes recorren la ruta de los castillos del Loira.
      </p>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-200 py-6 text-center">
    <p>&copy; <?php echo date("Y"); ?> Información sobre <?php echo $titulo; ?>. Diseñado con ❤️ y Tailwind CSS.</p>
  </footer>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
