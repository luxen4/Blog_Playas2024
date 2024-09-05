<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Laredo';
$region = 'Cantabria';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Laredo si se utiliza para verificación
$description_content = 'Explora la Playa de Laredo, un extenso arenal en Cantabria, ideal para disfrutar de actividades al aire libre y relajarte junto al mar.';
$keywords_content = 'Playa de Laredo, actividades en la playa, Cantabria, turismo, paseo marítimo, playas de Cantabria';

$graph_Meta_Tags_property_title = 'Playa de Laredo - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Laredo, un extenso arenal en Cantabria, ideal para disfrutar de actividades al aire libre y relajarte junto al mar.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadelaredo/playa-de-laredo.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadelaredo/fichas/playa-de-laredo.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Laredo - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Laredo, un extenso arenal en Cantabria, ideal para disfrutar de actividades al aire libre y relajarte junto al mar.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadelaredo/playa-de-laredo.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadelaredo/fichas/playa-de-laredo.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Laredo - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Laredo, un extenso arenal en Cantabria, ideal para disfrutar de actividades al aire libre y relajarte junto al mar.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadelaredo/playa-de-laredo.jpg';

$href_styles = './../fichas/css/styles.css';

////////
// Para el archivo Structured_data_generico.php
$localidad = 'Laredo';
$localidad_minuscula = 'laredo';

$descripcion = 'Explora la Playa de Laredo, un destino famoso por su extenso arenal y excelente ambiente para actividades al aire libre.';
$url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadelaredo/fichas/playa-de-laredo.php';

$mainEntity_description = 'La Playa de Laredo es una de las playas más destacadas de Cantabria, conocida por su gran extensión, arena dorada, y ambiente familiar.';
$mainEntity_addressLocality = 'Laredo';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4185;
$mainEntity_geo_longitude = -3.4373;

$mainEntity_image = 'https://example.com/path/to/laredo-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadelaredo/fichas/playa-de-laredo.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>


<body>


<?php

$page = 'playadelaredo';
//$href_lugar = './../../../../';
//$href_zona = $atras_5niveles . '/index.php';    
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