<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Fuenterrabía';
$region = 'Guipuzcoa';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Fuenterrabía si se utiliza para verificación
$description_content = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$keywords_content = 'Playa de Fuenterrabía, deportes acuáticos, naturaleza, Costa Vasca, turismo en Gipuzkoa, Fuenterrabía';

$graph_Meta_Tags_property_title = 'Playa de Fuenterrabía - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadefuenterrabia/playa-de-fuenterrabia.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadefuenterrabia/fichas/playa-de-fuenterrabia.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Fuenterrabía - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadefuenterrabia/playa-de-fuenterrabia.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadefuenterrabia/fichas/playa-de-fuenterrabia.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Fuenterrabía - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Fuenterrabía, una hermosa playa en el País Vasco, ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadefuenterrabia/playa-de-fuenterrabia.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Fuenterrabía';
$localidad_minuscula = 'fuenterrabia';

$descripcion = 'Descubre la Playa de Fuenterrabía, un destino ideal para disfrutar de un entorno natural único, practicar deportes acuáticos y explorar la histórica localidad de Fuenterrabía.';
$url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadefuenterrabia/fichas/playa-de-fuenterrabia.php';

$mainEntity_description = 'La Playa de Fuenterrabía es un lugar privilegiado en el País Vasco, conocido por su belleza natural, arena dorada, y su cercanía a la histórica localidad de Fuenterrabía.';
$mainEntity_addressLocality = 'Fuenterrabía';
$mainEntity_addressRegion = 'Gipuzkoa';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3667;
$mainEntity_geo_longitude = -1.7903;

$mainEntity_image = 'https://example.com/path/to/fuenterrabia-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

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

        <?php require './sections/informacion-adicional.php'; ?>

        <?php require './sections/contacto.php'; ?>
        <?php $articulo = 'sandals_woman_izda_15';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    </main>

    <!-- Footer -->
    <?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>


    <?php require $atras_5niveles . '/bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
    <?php require $atras_5niveles . '/bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>


    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>