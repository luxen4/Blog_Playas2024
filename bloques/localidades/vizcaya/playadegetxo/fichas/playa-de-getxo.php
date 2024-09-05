<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Getxo';
$region = 'Bizkaia';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Getxo si se utiliza para verificación
$description_content = 'Explora la Playa de Getxo, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$keywords_content = 'Playa de Getxo, playa, costa de Bizkaia, turismo en Getxo, paseo marítimo, gastronomía vasca';

$graph_Meta_Tags_property_title = 'Playa de Getxo - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Getxo, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegetxo/playa-de-getxo.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegetxo/fichas/playa-de-getxo.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Getxo - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Getxo, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegetxo/playa-de-getxo.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegetxo/fichas/playa-de-getxo.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Getxo - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Getxo, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de la playa, paseos marítimos y una rica oferta gastronómica.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegetxo/playa-de-getxo.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Getxo';
$localidad_minuscula = 'getxo';

$descripcion = 'Explora la Playa de Getxo, un destino encantador en la costa de Bizkaia, ideal para disfrutar de la playa, paseos marítimos y una vibrante vida local.';
$url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadegetxo/fichas/playa-de-getxo.php';

$mainEntity_description = 'La Playa de Getxo es un lugar destacado en la costa de Bizkaia, conocida por su arena dorada, sus impresionantes vistas al mar y su animado paseo marítimo.';
$mainEntity_addressLocality = 'Getxo';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3231;
$mainEntity_geo_longitude = -3.0027;

$mainEntity_image = 'https://example.com/path/to/getxo-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>



<?php

$page = 'playadegetxo';  
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