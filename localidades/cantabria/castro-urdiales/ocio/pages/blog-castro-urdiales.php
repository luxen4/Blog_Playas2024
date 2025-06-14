<?php $region = "Cantabria"; $region_minuscula = strtolower($region); $carpeta = 'castro-urdiales';  $nombre_localidad = "Castro-Urdiales"; $tema='blog';?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}/ocio/pages/previo.php"; ?>


<?php define('PATH_HREF_RAIZ_LOCALIDAD', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}/"); ?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <?php require PATH_RAIZ_LOCALIDADES_OCIO_HEAD. "/etiquetas-meta.php"; ?>
    <title>🎉 Blog: Eventos en Castro-Urdiales | Fiestas y Agenda Cultural en <?= $region; ?></title>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD . "/links-generico.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_OCIO_SCHEMAS_HEAD . "/schema-org_blog-head.php"; ?>
  </head>

<body>
  <article class="container py-5">
    <header class="mb-5">
      <h1 class="display-5 text-center text-success"><i class="fas fa-calendar-days"></i> Eventos en <?= $nombre_localidad; ?></h1>
      <p class="lead text-center">Fiestas tradicionales, cultura, música y actividades en la costa de <?= $region; ?></p>
    </header>

    <section class="mb-5">
      <p>
        Si estás planeando una visita a <strong><?= $nombre_localidad; ?></strong>, no puedes perderte sus eventos más emblemáticos. Esta villa marinera de Cantabria vibra con celebraciones únicas que combinan tradición, cultura y mucha vida en las calles. Aquí te compartimos una selección de las fiestas y actividades más destacadas.
      </p>
    </section>

    <section class="mb-4">
      <h2 class="h4 text-primary"><i class="fas fa-cross"></i> La Pasión Viviente (Semana Santa)</h2>
      <p>
        Cada Viernes Santo, más de 600 vecinos dan vida a una de las recreaciones más sobrecogedoras de España. La <strong>Pasión Viviente</strong>, declarada Fiesta de Interés Turístico Nacional, transforma el casco histórico en Jerusalén con escenas realistas de la vida y muerte de Jesús.
      </p>
    </section>

    <section class="mb-4">
      <h2 class="h4 text-primary"><i class="fas fa-anchor"></i> Salve Marinera y Día del Carmen</h2>
      <p>
        El 15 y 16 de julio, el puerto se llena de emoción con el <strong>Canto de la Salve Marinera</strong> y la procesión de la <strong>Virgen del Carmen</strong>. Barcos engalanados, música coral y devoción pesquera en una de las fiestas más emotivas del calendario.
      </p>
    </section>

    <section class="mb-4">
      <h2 class="h4 text-primary"><i class="fas fa-music"></i> Semana Grande (finales de julio)</h2>
      <p>
        Durante la <strong>Semana Grande</strong>, Castro se transforma: conciertos gratuitos, ferias gastronómicas, desfiles, fuegos artificiales y actividades para todos los públicos llenan de vida cada rincón. Una cita imprescindible para locales y turistas.
      </p>
    </section>

    <section class="mb-4">
      <h2 class="h4 text-primary"><i class="fas fa-masks-theater"></i> Carnaval</h2>
      <p>
        En febrero, las calles se llenan de color y creatividad con disfraces, concursos y espectáculos. El <strong>Carnaval de Castro-Urdiales</strong> es uno de los más animados de la región.
      </p>
    </section>

    <section class="mb-4">
      <h2 class="h4 text-primary"><i class="fas fa-fish"></i> Fiesta de San Andrés (30 de noviembre)</h2>
      <p>
        Una celebración marinera tradicional con sardinadas populares, danzas y procesiones en honor al patrón de los pescadores. Ideal para los que buscan conocer la esencia más auténtica de la villa.
      </p>
    </section>

    <section class="mt-5 text-center">
      <h3 class="text-info">📅 ¿Quieres ver la agenda completa?</h3>
      <p>
        Consulta la programación actualizada de actividades culturales, deportivas y festivas en el sitio oficial del ayuntamiento:
      </p>
      <a href="<?= $url_ayuntamiento; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success mt-2">
        <i class="fas fa-calendar-check"></i> Agenda oficial de Castro-Urdiales
      </a>
    </section>

    <section class="mt-5 text-center">
      <h3 class="mb-3">🧳 ¿Vienes a Castro en fechas especiales?</h3>
      <p>
        Acompaña tu visita con <a href="/rutas-costeras-castro-urdiales.php">rutas por los acantilados</a>, una parada en los <a href="/restaurantes.php">mejores restaurantes</a> y paseos por el <a href="/casco-antiguo.php">casco histórico</a>.
      </p>


      <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/guia-completa-castro-urdiales.php" class="btn btn-primary mt-3">Ver guía completa de Castro-Urdiales</a>
    </section>
  </article>

  <footer class="text-center py-4 bg-light mt-5">
    <small>&copy; <?= date('Y'); ?> Playas2025 | Blog de experiencias, cultura y turismo en Cantabria</small>
  </footer>

    <?php require PATH_RAIZ_LOCALIDADES_OCIO_SCHEMAS_BODY . '/schema-org_blog.php'; // Por estructura, va aquí! ?>

</body>
</html>
