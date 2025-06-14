<?php define('PATH_HREF_CARPETA', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}");?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Playa de Sonabia | Paraíso Natural en Cantabria</title>
    <meta name="description" content="Descubre la Playa de Sonabia, un rincón virgen entre montañas y mar, perfecto para los amantes de la naturaleza y el relax.">
    <meta name="author" content="Adrián Laya García" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph -->
    <meta property="og:title" content="Playa de Sonabia | Paraíso Natural en Cantabria" />
    <meta property="og:description" content="Información, fotos y consejos para visitar la Playa de Sonabia en la costa oriental de Cantabria." />
    <meta property="og:image" content="https://tusitio.com/imagenes/playa-sonabia.jpg" />
    <meta property="og:url" content="https://tusitio.com/playa-sonabia.php" />
    <meta property="og:type" content="article" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Playa de Sonabia | Naturaleza en estado puro" />
    <meta name="twitter:description" content="Todo lo que necesitas saber sobre la Playa de Sonabia: acceso, entorno, rutas y consejos de viaje." />
    <meta name="twitter:image" content="https://tusitio.com/imagenes/playa-sonabia.jpg" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white text-gray-800 font-sans">
    <header class="bg-blue-100 p-6 shadow-md">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-blue-800">Playa de Sonabia</h1>
        <p class="mt-2 text-lg text-blue-700">Una joya natural entre acantilados y el Cantábrico</p>
      </div>
    </header>

    <main class="max-w-4xl mx-auto p-6 space-y-8">
      <section>
        
      <?php $region = "Cantabria"; $region_minuscula = strtolower($region); $carpeta = 'castro-urdiales'; ?>
        <img src="<?= PATH_HREF_CARPETA ?>/ocio/pages/imagenes/playa-de-sonabia.png" alt="Vista aérea de la Playa de Sonabia" class="rounded-2xl shadow-lg w-full" />
        <p class="mt-4 text-lg">
          La <strong>Playa de Sonabia</strong>, también conocida como "La Ballena", es un rincón escondido en la costa oriental de Cantabria, entre Castro-Urdiales y Laredo. Rodeada de montañas y prados verdes, esta cala virgen ofrece un entorno natural único ideal para desconectar del bullicio urbano.
        </p>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-blue-700 mb-2">Cómo llegar</h2>
        <p>
          El acceso se realiza a pie desde el pequeño pueblo de Sonabia. Hay un aparcamiento rural limitado. Se recomienda llegar temprano en verano y respetar el entorno.
        </p>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-blue-700 mb-2">Características</h2>
        <ul class="list-disc list-inside space-y-1">
          <li>Arena dorada y fina</li>
          <li>Entorno natural protegido</li>
          <li>Ideal para senderismo y fotografía</li>
          <li>Zona no urbanizada, sin servicios</li>
        </ul>
      </section>

      <section>
        <h2 class="text-2xl font-semibold text-blue-700 mb-2">Consejos</h2>
        <p>
          Lleva calzado cómodo, protector solar y agua. Es un entorno ideal para el nudismo y la tranquilidad, pero hay que ser respetuoso con la flora y fauna local.
        </p>
      </section>
    </main>

    <footer class="bg-blue-100 text-center p-4 mt-12 text-sm text-blue-800">
      &copy; 2025 Blog Playas 2025 - Adrián Laya García
    </footer>
  </body>
</html>
