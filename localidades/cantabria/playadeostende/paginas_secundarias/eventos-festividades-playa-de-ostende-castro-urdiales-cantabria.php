<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eventos en la Playa de Ostende – Castro-Urdiales</title>

  <?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; $tema='eventos_festividades';?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
  <?php require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/head_generico.php";?> 
</head>

<body>

  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/header.php"; ?>
  <main id="main-content" role="main" class="py-5">
    <div class="container">

      <section id="eventos" class="container py-5">
        <header class="text-center mb-4">
          <h2 class="text-primary">🎉 Eventos y Fiestas en la Playa de Ostende</h2>
          <p>Vive la <strong>tradición, cultura y deporte</strong> en una de las playas más emblemáticas de <a href="https://es.wikipedia.org/wiki/Castro-Urdiales" title="Castro-Urdiales">Castro-Urdiales</a>. Aquí tienes una selección de los eventos más destacados del verano.</p>
        </header>

        <div class="event-box">
          <ul class="list-unstyled">
            <li class="my-4">
              <i class="fas fa-cross" style="color: #9b59b6;"></i>
              <strong>Fiesta de Nuestra Señora del Carmen</strong> <time datetime="2025-07-16">(16 de julio)</time><br>
              Procesión marítima y celebraciones en honor a la patrona de los pescadores, una tradición muy arraigada en la cultura local.
            </li>

            <li class="my-4">
              <i class="fas fa-fire" style="color: #f39c12;"></i>
              <strong>Fiesta de San Juan</strong> <time datetime="2025-06-23">(23 de junio)</time><br>
              Noche mágica con hogueras en la playa, música en vivo y actividades familiares junto al mar Cantábrico.
            </li>

            <li class="my-4">
              <i class="fas fa-anchor" style="color: #3498db;"></i>
              <strong>Campeonatos de Surf en Ostende</strong> <time datetime="2025-08-10">(agosto)</time><br>
              Competición de surf que atrae a deportistas nacionales e internacionales a las olas de Ostende.
            </li>

            <li class="my-4">
              <i class="fas fa-store" style="color: #2ecc71;"></i>
              <strong>Mercado de Verano</strong> <time datetime="2025-07-01">(julio-agosto)</time><br>
              Mercadillos con artesanía local, gastronomía típica cántabra y productos de proximidad, ideales para disfrutar en familia.
            </li>
          </ul>

          <p>¿Quieres saber más sobre la cultura local? Visita nuestra <a href="/agenda-cultural/" title="Agenda cultural en Cantabria">agenda cultural</a>.</p>
        </div>
      </section>

      <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>
    </div>
  </main>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/footer.php"; ?>
  <?php require PATH_RAIZ . "/anuncios/pop-up-publicitario2.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>
</body>

</html>