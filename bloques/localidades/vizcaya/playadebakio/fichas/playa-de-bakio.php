<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Bakio';
$region = 'Bizkaia';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Bakio si se utiliza para verificación
$description_content = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$keywords_content = 'Playa de Bakio, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en Bizkaia, Bakio';

$graph_Meta_Tags_property_title = 'Playa de Bakio - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadebakio/playa-de-bakio.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadebakio/fichas/playa-de-bakio.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Bakio - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadebakio/playa-de-bakio.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadebakio/fichas/playa-de-bakio.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Bakio - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Bakio, un destino perfecto en la Costa Vasca para practicar surf, pasear por la costa y disfrutar de la gastronomía local.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadebakio/playa-de-bakio.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Bakio';
$localidad_minuscula = 'bakio';

$descripcion = 'Explora la Playa de Bakio, conocida por sus olas perfectas para surfear y su hermoso entorno natural, ideal para pasear y disfrutar del aire libre.';
$url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadebakio/fichas/playa-de-bakio.php';

$mainEntity_description = 'La Playa de Bakio es famosa por su ambiente relajado, extensas playas de arena fina, y olas que la convierten en un paraíso para los surfistas.';
$mainEntity_addressLocality = 'Bakio';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4287;
$mainEntity_geo_longitude = -2.8166;

$mainEntity_image = 'https://example.com/path/to/bakio-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>
<body>
<body>

    <?php

    $page = 'playadebakio';
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