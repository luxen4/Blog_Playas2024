<?php $region = "Cantabria"; $region_minuscula = strtolower($region); $carpeta = 'castro-urdiales'; ?>
<?php define('PATH_HREF_CARPETA', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}");?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Senderos oficiales en Castro-Urdiales</title>
  <meta name="description" content="Explora los senderos oficiales señalizados por el Ayuntamiento de Castro-Urdiales: rutas seguras con miradores, áreas de descanso y paneles informativos.">
  <meta name="author" content="Adrián Laya García" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph -->
  <meta property="og:title" content="Senderos señalizados en Castro-Urdiales" />
  <meta property="og:description" content="Disfruta de rutas seguras y bien señalizadas con vistas, paneles informativos y espacios naturales en Castro-Urdiales." />
  <meta property="og:image" content="https://tusitio.com/imagenes/senderos-castro-urdiales.jpg" />
  <meta property="og:url" content="https://tusitio.com/senderos-castro-urdiales.php" />
  <meta property="og:type" content="website" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900 font-sans">
  <header class="bg-green-100 p-6 text-center shadow-md">
    <h1 class="text-3xl font-bold text-green-800">Senderos Oficiales en Castro-Urdiales</h1>
    <p class="mt-2 text-lg text-green-700">Rutas señalizadas para disfrutar con seguridad y naturaleza</p>
  </header>

  <main class="max-w-4xl mx-auto p-6 space-y-8">
    <section>
      <img src="<?= PATH_HREF_CARPETA ?>/ocio/pages/imagenes/sendero-castro-urdiales.jpg" alt="Sendero junto al mar en Castro-Urdiales" class="rounded-xl shadow w-full">
      <p class="mt-4">
        El Ayuntamiento de Castro-Urdiales ha trabajado activamente en el diseño y señalización de una red de <strong>senderos oficiales</strong>. Estas rutas están perfectamente documentadas y pensadas para recorridos seguros por la costa y el interior del municipio.
      </p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-green-800">Características de los senderos</h2>
      <ul class="list-disc list-inside mt-2">
        <li>Señalización clara y continua</li>
        <li>Miradores naturales con vistas al Cantábrico</li>
        <li>Áreas de descanso con bancos y sombra</li>
        <li>Paneles interpretativos sobre flora, fauna e historia</li>
        <li>Rutas accesibles para familias y personas mayores</li>
      </ul>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-green-800">Algunas rutas destacadas</h2>
      <div class="grid md:grid-cols-2 gap-6 mt-4">
        <div class="bg-green-50 p-4 rounded-xl shadow">
          <h3 class="text-lg font-semibold text-green-700">Sendero Puerto - Dícido</h3>
          <p>Desde el centro histórico hasta la antigua mina de Dícido. Suave, familiar y costero.</p>
        </div>
        <div class="bg-green-50 p-4 rounded-xl shadow">
          <h3 class="text-lg font-semibold text-green-700">Camino a la Playa de Sonabia</h3>
          <p>Un paseo natural con vistas abiertas, ideal para los amantes del mar y la tranquilidad.</p>
        </div>
      </div>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-green-800">Recomendaciones</h2>
      <p class="mt-2">
        Lleva calzado cómodo, agua y protección solar. Respeta la señalización y cuida el entorno natural. Algunos senderos tienen zonas sin sombra, así que evita las horas centrales del día en verano.
      </p>
    </section>

    <section class="mt-6 text-center">
      <a href="https://turismo.castro-urdiales.net/" target="_blank" class="inline-block bg-green-600 text-white px-5 py-3 rounded-xl shadow hover:bg-green-700 transition">
        Más info oficial en Turismo Castro-Urdiales
      </a>
    </section>
  </main>

  <footer class="bg-green-100 text-center p-4 mt-12 text-sm text-green-800">
    &copy; 2025 Blog Playas 2025 - Adrián Laya García
  </footer>
</body>
</html>