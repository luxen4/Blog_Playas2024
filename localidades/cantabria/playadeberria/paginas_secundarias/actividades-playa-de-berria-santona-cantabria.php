<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Actividades en la Playa de Berria – Santoña</title>

  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  <!-- Google Ads -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
  <meta name="seobility" content="6fdc72f26c4563f937e32ff3def5f9d5">

  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- Meta SEO -->
  <meta name="description" content="Explora las actividades turísticas y deportivas en la Playa de Berria, Santoña: surf, senderismo por el Monte Buciero, rutas en barco y más." />
  <meta name="keywords" content="Playa de Berria, actividades Berria, surf Cantabria, senderismo Buciero, deportes de playa, excursiones barco Santoña" />
  <meta name="robots" content="index, follow" />
  <meta name="date" content="2025-05-18" />

  <!-- Favicon -->
  <link rel="icon" href='./../Blog_Playas2024/img/icono-sombrilla.ico' type="image/x-icon">

  <!-- Open Graph -->
  <meta property="og:image" content="http://playas2024.kesug.com/Blog_Playas2024/localidades/cantabria/playadeberria/img/playa-de-berria-santona-cantabria.jpg" />
  <meta property="og:title" content="Actividades en la Playa de Berria – Santoña" />
  <meta property="og:description" content="Descubre qué hacer en la Playa de Berria: surf, rutas naturales, paseos marítimos y experiencias en la costa cántabra." />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://playas2024.kesug.com/Blog_Playas2024/actividades-playa-de-berria-santona-cantabria" />
  <meta property="og:image" content="https://playas2024.kesug.com/Blog_Playas2024/localidades/cantabria/playadeberria/img/playa-de-berria-santona-cantabria.jpg" />
  <meta property="og:image:alt" content="Vista de la Playa de Berria, ideal para surf y naturaleza en la costa de Santoña" />
  <meta property="og:site_name" content="Playas 2024 – Guía Costera de España" />
  <meta property="og:locale" content="es_ES" />

  <!-- Adcash (opcional) -->
  <script src="https://static.adcash.com/js/aclib.js" async></script>
  <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Estilos -->
  <link rel="stylesheet" href="http://<?= $_SERVER['SERVER_NAME'] ?>/Blog_Playas2024/styles.css">

  <?php
  // Información básica
  $localidad = 'Berria';
  $region = 'Cantabria';
  $nombre_playa_minuscula = 'berria';
  $localidad_minuscula = 'santona';
  $region_minuscula = 'cantabria';
  $rutas = 'playa-de-berria-santona-cantabria';

  // Descripción general y URL
  $descripcion = 'Explora la Playa de Berria, uno de los destinos más naturales y salvajes de la costa cántabra, ideal para deportes acuáticos y rutas por el Monte Buciero.';
  $url = 'http://playas2024.kesug.com/Blog_Playas2024/localidades/cantabria/playadeberria/fichas/playa-de-berria.php';

  // Datos estructurados Schema.org (mainEntity)
  $mainEntity_description = 'La Playa de Berria es conocida por sus olas perfectas para el surf y sus rutas naturales por el Monte Buciero en Santoña.';
  $mainEntity_addressLocality = 'Berria';
  $mainEntity_addressRegion = 'Cantabria';
  $mainEntity_addressCountry = 'España';

  // Coordenadas geográficas
  $mainEntity_geo_latitude = 43.4764;
  $mainEntity_geo_longitude = -3.4431;

  // Imagen representativa y URL canónica
  $mainEntity_image = 'http://playas2024.kesug.com/Blog_Playas2024/localidades/cantabria/playadeberria/img/playa-de-berria-santona-cantabria.jpg';
  $mainEntity_url = 'http://playas2024.kesug.com/Blog_Playas2024/playa-de-berria-santona-cantabria';
  ?>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/bloques/estructura/structured_data_generico.php'; ?>
</head>

<body>
  <?php require "./../../../../bloques/estructura/header.php"; ?>
  <a class="nav-link text-red" href="/Blog_Playas2024/<?= $rutas; ?>">Playa de Berria</a>
  <?php require "./../../../../localidades/cantabria/playadeberria/fichas/sections/variables/actividades-recomendadas.php"; ?> 
  <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
  <?php require "./../../../../bloques/estructura/footer.php"; ?>

  <!-- Scripts Bootstrap + jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>