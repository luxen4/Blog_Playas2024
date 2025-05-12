<head>
    <title>Playa de <?= $localidad; ?> - <?= $localidad; ?>, España</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="<?= $site_verification_content; ?>"/>
    <meta name="description" content=<?= $description_content; ?>>
    <meta name="keywords" content=<?= $keywords_content; ?>>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Adrián Laya García">
    <meta name="language" content="es">


    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content=<?= $graph_Meta_Tags_property_title; ?>>
    <meta property="og:description" content="<?= $graph_Meta_Tags_property_description; ?>">
    <meta property="og:image" content="<?= $graph_Meta_Tags_property_image; ?>">
    <meta property="og:url" content="<?= $graph_Meta_Tags_property_url; ?>">
    <meta property="og:type" content="<?= $graph_Meta_Tags_property_type; ?>">


    <!-- Twitter Cards -->
    <meta name="twitter:card" content="<?= $twiterCards_card; ?>">
    <meta name="twitter:site" content="<?= $twiterCards_site; ?>">
    <meta name="twitter:title" content="<?= $twiterCards_title; ?>">
    <meta name="twitter:description" content="<?= $twiterCards_descripcion; ?>">
    <meta name="twitter:image" content="<?= $twiterCards_image; ?>">
    <meta name="twitter:url" content="<?= $twiterCards_url; ?>">

    <!-- Pinterest -->
    <meta property="pinterest:card" content="<?= $pinterest_property_card_card_content; ?>">
    <meta property="pinterest:title" content="<?= $pinterest_property_card_title_content; ?>">
    <meta property="pinterest:description" content="<?= $pinterest_property_card_description_content; ?>">
    <meta property="pinterest:image" content="<?= $pinterest_property_card_image_content; ?>">


    <!-- Sitemap Link -->
    <link rel="sitemap" type="application/xml" title="Sitemap" href="http://playas2024.kesug.com/sitemap.xml">

    <!-- Favicon -->
    <link rel="icon" href="./../../../../img/icono-sombrilla.ico" type="image/x-icon">

    <?php /*
    <!-- Si usas un formato PNG o SVG -->
    <link rel="icon" href="path/to/icono-sombrilla.png" type="image/png">
    <link rel="icon" href="path/to/icono-sombrilla.svg" type="image/svg+xml"> */?>


    <!-- Alternate Languages -->
    <link rel="alternate" href="https://www.ejemplo.com/es/" hreflang="es">
    <link rel="alternate" href="https://www.ejemplo.com/en/" hreflang="en">

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./../../../../styles.css">

    <!-- Ads Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>

    <?php include_once 'structured_data_generico.php'; ?>




    <?php // Para anuncios de Adcash <!-- Carga la librería de Adcash --> ?> 
    <script src="https://static.adcash.com/js/aclib.js" async></script>
    <?php require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php"; ?>




<?php /*
// Lógica PHP para Adcash, sin bloquear si falla
$ads_ok = false;

try {
  $ads_ok = @require "./../../../../bloques/estructura/anuncios/js/logica_anuncios_addcash.php";
} catch (Exception $e) {
  // Aquí podrías registrar el error si te interesa
  $ads_ok = false;
}*/
?>



</head>