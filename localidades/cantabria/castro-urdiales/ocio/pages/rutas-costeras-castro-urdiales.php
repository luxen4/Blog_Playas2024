<?php $region = "Cantabria"; $region_minuscula = strtolower($region); $carpeta = 'castro-urdiales';  $nombre_localidad = "Castro-Urdiales"; $tema='restaurantes';?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/localidades/{$region_minuscula}/{$carpeta}/ocio/pages/previo.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>


 <?php require PATH_RAIZ_LOCALIDADES_OCIO_HEAD. "/etiquetas-meta.php"; ?>
    <title>Rutas Costeras en <?= $nombre_localidad; ?>: Naturaleza y Mar en <?= $region; ?></title>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD . "/links-generico.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_OCIO_SCHEMAS_HEAD . "/schema-org_rutas-costeras-head.php"; ?>
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
      <h2 class="h4 text-primary"><i class="fas fa-water"></i> Acantilados de Sonabia</h2><p>
        Uno de los caminos más espectaculares parte desde la <a href="<?= PATH_HREF_CARPETA ?>\ocio\pages\playa-de-sonabia.php">Playa de Sonabia</a>, donde los acantilados y el sonido del oleaje ofrecen una experiencia inolvidable. Este tramo, que bordea zonas de especial protección natural, es perfecto para avistamiento de aves y fotografía de paisaje. Se recomienda calzado adecuado y protección solar.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-walking"></i> De Castro a Mioño por la costa</h2>
      <p>
        Una ruta suave y accesible que conecta el centro histórico con Mioño. Ideal para familias, este recorrido pasa por zonas verdes, pasarelas de madera y ofrece panorámicas del litoral. No te pierdas el <a href="<?= PATH_HREF_CARPETA ?>/ocio/pages/puerto-pesquero-mina-dicido.php">puerto pesquero</a> al inicio y los restos de la <strong>mina de Dícido</strong> al final.
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
        El Ayuntamiento ha trabajado en señalizar varios <a href="<?= PATH_HREF_CARPETA ?>/ocio/pages/senderos-costeros-rutas-oficiales-castro-urdiales.php">senderos oficiales</a> que puedes seguir con total seguridad. Están bien documentados e incluyen puntos de interés como miradores, áreas de descanso y paneles interpretativos.
      </p>
    </section>

    <section class="mb-5">
      <h3 class="h5 text-warning"><i class="fas fa-camera-retro"></i> Miradores y fotografía</h3>
      <p>
        Algunos de los lugares más fotogénicos son el <a href="<?= PATH_HREF_CARPETA ?>/ocio/pages/mirador-de-catolino-castro-urdiales.php">Mirador de Cotolino</a>, los acantilados de Islares o el entorno del Castillo-Faro. Si te gusta capturar atardeceres, estos rincones te regalarán luces únicas frente al Cantábrico.
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
        <a href="<?= PATH_HREF_CARPETA; ?>/ocio/pages/guia-completa-castro-urdiales.php" class="btn btn-primary mt-3">Ver guía de Castro-Urdiales</a>
      </p>
    </section>
  </article>

  <footer class="text-center py-4 bg-light mt-5">
    <small>&copy; <?= date('Y'); ?> Playas2024 | Blog de naturaleza y turismo activo en Cantabria</small>
  </footer>
      <?php require PATH_RAIZ_LOCALIDADES_OCIO_SCHEMAS_BODY . '/schema-org_rutas-costeras.php'; // Por estructura, va aquí! ?>

</body>
</html>
