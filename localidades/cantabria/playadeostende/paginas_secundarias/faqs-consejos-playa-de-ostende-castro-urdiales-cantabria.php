<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FAQ & Consejos – Playa de Ostende</title>

  <?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; ?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>

  <?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/localizacion-playa.php"; ?>

  <?php require PATH_RAIZ_LOCALIDADES_CARPETA_ETIQUETAS_META."/faqs_consejos.php"; ?>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php"; ?>

  <!-- Structured Data -->
  <?php require PATH_RAIZ_LOCALIDADES_CARPETA_JSON_LD.'/faq_ldjson.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_CARPETA_JSON_LD.'/consejos_ldjson.php'; ?>

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="./css/styles.css" />

</head>

<body>
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/header.php"; ?>

  <main id="main-content" role="main" class="py-5">
    <div class="container">

      <!-- FAQ Section -->
      <section id="faqs" aria-labelledby="faq-heading">
        <header class="section-header">
          <h2><i class="fas fa-question-circle"></i> Preguntas Frecuentes</h2>
          <p class="lead">Información clave para aprovechar tu visita a la Playa de Ostende</p>
        </header>
        <div class="faq-section">
          <dl>
            <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Cómo es la arena de la Playa de Ostende?</dt>
            <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Tiene arena fina y dorada, ideal para caminar descalzo o para juegos infantiles.</dd>

            <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Está adaptada para personas con movilidad reducida?</dt>
            <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Sí, cuenta con accesos adaptados, pasarelas, baños accesibles y zonas reservadas.</dd>

            <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Qué deportes se pueden practicar en esta playa?</dt>
            <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Puedes practicar <a href="/surf-en-cantabria/" title="Surf en Cantabria">surf</a>, paddle surf, pesca recreativa y realizar rutas por el litoral cantábrico.</dd>

            <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Qué servicios hay disponibles?</dt>
            <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Dispone de duchas, aseos, vigilancia, chiringuitos, parque infantil y aparcamiento cercano.</dd>

            <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Dónde puedo ver más información sobre esta playa?</dt>
            <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Visita nuestra <a href="./caracteristicas-playa-de-ostende-cantabria.php" title="Guía Playa de Ostende">guía completa de la Playa de Ostende</a> para conocer todas sus características.</dd>
          </dl>
        </div>



        <!-- Consejos Útiles -->
        <header class="section-header">
          <h2><i class="fas fa-info-circle"></i> Consejos Útiles</h2>
          <p class="lead">Todo lo que necesitas saber para planificar tu visita a Ostende</p>
        </header>
        <div class="consejos-section">
          <ul class="list-unstyled">
            <li class="my-4">
              <i class="fas fa-calendar-day" style="color: #27ae60;"></i>
              <strong>¿Cuándo visitar?</strong><br>
              Los mejores meses para disfrutar del sol y el mar son entre <time datetime="2025-06">junio</time> y <time datetime="2025-09">septiembre</time>. Para evitar aglomeraciones, considera la primavera (<time datetime="2025-04">abril</time>–<time datetime="2025-05">mayo</time>) y el otoño (<time datetime="2025-10">octubre</time>).
            </li>
            <li class="my-4">
              <i class="fas fa-umbrella-beach" style="color: #f39c12;"></i>
              <strong>¿Qué llevar?</strong><br>
              Traje de baño, protector solar SPF 50, sombrero, toalla, tabla de surf o paddle (si practicas), y calzado cómodo para paseos por la arena y los acantilados.
            </li>
            <li class="my-4">
              <i class="fas fa-map-marker-alt" style="color: #8e44ad;"></i>
              <strong>Lugares cercanos para explorar:</strong><br>
              No te pierdas el <a href="https://turismodecantabria.com/disfrutala/naturaleza/parque-natural-de-las-dunas-de-liencres/" target="_blank" rel="noopener noreferrer" title="Parque Natural de las Dunas de Liencres">Parque Natural de las Dunas de Liencres</a> o un paseo por <a href="https://turismo.santander.es/" target="_blank" rel="noopener noreferrer" title="Turismo en Santander">Santander</a>, accesible en barco en menos de 30 min.
            </li>
          </ul>
        </div>
      </section>
    </div>
  
  </main>


    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/footer.php"; ?>
    <?php require PATH_RAIZ . "/anuncios/pop-up-publicitario2.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>

</body>

</html>    

<?php //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_botas_hombre.php'; ?>
<?php //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_shorts_hombre.php';  ?>
