<!DOCTYPE html>
<html lang="es">
<?php $region = 'Guipuzkoa';
$localidad = 'Zarautz'; ?>

<head>
    <title>Playa de Zarautz - Zarautz, Gipuzkoa</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="e148bdbc89c019bd06122ab7bd08a8be" />
    <meta name="description" content="Explora la Playa de Zarautz, una de las playas más icónicas del País Vasco. Ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.">
    <meta name="keywords" content="Playa de Zarautz, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en Gipuzkoa, playa Zarautz">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Adrián Laya García">
    <meta name="language" content="es">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Playa de Zarautz - Información y Turismo">
    <meta property="og:description" content="Explora la Playa de Zarautz, una de las playas más icónicas del País Vasco. Ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.">
    <meta property="og:image" content="http://playas2024.kesug.com/bloques/localidades/playadezarautz/foto_presentacion.jpg">
    <meta property="og:url" content="http://playas2024.kesug.com/bloques/localidades//guipuzkoa/playadezarautz/fichas/playadezarautz.php">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@laya_garcia">
    <meta name="twitter:title" content="Playa de Zarautz - Información y Turismo">
    <meta name="twitter:description" content="Explora la Playa de Zarautz, una de las playas más icónicas del País Vasco. Ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.">
    <meta name="twitter:image" content="http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadezarautz/foto_presentacion.jpg">
    <meta name="twitter:url" content="http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadezarautz/fichas/playadezarautz.php?i=1">

    <!-- Pinterest -->
    <meta property="pinterest:card" content="summary_large_image">
    <meta property="pinterest:title" content="Playa de Zarautz - Información y Turismo">
    <meta property="pinterest:description" content="Explora la Playa de Zarautz, una de las playas más icónicas del País Vasco. Ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.">
    <meta property="pinterest:image" content="http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadezarautz/fichas/playadezarautz.php?i=1">

    <!-- Sitemap Link -->
    <link rel="sitemap" type="application/xml" title="Sitemap" href="http://playas2024.kesug.com/sitemap.xml">

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Alternate Languages -->
    <link rel="alternate" href="https://www.ejemplo.com/es/" hreflang="es">
    <link rel="alternate" href="https://www.ejemplo.com/en/" hreflang="en">

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./../css/styles.css">

    <!-- Ads Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>

    <?php include_once 'structured_data.php'; ?>
</head>


<body>

    <?php

    $page = 'playadezarautz';
    //$href_lugar = './../../../../';
    //$href_zona = $atras_5niveles . '/index.php';    
    $atras_5niveles = './../../../../..';

    require $atras_5niveles . "/bloques/estructura/header.php"; ?>
    <?php include_once $atras_5niveles . '/bloques/estructura/barra_navegacion2.php'; ?>
    <?php include_once $atras_5niveles . '/bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . $atras_5niveles . '/bloques/estructura/'); ?>



<!-- Encabezado -->
<header class="container my-4">
    <h1 class="text-center">Playa de Orio</h1>
    <p class="text-center">Descubre la Playa de Orio, una encantadora playa en el País Vasco, conocida por su ambiente familiar, arena dorada y excelentes condiciones para el surf. Perfecta para disfrutar de un día relajado y explorar la pintoresca localidad de Orio.</p>
</header>

        <?php $articulo = 'sandals_man'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <!-- Contenido principal -->
    <main class="container my-4">
        <?php require './sections/descripcion-detallada.php'; ?>
        <?php $articulo = 'jeans_man'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <?php require './sections/mapa-ubicacion.php'; ?>
        <?php $articulo = 'shirts_modelo_derecha'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <?php require './sections/actividades-recomendadas.php'; ?>
        <?php $articulo = 'sneakers_izquierda_45'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <?php require './sections/servicios.php'; ?>
        <?php $articulo = 'dress_woman'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


        <?php require './sections/galeria-imagenes.php'; ?>
        <?php $articulo = 'purse_woman'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <?php $articulo = 'sandals_woman_izda_15'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <h6 id="masinfo">Para más información puede consultar en la pagina de la Oficina de Turismo de
            <a href="https://www.turismozarautz.eus/es/oficina-de-turismo">Zarautz</a>
        </h6>
    </main>

    <!-- Footer -->
    <?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>


    <?php require $atras_5niveles . '/bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
    <?php require $atras_5niveles . '/bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>

</body>

</html>
