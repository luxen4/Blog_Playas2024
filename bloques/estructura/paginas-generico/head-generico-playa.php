

<?php $url_amigable = isset($rutas) ? $rutas : null; ?>
<head>
    <?php /*<title>Playa de <?= $localidad; ?> - <?= $localidad; ?>, España</title>*/?>

    <title><?= $title; ?></title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="<?= $site_verification_content; ?>"/>
    <meta name="description" content=<?= $description_content; ?>>

    <meta name="keywords" content=<?= $keywords_content; ?>>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Adrián Laya García">
    <meta name="language" content="es">

    <?php /*<link rel="canonical" href="https://playas2024.kesug.com/Blog_Playas2024/<?= $url_amigable;?>" />*/?>
    <link rel="canonical" href="https://playas2024.kesug.com/Blog_Playas2024/localidades/<?= $region_minuscula; ?>/<?= $carpeta;?>/fichas/<?= $rutas; ?>.php" />

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


     <!-- Pinterest: Open Graph será la base -->
    <meta property="pinterest:card" content="<?= $pinterest_property_card_card_content; ?>">
    <meta property="pinterest:title" content="<?= $pinterest_property_card_title_content; ?>">
    <meta property="pinterest:description" content="<?= $pinterest_property_card_description_content; ?>">
    <meta property="pinterest:image" content="<?= $pinterest_property_card_image_content; ?>">
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $pinterest_property_card_title_content; ?>">
    <meta property="og:description" content="<?= $pinterest_property_card_description_content; ?>">
    <meta property="og:image" content="<?= $pinterest_property_card_image_content; ?>">
    <meta property="og:url" content="<?= $pinterest_property_card_image_content; ?>">
    <meta property="og:site_name" content="Playas 2024 – Guía Costera de España" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:image:alt" content="<?= $pinterest_property_card_description_content; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Playas 2024 – Guía Costera de España" />
    <meta property="og:locale" content="es_ES" />
    <meta property="article:published_time" content="<?= $hoy ?>T08:00:00+01:00" />
    <meta property="article:modified_time" content="<?= $hoy ?>T08:00:00+01:00" />
    <meta property="article:author" content="https://www.facebook.com/tu-pagina-o-autor" />
    <meta property="article:section" content="Turismo y Actividades" />
    <meta property="article:tag" content="surf, playa de <?= $localidad; ?>, turismo <? $region;?>" />
    <meta property="article:tag" content="playa de <?= $localidad; ?>, actividades playa de <?= $localidad; ?>, turismo en <?= $localidad; ?>" />
    <!-- Pinterest-specific (aunque no oficial, ayuda al crawler) -->
    <meta name="pinterest-rich-pin" content="true" />




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

    <!-- Stylesheets --><?php //HAY ARCHIVO PARA LINKAR ?>

    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/styleSheets.php"; ?>

    <!--Hoja de estilos-->
    <?php /*<link rel="stylesheet" href="./../../../../styles.css">*/ ?>

    <!-- Ads Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>


    <?php //<!-- Structured Data (Schema.org) --> 
    require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD. "/structured-data-generico.php";?>


    <?php // Para anuncios de Adcash <!-- Carga la librería de Adcash --> ?> 
    <script src="https://static.adcash.com/js/aclib.js" async></script>
    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA."/anuncios/js/logica_anuncios_addcash.php"; ?>
</head>