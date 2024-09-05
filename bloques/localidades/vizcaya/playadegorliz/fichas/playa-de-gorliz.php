<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Gorliz';
$region = 'Bizkaia';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Actualiza con el código correcto para Gorliz si es necesario
$description_content = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$keywords_content = 'Playa de Gorliz, surf, naturaleza, playa Bizkaia, turismo en Gorliz, actividades al aire libre';

$graph_Meta_Tags_property_title = 'Playa de Gorliz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegorliz/playa-de-gorliz.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegorliz/fichas/playa-de-gorliz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Gorliz - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegorliz/playa-de-gorliz.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegorliz/fichas/playa-de-gorliz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Gorliz - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegorliz/playa-de-gorliz.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Gorliz';
$localidad_minuscula = 'gorliz';

$descripcion = 'Explora la Playa de Gorliz, un destino popular en Bizkaia con un extenso arenal, ideal para el surf y disfrutar de actividades al aire libre.';
$url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegorliz/fichas/playa-de-gorliz.php';

$mainEntity_description = 'La Playa de Gorliz es conocida por su amplia extensión de arena dorada y su entorno natural, perfecto para disfrutar de actividades al aire libre y deportes acuáticos.';
$mainEntity_addressLocality = 'Gorliz';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4005;
$mainEntity_geo_longitude = -2.9714;

$mainEntity_image = 'https://example.com/path/to/gorliz-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegorliz/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>



    <?php

    $page = 'playadegorliz';  
    $atras_5niveles = './../../../../..';

    require $atras_5niveles . "/bloques/estructura/header.php"; ?>
    <?php include_once $atras_5niveles . '/bloques/estructura/barra_navegacion2.php'; ?>
    <?php include_once $atras_5niveles . '/bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . $atras_5niveles . '/bloques/estructura/'); ?>




    <?php require './sections/encabezado.php'; ?>
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

        <?php require './sections/eventos-destacados.php'; ?>

        <?php require './sections/contacto.php'; ?>
        <?php $articulo = 'sandals_woman_izda_15';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    </main>

    <!-- Footer -->
    <?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>


    <?php require $atras_5niveles . '/bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
    <?php require $atras_5niveles . '/bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>

</body>

</html>