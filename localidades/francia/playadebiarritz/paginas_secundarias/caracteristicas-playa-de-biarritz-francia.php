<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Playa de Biarritz en Francia</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .beach-info {
      background: #fff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .beach-info ul {
      padding-left: 1.5rem;
    }
    .beach-info li {
      margin-bottom: 12px;
      font-size: 1rem;
    }
    .beach-info i {
      margin-right: 8px;
    }
    .cta-button {
      text-align: center;
      margin-top: 30px;
    }
  </style>
  <?php // Para anuncios de Adcash <!-- Carga la librería de Adcash --> ?> 
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>
<body> 
<?php //Barra de Navegación Superior
require "./../../../../bloques/estructura/header.php"; ?>

<section class="py-5">
  <div class="container">
    <header class="text-center mb-5">
      <h2 class="text-primary">🏖️ Playa de Biarritz - Francia</h2>
      <p class="lead">Un emblemático destino costero del País Vasco francés, famoso por su ambiente cosmopolita y sus olas para surfear</p>
    </header>

    <div class="beach-info">
      <p>La <strong>Playa de Biarritz</strong>, ubicada en la ciudad costera de <strong>Biarritz</strong> (País Vasco Francés), es uno de los arenales más reconocidos del Atlántico europeo. A continuación, te mostramos sus principales características:</p>

      <ul class="list-unstyled">
        <li><i class="fas fa-sand" style="color: #e67e22;"></i> <strong>Arena:</strong> fina y dorada, perfecta para relajarse y disfrutar del sol.</li>
        <li><i class="fas fa-ruler-combined" style="color: #3498db;"></i> <strong>Longitud:</strong> aproximadamente <time datetime="2025-01-01">700 metros</time>.</li>
        <li><i class="fas fa-expand-arrows-alt" style="color: #1abc9c;"></i> <strong>Anchura:</strong> variable, hasta 80 metros en marea baja.</li>
        <li><i class="fas fa-water" style="color: #1abc9c;"></i> <strong>Oleaje:</strong> fuerte y constante, uno de los mejores spots para <a href="/surf-en-francia/" title="Surf en Francia">surf y deportes acuáticos</a>.</li>
        <li><i class="fas fa-tree" style="color: #2ecc71;"></i> <strong>Entorno natural:</strong> acantilados, paseos marítimos, y jardines cuidados que ofrecen vistas espectaculares.</li>
        <li><i class="fas fa-shower" style="color: #1abc9c;"></i> <strong>Servicios:</strong> duchas, aseos, vigilancia, escuelas de surf, restaurantes y tiendas.</li>
        <li><i class="fas fa-wheelchair" style="color: #e74c3c;"></i> <strong>Accesibilidad:</strong> accesible para personas con movilidad reducida.</li>
        <li><i class="fas fa-car" style="color: #f39c12;"></i> <strong>Transporte:</strong> bien comunicada por coche, autobús y tren desde ciudades cercanas.</li>
        <li><i class="fas fa-hiking" style="color: #9b59b6;"></i> <strong>Actividades recomendadas:</strong> surf, paddle surf, paseos por el litoral, gastronomía local y eventos culturales.</li>
      </ul>

      <p>Consulta también nuestra <a href="/guia-playas-francia/" title="Guía completa de playas en Francia">guía completa de playas en Francia</a> para planificar tu próxima escapada.</p>

      <div class="cta-button">
        <h5>¿Quieres descubrir más experiencias en la costa vasca?</h5>
        <a href="./experiencias-costa-vasca.php" class="btn btn-primary mt-2">
          <i class="fas fa-map-marked-alt"></i> Consulta esta guía de experiencias
        </a>
      
        <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo3.php'; ?>

      </div>        
    </div>
  </div>
</section>

<!-- Footer -->
<?php require './../../../../bloques/estructura/footer.php'; ?>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>