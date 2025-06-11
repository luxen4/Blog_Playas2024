<?php
  $nombre_localidad = "Castro-Urdiales";
  $region = "Cantabria";
  $url_wikiloc = "https://es.wikiloc.com/rutas/senderismo/espana/cantabria/castro-urdiales";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Explora las mejores rutas costeras en Castro-Urdiales: senderos junto al mar, miradores naturales, naturaleza y aventura en la costa de Cantabria." />
  <meta name="keywords" content="rutas costeras Castro-Urdiales, senderismo Cantabria, miradores en Castro, caminos costeros, senderos junto al mar" />
  <title>Rutas Costeras en <?= $nombre_localidad; ?>: Naturaleza y Mar en <?= $region; ?></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>

<body>
  <article class="container py-5">
    <header class="mb-5 text-center">
      <h1 class="text-success"><i class="fas fa-route"></i> Rutas Costeras en <?= $nombre_localidad; ?></h1>
      <p class="lead">Una escapada perfecta entre acantilados, senderos y miradores naturales en la costa de <?= $region; ?></p>
    </header>

    <section class="mb-4">
      <p>
        Si estás planeando una visita a <strong><?= $nombre_localidad; ?></strong> y te apasiona caminar entre paisajes naturales con olor a salitre, estás de suerte. Este pintoresco municipio cántabro no solo destaca por su patrimonio y playas, sino también por su red de <strong>rutas costeras</strong> que lo rodean. A continuación, te presentamos algunas de las mejores opciones para hacer senderismo junto al mar.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-water"></i> Acantilados de Sonabia</h2>
      <p>
        Uno de los caminos más espectaculares parte desde la <a href="/playa-de-sonabia.php">Playa de Sonabia</a>, donde los acantilados y el sonido del oleaje ofrecen una experiencia inolvidable. Este tramo, que bordea zonas de especial protección natural, es perfecto para avistamiento de aves y fotografía de paisaje. Se recomienda calzado adecuado y protección solar.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-walking"></i> De Castro a Mioño por la costa</h2>
      <p>
        Una ruta suave y accesible que conecta el centro histórico con Mioño. Ideal para familias, este recorrido pasa por zonas verdes, pasarelas de madera y ofrece panorámicas del litoral. No te pierdas el <a href="/puerto.php">puerto pesquero</a> al inicio y los restos de la <strong>mina de Dícido</strong> al final.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-mountain-sun"></i> Subida al Monte Cueto</h2>
      <p>
        Para quienes buscan una experiencia más deportiva, el ascenso al Monte Cueto brinda un recorrido desafiante, pero con recompensas visuales excepcionales. Desde lo alto se domina toda la bahía de Castro-Urdiales y parte de la costa oriental de Cantabria.
      </p>
    </section>

    <section class="mb-5">
      <h3 class="h5 text-info"><i class="fas fa-map-signs"></i> Senderos señalizados y rutas oficiales</h3>
      <p>
        El Ayuntamiento ha trabajado en señalizar varios <a href="/senderos-costeros-senalizados.php">senderos oficiales</a> que puedes seguir con total seguridad. Están bien documentados e incluyen puntos de interés como miradores, áreas de descanso y paneles interpretativos.
      </p>
    </section>

    <section class="mb-5">
      <h3 class="h5 text-warning"><i class="fas fa-camera-retro"></i> Miradores y fotografía</h3>
      <p>
        Algunos de los lugares más fotogénicos son el <a href="/mirador-cotolino.php">Mirador de Cotolino</a>, los acantilados de Islares o el entorno del Castillo-Faro. Si te gusta capturar atardeceres, estos rincones te regalarán luces únicas frente al Cantábrico.
      </p>
    </section>

    <section class="mt-5 text-center">
      <h3 class="mb-3">🌿 ¿Quieres más rutas?</h3>
      <p>
        Descubre mapas y rutas compartidas por senderistas en:
        <br />
        <a href="<?= $url_wikiloc; ?>" class="btn btn-outline-success mt-3" target="_blank" rel="noopener noreferrer">
          <i class="fas fa-map"></i> Wikiloc: Rutas en Castro-Urdiales
        </a>
      </p>

      <p class="mt-4">
        🧭 ¿Ya conoces todo lo que ofrece esta ciudad? Mira nuestra guía completa:
        <br />
        <a href="/castro-urdiales.php" class="btn btn-primary mt-3">Ver guía de Castro-Urdiales</a>
      </p>
    </section>
  </article>

  <footer class="text-center py-4 bg-light mt-5">
    <small>&copy; <?= date('Y'); ?> Playas2024 | Blog de naturaleza y turismo activo en Cantabria</small>
  </footer>

  <!-- Datos estructurados para blogpost -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "Rutas Costeras en Castro-Urdiales: Naturaleza y Mar en Cantabria",
    "description": "Descubre las mejores rutas de senderismo junto al mar en Castro-Urdiales, desde los acantilados de Sonabia hasta el Monte Cueto. Ideal para senderistas y amantes de la fotografía.",
    "datePublished": "<?= date('Y-m-d'); ?>",
    "author": {
      "@type": "Organization",
      "name": "Playas2024"
    },
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://tusitio.com/blog/rutas-costeras-castro-urdiales"
    }
  }
  </script>
</body>
</html>
