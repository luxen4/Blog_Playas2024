<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Servicios en la Playa de Biarritz – Francia</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- SEO -->
  <meta name="description" content="Descubre los servicios que ofrece la Playa de Biarritz: surf, chiringuitos, duchas y aparcamiento para un día inolvidable en la costa vasca francesa." />
  <meta name="keywords" content="Servicios Playa Biarritz, restaurantes Biarritz, duchas Biarritz, surf Francia, aparcamiento playa Biarritz" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-25" />

  <!-- Open Graph -->
  <meta property="og:title" content="Servicios en la Playa de Biarritz – Francia" />
  <meta property="og:description" content="Conoce los servicios turísticos disponibles en la Playa de Biarritz: surf, restaurantes, duchas públicas y parking." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/biarritz/servicios" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/biarritz-servicios.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Servicios en la Playa de Biarritz – Francia" />
  <meta name="twitter:description" content="Todo sobre los servicios disponibles en la Playa de Biarritz, País Vasco francés." />
  <meta name="twitter:image" content="https://www.ejemplo.com/imagenes/biarritz-servicios.jpg" />

  <style>
    body { background-color: #f0f4f8; } /* azul claro para el mar */
    .info-box { background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .info-box ul { padding-left: 1.2rem; }
    .info-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .info-box i { margin-right: .5rem; }
    #servicios p { font-size: 1.1rem; }
  </style>
</head>
<body>

<?php require "./../../../../bloques/estructura/header.php"; ?>

<?php
$li_servicios_biarritz = '
<section id="servicios" class="seccion-servicios container py-5">
  <header class="text-center mb-4">
    <h2 class="text-primary">🏄‍♂️ Servicios en la Playa de Biarritz</h2>
    <p>La <strong>Playa de Biarritz</strong> en <a href="https://es.wikipedia.org/wiki/Biarritz" title="Conoce Biarritz">País Vasco francés</a> ofrece servicios ideales para disfrutar de un día lleno de surf, gastronomía y relax.</p>
  </header>

  <div class="info-box">
    <ul class="list-unstyled">
      <li class="my-4">
        <i class="fas fa-utensils" style="color: #c0392b;"></i>
        <strong>Chiringuitos y Restauración:</strong><br>
        En el paseo marítimo y alrededores encontrarás <strong>restaurantes, cafés y bares</strong> con especialidades de la cocina vasca y francesa, perfectos para degustar frente al océano Atlántico.
      </li>

      <li class="my-4">
        <i class="fas fa-water" style="color: #2980b9;"></i>
        <strong>Escuelas de Surf y Alquiler:</strong><br>
        Biarritz es un <strong>destino mundialmente conocido para surfear</strong>. Varias escuelas ofrecen clases para todos los niveles y alquiler de tablas y equipamiento.
      </li>

      <li class="my-4">
        <i class="fas fa-shower" style="color: #27ae60;"></i>
        <strong>Duchas y Servicios Públicos:</strong><br>
        La playa dispone de <strong>duchas al aire libre y aseos públicos</strong> en las entradas principales para mayor comodidad de los visitantes.
      </li>

      <li class="my-4">
        <i class="fas fa-parking" style="color: #d35400;"></i>
        <strong>Zona de Aparcamiento:</strong><br>
        Existen <strong>aparcamientos de pago y gratuitos</strong> cerca de la playa, además de facilidades para bicicletas y accesos para personas con movilidad reducida.
      </li>
    </ul>

    <p>¿Quieres explorar más playas en la costa vasca? <a href="./../../../../index.php" title="Guía de playas del País Vasco">Descubre otras playas aquí</a>.</p>
  </div>
</section>
';
echo $li_servicios_biarritz;
?>

<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sports_shirts_hombre.php'; ?>
<?php require "./../../../../bloques/estructura/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>