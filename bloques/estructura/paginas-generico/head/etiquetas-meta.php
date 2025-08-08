
<?php //$url_amigable = isset($rutas) ? $rutas : null; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="<?= $site_verification_content; ?>"/>
    <meta name="description" content=<?= $description_content; ?>>

    <meta name="keywords" content=<?= $keywords_content; ?>>
    <meta name="robots" content="index, follow">
    <meta name="author" content=<?= AUTHOR; ?>>
    <meta name="language" content="es">


    <!-- Verificación Google Search Console -->
    <meta name="google-site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o" />
    <?php /* para verificar https://search.google.com/search-console/welcome?utm_source=wmx&utm_medium=deprecation-pane&utm_content=home#utm_source=es-wmxmsg&utm_medium=wmxmsg&utm_campaign=bm&authuser=0*/ ?> 


    <!-- Verificación Seobility -->
    <meta name="seobility" content= <?= SITE_VERIFICATION_CONTENT ?> /> 


    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content=<?= TITLE; ?>>
    <meta property="og:description" content="<?= DESCRIPTION; ?>">
    <meta property="og:image" content="<?= PATH_DOMINIO_RAIZ_LOCALIDADES. "$region_minuscula/$localidad_minuscula/lugares-interes/{$lugar_interes}/img/{$lugar_interes}.jpg"; ?>">
    <meta property="og:url" content="<?= PATH_DOMINIO_RAIZ_LOCALIDADES. "$region_minuscula/$localidad_minuscula/lugares-interes/{$lugar_interes}/index.php"; ?>">
    <meta property="og:type" content="<?= $graph_Meta_Tags_property_type; ?>">

    <meta property="og:site_name" content= <?= NAME_BLOG ?> />
    <meta property="og:locale" content="<?= IDIOMA_LOCAL ?>">
    <meta property="og:image:alt" content="<?= DESCRIPTION; ?>">
    <meta property="og:image:width" content="<?= $graph_Meta_Tags_property_image_width; ?>">
    <meta property="og:image:height" content="<?= $graph_Meta_Tags_property_image_height; ?>">
    <meta property="og:author" content="<?= AUTHOR; ?>">
    <meta property="og:updated_time" content="<?= HOY; ?>T08:00:00+01:00" />
    <meta property="og:published_time" content="<?= HOY; ?>T08:00:00+01:00" />
    <meta property="og:section" content="<?= $graph_Meta_Tags_property_section; ?>">
    <meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag; ?>">
    <meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag2; ?>">
    <meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag3; ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="<?= SUMARY_LARGE_IMAGE; ?>">   
    <meta name="twitter:site" content="<?= CARD_SITE; ?>">
    <meta name="twitter:title" content="<?= TITLE; ?>">
    <meta name="twitter:description" content="<?= DESCRIPTION; ?>">
    <meta name="twitter:image" content="<?= PATH_DOMINIO_RAIZ_LOCALIDADES. "$region_minuscula/$localidad_minuscula/lugares-interes/{$lugar_interes}/img/{$lugar_interes}.jpg"; ?>">
    <meta name="twitter:url" content="<?= PATH_DOMINIO_RAIZ_LOCALIDADES. "$region_minuscula/$localidad_minuscula/lugares-interes/{$lugar_interes}/index.php"; ?>">

     <!-- Pinterest: Open Graph será la base -->
    <meta property="pinterest:card" content="<?= SUMARY_LARGE_IMAGE; ?>">
    <meta property="pinterest:title" content="<?= TITLE; ?>">
    <meta property="pinterest:description" content="<?= DESCRIPTION; ?>">
    <meta property="pinterest:image" content="<?= PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/{$lugar_interes}/img/{$lugar_interes}.jpg"; ?>">
    <meta property="og:type" content=<?= WEB_PAGE; ?> />
    <meta property="og:title" content="<?= TITLE; ?>">
    <meta property="og:description" content="<?= DESCRIPTION; ?>">
    <meta property="og:image" content="<?= PATH_DOMINIO_RAIZ_LOCALIDADES. "$region_minuscula/$localidad_minuscula/lugares-interes/{$lugar_interes}/img/{$lugar_interes}.jpg"; ?>">
    <meta property="og:url" content="<?= PATH_DOMINIO_RAIZ_LOCALIDADES. "$region_minuscula/$localidad_minuscula/lugares-interes/{$lugar_interes}/index.php"; ?>">
    <meta property="og:site_name" content= <?= NAME_BLOG ?> />
    <meta property="og:locale" content=<?= IDIOMA_LOCAL; ?> />
    <meta property="og:image:alt" content="<?= DESCRIPTION; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content=<?= NAME_BLOG; ?>/>
    <meta property="og:locale" content="<?= IDIOMA_LOCAL ?>">
    <meta property="article:published_time" content="<?= HOY; ?>T08:00:00+01:00" />
    <meta property="article:modified_time" content="<?= HOY; ?>T08:00:00+01:00" />
    <meta property="article:author" content="https://www.facebook.com/tu-pagina-o-autor" />
    <meta property="article:section" content=<?= NAME_BLOG; ?>/>
    <meta property="article:tag" content="turismo <?= $localidad; ?>, turismo <?= $region; ?>, qué ver en <?= $localidad; ?>" />
    <meta property="article:tag" content="monumentos de <?= $localidad; ?>, rutas y naturaleza en <?= $region; ?>, cultura y gastronomía en <?= $localidad; ?>" />

    <meta name="pinterest-rich-pin" content="true" />    <?php //<!-- Pinterest-specific (aunque no oficial, ayuda al crawler) -->//?>