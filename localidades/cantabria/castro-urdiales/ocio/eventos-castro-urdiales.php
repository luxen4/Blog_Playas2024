<?php
  $nombre_localidad = "Castro-Urdiales";
  $region = "Cantabria";
  $url_ayuntamiento = "https://www.castro-urdiales.net/";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Conoce los mejores eventos y fiestas en Castro-Urdiales. Programación cultural, festividades locales, conciertos, ferias y tradiciones en la costa de Cantabria." />
  <meta name="keywords" content="eventos en Castro-Urdiales, fiestas en Cantabria, conciertos, actividades culturales, semana grande Castro, calendario festivo" />
  <title>Eventos y Fiestas en <?= $nombre_localidad; ?> | Agenda Cultural en <?= $region; ?></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>

<body>
  <article class="container py-5">
    <header class="mb-5 text-center">
      <h1 class="text-success"><i class="fas fa-calendar-alt"></i> Eventos y Fiestas en <?= $nombre_localidad; ?></h1>
      <p class="lead">Una guía para vivir las tradiciones, festivales y cultura local en la costa de <?= $region; ?></p>
    </header>

    <section class="mb-4">
      <p>
        <strong><?= $nombre_localidad; ?></strong> no solo es mar y gastronomía. A lo largo del año, su calendario se llena de <strong>fiestas populares, conciertos, ferias y eventos culturales</strong> que atraen tanto a vecinos como a visitantes. Si estás planeando tu viaje, aquí te dejamos las celebraciones más destacadas.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-fish"></i> Canto de la Salve Marinera (julio)</h2>
      <p>
        Un emotivo homenaje a los marineros de la villa. Se celebra el 15 de julio en el <a href="/puerto.php">puerto pesquero</a>, con embarcaciones engalanadas, música coral y un ambiente solemne y mágico. Es uno de los actos más representativos del alma marinera de Castro.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-users"></i> Semana Grande y Fiesta de la Virgen del Carmen</h2>
      <p>
        Durante la segunda quincena de julio, Castro-Urdiales se llena de vida con conciertos al aire libre, pasacalles, mercados, fuegos artificiales y romerías. La procesión marítima de la Virgen del Carmen es un imprescindible visual y espiritual para los locales.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-mask"></i> Pasión Viviente (Semana Santa)</h2>
      <p>
        Declarada Fiesta de Interés Turístico Nacional, se representa el Viernes Santo con más de 600 vecinos recreando la vida y pasión de Cristo por las calles del casco antiguo. Una puesta en escena única y sobrecogedora, ideal para quienes buscan eventos culturales de alto nivel.
      </p>
    </section>

    <section class="mb-5">
      <h2 class="h4 text-primary"><i class="fas fa-drum"></i> Carnaval y San Andrés</h2>
      <p>
        En febrero, el <strong>Carnaval</strong> inunda las calles con disfraces, concursos y desfiles. En noviembre, <strong>San Andrés</strong>, patrón de los pescadores, se celebra con misa marinera, sardinadas populares y música tradicional en honor al oficio pesquero.
      </p>
    </section>

    <section class="mb-5">
      <h3 class="text-info"><i class="fas fa-calendar-check"></i> Agenda cultural actualizada</h3>
      <p>
        Además de las fiestas tradicionales, Castro-Urdiales acoge <strong>exposiciones, teatro, rutas teatralizadas</strong> y jornadas gastronómicas. Consulta la programación actualizada en el portal del ayuntamiento:
        <br />
        <a href="<?= $url_ayuntamiento; ?>" class="btn btn-outline-success mt-2" target="_blank" rel="noopener noreferrer">
          <i class="fas fa-globe-europe"></i> Agenda oficial de eventos
        </a>
      </p>
    </section>

    <section class="mt-5 text-center">
      <h3 class="mb-3">🎉 ¿Te animas a una escapada cultural?</h3>
      <p>
        Vive la tradición y el ambiente festivo de Castro-Urdiales. Y si quieres completar tu visita, consulta también:
        <br />
        <a href="/castro-urdiales.php" class="btn btn-primary mt-3">Guía turística de Castro-Urdiales</a>
      </p>
    </section>
  </article>

  <footer class="text-center py-4 bg-light mt-5">
    <small>&copy; <?= date('Y'); ?> Playas2024 | Blog de eventos, cultura y tradiciones cántabras</small>
  </footer>

  <!-- Datos estructurados para blogpost sobre eventos -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "Eventos y Fiestas en Castro-Urdiales | Agenda Cultural en Cantabria",
    "description": "Conoce las mejores fiestas y eventos de Castro-Urdiales: Pasión Viviente, Semana Grande, Carnaval, conciertos y más. Vive la tradición y cultura de esta villa marinera.",
    "datePublished": "<?= date('Y-m-d'); ?>",
    "author": {
      "@type": "Organization",
      "name": "Playas2024"
    },
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://tusitio.com/blog/eventos-castro-urdiales"
    }
  }
  </script>
</body>
</html>
