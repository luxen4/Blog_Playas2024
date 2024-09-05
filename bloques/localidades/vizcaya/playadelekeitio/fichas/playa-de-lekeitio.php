<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Lekeitio';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Lekeitio si se utiliza para verificación
$description_content = 'Descubre la Playa de Lekeitio, una pintoresca bahía en la costa vasca, perfecta para relajarse, practicar deportes acuáticos y disfrutar del encanto pesquero de la zona.';
$keywords_content = 'Playa de Lekeitio, deportes acuáticos, naturaleza, paseo marítimo, Costa Vasca, turismo en Bizkaia, Lekeitio';

$graph_Meta_Tags_property_title = 'Playa de Lekeitio - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Lekeitio, una pintoresca bahía en la costa vasca, perfecta para relajarse, practicar deportes acuáticos y disfrutar del encanto pesquero de la zona.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadelekeitio/playa-de-lekeitio.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadelekeitio/fichas/playa-de-lekeitio.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Lekeitio - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Lekeitio, una pintoresca bahía en la costa vasca, perfecta para relajarse y practicar deportes acuáticos.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadelekeitio/playa-de-lekeitio.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadelekeitio/fichas/playa-de-lekeitio.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Lekeitio - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Lekeitio, una pintoresca bahía en la costa vasca, perfecta para relajarse y practicar deportes acuáticos.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadelekeitio/playa-de-lekeitio.jpg';

$href_styles = './../fichas/css/styles.css';

////////
// Para el archivo Structured_data_generico.php
$localidad = 'Lekeitio';
$localidad_minuscula = 'lekeitio';

$descripcion = 'Descubre la Playa de Lekeitio, una hermosa playa rodeada de un pintoresco puerto pesquero, ideal para nadar y disfrutar de una vibrante vida marina y cultural.';
$url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadelekeitio/fichas/playa-de-lekeitio.php';

$mainEntity_description = 'La Playa de Lekeitio, situada en la costa de Bizkaia, es conocida por su belleza natural, su puerto pesquero, y la isla de San Nicolás, que se puede visitar a pie cuando baja la marea.';
$mainEntity_addressLocality = 'Lekeitio';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3646;
$mainEntity_geo_longitude = -2.5047;

$mainEntity_image = 'https://example.com/path/to/lekeitio-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>
<body>


<?php

$page = 'playadelekeitio'; 
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