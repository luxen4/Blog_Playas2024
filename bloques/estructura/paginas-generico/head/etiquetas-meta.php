
<?php //$url_amigable = isset($rutas) ? $rutas : null; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="<?= $site_verification_content; ?>"/>
    <meta name="description" content=<?= $description_content; ?>>

    <meta name="keywords" content=<?= $keywords_content; ?>>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Adrián Laya García">
    <meta name="language" content="es">


    <!-- Verificación Google Search Console -->
    <meta name="google-site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o" />
    <?php /* para verificar https://search.google.com/search-console/welcome?utm_source=wmx&utm_medium=deprecation-pane&utm_content=home#utm_source=es-wmxmsg&utm_medium=wmxmsg&utm_campaign=bm&authuser=0*/ ?> 


    <!-- Verificación Seobility -->
    <meta name="seobility" content= <?= SITE_VERIFICATION_CONTENT ?> /> 


    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content=<?= $graph_Meta_Tags_property_title; ?>>
    <meta property="og:description" content="<?= $graph_Meta_Tags_property_description; ?>">
    <meta property="og:image" content="<?= $graph_Meta_Tags_property_image; ?>"> <?php //echo($graph_Meta_Tags_property_image) ?>
    <meta property="og:url" content="<?= $graph_Meta_Tags_property_url; ?>">
    <meta property="og:type" content="<?= $graph_Meta_Tags_property_type; ?>">

    <meta property="og:site_name" content="<?= $graph_Meta_Tags_property_site_name; ?>">
    <meta property="og:locale" content="<?= $graph_Meta_Tags_property_locale; ?>">
    <meta property="og:image:alt" content="<?= $graph_Meta_Tags_property_image_alt; ?>">
    <meta property="og:image:width" content="<?= $graph_Meta_Tags_property_image_width; ?>">
    <meta property="og:image:height" content="<?= $graph_Meta_Tags_property_image_height; ?>">
    <meta property="og:author" content="<?= $graph_Meta_Tags_property_author; ?>">
    <meta property="og:updated_time" content="<?= $graph_Meta_Tags_property_updated_time; ?>">  
    <meta property="og:published_time" content="<?= $graph_Meta_Tags_property_published_time; ?>">
    <meta property="og:section" content="<?= $graph_Meta_Tags_property_section; ?>">
    <meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag; ?>">
    <meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag2; ?>">
    <meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag3; ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="<?= $twitterCards_card; ?>">   
    <meta name="twitter:site" content="<?= $twitterCards_site; ?>">
    <meta name="twitter:title" content="<?= $twitterCards_title; ?>">
    <meta name="twitter:description" content="<?= $twitterCards_description; ?>">
    <meta name="twitter:image" content="<?= $twitterCards_image; ?>">
    <meta name="twitter:url" content="<?= $twitterCards_url; ?>">

     <!-- Pinterest: Open Graph será la base -->
    <meta property="pinterest:card" content="<?= $pinterest_property_card_card_content; ?>">
    <meta property="pinterest:title" content="<?= $pinterest_property_card_title_content; ?>">
    <meta property="pinterest:description" content="<?= $pinterest_property_card_description_content; ?>">
    <meta property="pinterest:image" content="<?= $pinterest_property_card_image_content; ?>">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $pinterest_property_card_title_content; ?>">
    <meta property="og:description" content="<?= $pinterest_property_card_description_content; ?>">
    <meta property="og:image" content="<?= $pinterest_property_card_image_content; ?>">
    <meta property="og:url" content="<?= $pinterest_property_card_image_content; ?>">
    <meta property="og:site_name" content="Turismo y Playas 2025 – Guía Costera de España" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:image:alt" content="<?= $pinterest_property_card_description_content; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Turismo y Playas 2025 – Guía Costera de España" />
    <meta property="og:locale" content="es_ES" />
    <meta property="article:published_time" content="<?= HOY; ?>T08:00:00+01:00" />
    <meta property="article:modified_time" content="<?= HOY; ?>T08:00:00+01:00" />
    <meta property="article:author" content="https://www.facebook.com/tu-pagina-o-autor" />
    <meta property="article:section" content="Turismo y Actividades" />
    <meta property="article:tag" content="surf, playa de <?= $localidad; ?>, turismo <?= $region;?>" />
    <meta property="article:tag" content="playa de <?= $localidad; ?>, actividades playa de <?= $localidad; ?>, turismo en <?= $localidad; ?>" />

    <meta name="pinterest-rich-pin" content="true" />    <?php //<!-- Pinterest-specific (aunque no oficial, ayuda al crawler) -->//?>