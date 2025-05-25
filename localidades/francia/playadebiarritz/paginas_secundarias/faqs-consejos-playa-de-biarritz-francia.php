<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FAQ & Consejos – Playa de Biarritz (Francia)</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <meta name="description" content="Resuelve tus dudas y descubre los mejores consejos para disfrutar tu visita a la Playa de Biarritz, en la costa vasca francesa." />
  <meta name="keywords" content="FAQ Playa de Biarritz, consejos Biarritz, turismo País Vasco francés, qué llevar playa Biarritz" />
  <style>
    body {
      background-color: #f0f4f8;
    }
    .faq-section, .consejos-section {
      background: #ffffff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
    }
    dt {
      font-weight: bold;
      margin-top: 20px;
      color: #2c3e50;
    }
    dd {
      margin-bottom: 20px;
    }
    i.fas {
      margin-right: 8px;
    }
    .section-header {
      text-align: center;
      margin-bottom: 40px;
      color: #2980b9;
    }
    .consejos-section h3 {
      margin-bottom: 20px;
      color: #8e44ad;
    }
  </style>
</head>
<body>
<?php require "./../../../../bloques/estructura/header.php"; ?>


<section class="py-5">
  <div class="container">

    <!-- FAQ -->
    <header class="section-header">
      <h2><i class="fas fa-question-circle"></i> Preguntas Frecuentes</h2>
      <p class="lead">Información clave para tu visita a la Playa de Biarritz en Francia</p>
    </header>
    <div class="faq-section">
      <dl>
        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Cómo es la arena de la Playa de Biarritz?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Arena fina y dorada con zonas amplias ideales para pasear o tomar el sol.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Tiene acceso adaptado?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Sí, cuenta con accesos y pasarelas adaptadas para personas con movilidad reducida.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Se pueden practicar deportes acuáticos?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Es uno de los destinos más famosos para el surf en Europa, con múltiples escuelas y alquiler de equipos.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Cuenta con servicios?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Sí, dispone de socorristas, duchas, aseos, parking cercano y varios restaurantes y bares frente al mar.</dd>

        <dt><i class="fas fa-question-circle" style="color: #3498db;"></i> ¿Dónde obtener más información?</dt>
        <dd><i class="fas fa-check-circle" style="color: #2ecc71;"></i> Consulta la <a href="https://es.wikipedia.org/wiki/Biarritz" title="Guía Playa de Biarritz" target="_blank" rel="noopener noreferrer">guía oficial de Biarritz</a> para todos los detalles y novedades.</dd>
      </dl>
    </div>

    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_botas_hombre.php'; ?>


    <!-- Consejos Útiles -->
    <header class="section-header">
      <h2><i class="fas fa-info-circle"></i> Consejos Útiles</h2>
      <p class="lead">Prepara tu día en Biarritz con estos tips locales</p>
    </header>
    <div class="consejos-section">
      <ul class="list-unstyled">
        <li class="my-4">
          <i class="fas fa-calendar-day" style="color: #27ae60;"></i>
          <strong>¿Cuándo ir?</strong><br>
          La mejor época es de <time datetime="2025-06">junio</time> a <time datetime="2025-09">septiembre</time>, cuando el clima es cálido y el ambiente más animado.
        </li>
        <li class="my-4">
          <i class="fas fa-umbrella-beach" style="color: #f39c12;"></i>
          <strong>¿Qué llevar?</strong><br>
          Protector solar, bañador, toalla, y si quieres surfear, tu tabla o alquílala en una de las escuelas locales.
        </li>
        <li class="my-4">
          <i class="fas fa-map-marker-alt" style="color: #8e44ad;"></i>
          <strong>¿Qué más visitar?</strong><br>
          No te pierdas el <a href="https://www.ot-biarritz.fr" target="_blank" rel="noopener noreferrer" title="Oficina de Turismo de Biarritz">centro de Biarritz</a>, el Rocher de la Vierge, y la cercana ciudad de Bayona.
        </li>
      </ul>
    </div>

  </div>
</section>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';  ?>
<?php require "./../../../../bloques/estructura/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>