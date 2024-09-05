<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Suances';
$region = 'Cantabria';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Suances si se utiliza para verificación
$description_content = 'Descubre la Playa de Suances, una extensa playa en Cantabria ideal para disfrutar del sol, las olas y la belleza natural del norte de España.';
$keywords_content = 'Playa de Suances, surf, naturaleza, costa cántabra, turismo en Cantabria, Suances';

$graph_Meta_Tags_property_title = 'Playa de Suances - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Suances, una extensa playa en Cantabria ideal para disfrutar del sol, las olas y la belleza natural del norte de España.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesuances/playa-de-suances.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesuances/fichas/playa-de-suances.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Suances - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Suances, una extensa playa en Cantabria ideal para disfrutar del sol, las olas y la belleza natural del norte de España.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesuances/playa-de-suances.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesuances/fichas/playa-de-suances.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Suances - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Suances, una extensa playa en Cantabria ideal para disfrutar del sol, las olas y la belleza natural del norte de España.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesuances/playa-de-suances.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Suances';
$localidad_minuscula = 'suances';

$descripcion = 'Descubre la Playa de Suances, un destino famoso por su extensa playa, excelentes condiciones para el surf y un entorno natural impresionante.';
$url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesuances/fichas/playa-de-suances.php';

$mainEntity_description = 'La Playa de Suances es una de las playas más destacadas de Cantabria, conocida por su gran extensión, arena dorada y excelente entorno natural.';
$mainEntity_addressLocality = 'Suances';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4016;
$mainEntity_geo_longitude = -4.2375;

$mainEntity_image = 'https://example.com/path/to/suances-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesuances/fichas/playa-de-suances.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>


    <?php

    $page = 'playadesuances';  
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