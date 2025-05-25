<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Biarritz – Nouvelle-Aquitaine</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Descubre los principales eventos en la Playa de Biarritz: festivales, campeonatos de surf, mercadillos artesanales y actividades culturales de verano." />
  <meta name="keywords" content="Eventos Playa Biarritz, fiestas Biarritz, surf Biarritz, mercado verano Nouvelle-Aquitaine, actividades Biarritz" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-25" />

  <!-- Open Graph -->
  <meta property="og:title" content="Eventos en la Playa de Biarritz – Nouvelle-Aquitaine" />
  <meta property="og:description" content="Vive experiencias únicas en Biarritz: conciertos, surf, ferias artesanas y rutas culturales." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/biarritz/eventos" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/biarritz-eventos.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Eventos en la Playa de Biarritz – Nouvelle-Aquitaine" />
  <meta name="twitter:description" content="Actividades culturales, surf y mercadillos en Biarritz, Nouvelle-Aquitaine." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/biarritz-eventos.jpg" />

  <style>
    body { background-color: #f8f9fa; }
    .event-box { background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .event-box ul { padding-left: 1.2rem; }
    .event-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .event-box i { margin-right: .5rem; }
    time { font-weight: 500; color: #555; }
  </style>
</head>
<body>

  <?php require "./../../../../bloques/estructura/header.php"; ?>

  <?php
  $li_eventos_biarritz = '
  <section id="eventos" class="container py-5">
    <header class="text-center mb-4">
      <h2 class="text-primary">🌊 Eventos y Actividades en la Playa de Biarritz</h2>
      <p>Disfruta de <strong>naturaleza, cultura y deporte</strong> en uno de los destinos costeros más emblemáticos de <a href="https://es.wikipedia.org/wiki/Biarritz" title="Biarritz">Biarritz</a>. Aquí te presentamos los eventos más destacados del verano.</p>
    </header>

    <div class="event-box">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-wave-square" style="color: #3498db;"></i> 
          <strong>Campeonatos Internacionales de Surf</strong> <time datetime="2025-08-10">(10 de agosto)</time><br>
          Competición de surf con participación de profesionales y amateurs en las olas atlánticas de Biarritz.
        </li>

        <li class="my-4">
          <i class="fas fa-music" style="color: #e74c3c;"></i> 
          <strong>Conciertos de Verano en el Paseo Marítimo</strong> <time datetime="2025-07-15">(julio-agosto)</time><br>
          Música en vivo con artistas locales e internacionales en un ambiente vibrante junto al mar.
        </li>

        <li class="my-4">
          <i class="fas fa-hand-holding-heart" style="color: #2ecc71;"></i> 
          <strong>Rutas Culturales y Ecológicas</strong> <time datetime="2025-07-01">(verano)</time><br>
          Excursiones guiadas para descubrir la rica historia y naturaleza de la costa vasca francesa.
        </li>

        <li class="my-4">
          <i class="fas fa-store" style="color: #f1c40f;"></i> 
          <strong>Mercado Artesanal y Gastronómico</strong> <time datetime="2025-07-05">(julio-agosto)</time><br>
          Productos locales, artesanía y especialidades gastronómicas en el mercado semanal frente a la playa.
        </li>
      </ul>

      <p>¿Quieres conocer más actividades en Biarritz? Visita nuestra <a href="/agenda-cultural/" title="Agenda cultural en Biarritz">agenda cultural</a>.</p>
    </div>
  </section>
  ';

  echo $li_eventos_biarritz;
  ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>