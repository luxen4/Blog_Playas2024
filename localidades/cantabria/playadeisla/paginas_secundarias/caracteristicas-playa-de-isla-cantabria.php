<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Playa de Isla en Castro-Urdiales</title>
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
      <h2 class="text-primary">🏖️ Playa de Isla - Castro-Urdiales</h2>
      <p class="lead">Una playa tranquila y accesible en la costa cántabra</p>
    </header>

      <div class="beach-info">
        <p>La <strong>Playa de Isla</strong>, situada en el municipio de <strong>Castro-Urdiales</strong> (Cantabria), es un rincón ideal para disfrutar de la naturaleza y el mar Cantábrico. A continuación, te detallamos sus principales características:</p>

        <ul class="list-unstyled">
          <li><i class="fas fa-sand" style="color: #e67e22;"></i> <strong>Arena:</strong> fina y limpia, perfecta para paseos y relajación.</li>
          <li><i class="fas fa-ruler-combined" style="color: #3498db;"></i> <strong>Longitud:</strong> aproximadamente <time datetime="2025-01-01">800 metros</time>.</li>
          <li><i class="fas fa-expand-arrows-alt" style="color: #1abc9c;"></i> <strong>Anchura:</strong> variable, hasta 70 metros en marea baja.</li>
          <li><i class="fas fa-water" style="color: #1abc9c;"></i> <strong>Oleaje:</strong> moderado, adecuado para deportes acuáticos como paddle surf.</li>
          <li><i class="fas fa-tree" style="color: #2ecc71;"></i> <strong>Entorno natural:</strong> rodeada de vegetación y acantilados que ofrecen vistas panorámicas.</li>
          <li><i class="fas fa-shower" style="color: #1abc9c;"></i> <strong>Servicios:</strong> duchas, aseos, vigilancia y zona de merenderos cercanos.</li>
          <li><i class="fas fa-wheelchair" style="color: #e74c3c;"></i> <strong>Accesibilidad:</strong> accesos adaptados para personas con movilidad reducida.</li>
          <li><i class="fas fa-car" style="color: #f39c12;"></i> <strong>Transporte:</strong> acceso en coche con aparcamiento cercano y servicio de autobús local.</li>
          <li><i class="fas fa-hiking" style="color: #9b59b6;"></i> <strong>Actividades recomendadas:</strong> paddle surf, senderismo por rutas costeras y pesca recreativa.</li>
        </ul>

        <p>Consulta también nuestra <a href="/guia-playas-cantabria/" title="Guía completa de playas en Cantabria">guía completa de playas en Cantabria</a> para planificar tu próxima escapada.</p>

        <div class="cta-button">
          <h5>¿Quieres descubrir más actividades en Cantabria?</h5>
          <a href="./experiencias-cantabria.php" class="btn btn-primary mt-2">
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