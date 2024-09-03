<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Getaria';
$region = 'Guipuzkoa';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Getaria si se utiliza para verificación
$description_content = 'Descubre la Playa de Getaria, un hermoso rincón en la Costa Vasca, perfecto para disfrutar del mar, el surf y la tradición pesquera del País Vasco.';
$keywords_content = 'Playa de Getaria, surf, pesca, naturaleza, Costa Vasca, turismo en Gipuzkoa, Getaria';

$graph_Meta_Tags_property_title = 'Playa de Getaria - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Getaria, un hermoso rincón en la Costa Vasca, perfecto para disfrutar del mar, el surf y la tradición pesquera del País Vasco.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadegetaria/playa-de-getaria.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadegetaria/fichas/playa-de-getaria.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Getaria - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Getaria, un hermoso rincón en la Costa Vasca, perfecto para disfrutar del mar, el surf y la tradición pesquera del País Vasco.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadegetaria/playa-de-getaria.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadegetaria/fichas/playa-de-getaria.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Getaria - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Getaria, un hermoso rincón en la Costa Vasca, perfecto para disfrutar del mar, el surf y la tradición pesquera del País Vasco.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadegetaria/playa-de-getaria.jpg';

$href_styles = './../fichas/css/styles.css';

// Para el archivo Structured_data_generico.php
$localidad = 'Getaria';
$localidad_minuscula = 'getaria';

$descripcion = 'Descubre la Playa de Getaria, un lugar perfecto para disfrutar del surf, relajarse en la arena y explorar la rica tradición pesquera y marítima del País Vasco.';
$url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadegetaria/fichas/playa-de-getaria.php';

$mainEntity_description = 'La Playa de Getaria es un encantador arenal en la Costa Vasca, conocido por su entorno natural, su relación con la pesca y sus aguas perfectas para el surf.';
$mainEntity_addressLocality = 'Getaria';
$mainEntity_addressRegion = 'Gipuzkoa';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3033;
$mainEntity_geo_longitude = -2.2025;

$mainEntity_image = 'https://example.com/path/to/getaria-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';

require "./../../../../../bloques/estructura/head.php";
?>

<body>

    <?php

    $page = 'playadegetaria';
    //$href_lugar = './../../../../';
    //$href_zona = $atras_5niveles . '/index.php';    
    $atras_5niveles = './../../../../..';

    require $atras_5niveles . "/bloques/estructura/header.php"; ?>
    <?php include_once $atras_5niveles . '/bloques/estructura/barra_navegacion2.php'; ?>
    <?php include_once $atras_5niveles . '/bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . $atras_5niveles . '/bloques/estructura/'); ?>


    <!-- Encabezado -->
    <header class="container my-4">
        <h1 class="text-center">Playa de Getaria</h1>
        <p class="text-center">Descubre la Playa de Getaria, una joya costera en el País Vasco, conocida por su tradición pesquera, aguas tranquilas y entorno natural impresionante. Perfecta para disfrutar de un día relajado, practicar surf y explorar la encantadora localidad de Getaria.</p>
    </header>



    <?php $articulo = 'sandals_man';
    include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <!-- Contenido principal -->
    <main class="container my-4">
        <?php require './sections/descripcion-detallada.php'; ?>
        <?php $articulo = 'jeans_man';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <?php require './sections/mapa-ubicacion.php'; ?>
        <?php $articulo = 'shirts_modelo_derecha';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <?php require './sections/actividades-recomendadas.php'; ?>
        <?php $articulo = 'sneakers_izquierda_45';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <?php require './sections/servicios.php'; ?>
        <?php $articulo = 'dress_woman';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


        <?php require './sections/galeria-imagenes.php'; ?>
        <?php $articulo = 'purse_woman';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <?php $articulo = 'sandals_woman_izda_15';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

        <h6 id="masinfo">Para más información puede consultar en la pagina de la Oficina de Turismo de
            <a href="https://turismo.euskadi.eus/es/oficinas-turismo/oficina-de-turismo-de-getaria/aa30-12375/es/"><?= $localidad; ?></a>
        </h6>
    </main>

    <!-- Footer -->
    <?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>
</body>

</html>