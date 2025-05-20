<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Actividades en la Playa de Somo-Loredo – Somo, Cantabria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- Meta SEO -->
  <meta name="description" content="Descubre las mejores actividades turísticas y deportivas en la Playa de Somo-Loredo, en Somo, Cantabria: surf, rutas costeras, paseos en barco y espacios deportivos junto al mar." />
  <meta name="keywords" content="Playa de Somo, Playa de Loredo, surf en Cantabria, actividades Somo, excursiones en barco Cantabria, senderismo costero, deportes playa Somo" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-13" />

  <!-- Open Graph -->
  <meta property="og:title" content="Actividades en la Playa de Somo-Loredo – Somo, Cantabria" />
  <meta property="og:description" content="Surf, senderismo, paseos en barco y deporte junto al mar en la Playa de Somo-Loredo. Ideal para turismo activo en Cantabria." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.ejemplo.com/somo/actividades" />
  <meta property="og:image" content="https://www.ejemplo.com/imagenes/somo-actividades.jpg" />

  <!-- Estilos -->
  <style>
    body { background-color: #f8f9fa; }
    .info-box { background: #fff; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    .info-box ul { padding-left: 1.2rem; }
    .info-box li { margin-bottom: 1.5rem; font-size: 1rem; }
    .info-box i { margin-right: .5rem; }
    #actividades p { font-size: 1.1rem; }
  </style>

  <!-- Adcash (opcional) -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>
<body>
  <?php $region='cantabria'; $nombre_playa = 'Somo-Loredo'; $region_minuscula = 'cantabria'; $nombre_playa_minuscula = 'somo-loredo'; $localidad_minuscula='somo';
  $carpeta = 'playadesomoloredo';
  
  ?>

  <?php require "./../../../../bloques/estructura/header.php"; ?>
  <a class="nav-link text-red" href='/Blog_Playas2024/localidades/<?= $region_minuscula ?>/<?= $carpeta; ?>/fichas/playa-de-<?= $nombre_playa_minuscula ."-"  .$localidad_minuscula. "-" .$region_minuscula  ?>.php' target="_blank">Playa de <?= $nombre_playa; ?></a>

  <?php require './../../../../localidades/'. $region .'/playadesomoloredo/fichas/sections/variables/actividades-recomendadas-playa-de-somo-loredo-somo-cantabria.php'; ?>

  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_jeans_man.php'; ?>

  <?php require "./../../../../bloques/estructura/footer.php"; ?>

  <?php require "./../../../../bloques/estructura/js_bootstrap/scripts-bootstrap2.php"; ?>
</body>
</html>




