<!DOCTYPE html>
<html lang="es">
<?php $region = 'Guipuzkoa';
$localidad = 'Orio'; ?>

<?php
$localidad = 'Orio';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Orio si se utiliza para verificación
$description_content = 'Descubre la Playa de Orio, un hermoso destino costero en el País Vasco. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$keywords_content = 'Playa de Orio, País Vasco, sol, mar, turismo en Euskadi, Orio';

$graph_Meta_Tags_property_title = 'Playa de Orio - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Orio, un hermoso destino costero en el País Vasco. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/euskadi/playadeorio/foto_presentacion.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/euskadi/playadeorio/fichas/playa-de-orio.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Orio - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Orio, un hermoso destino costero en el País Vasco. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/euskadi/playadeorio/foto_presentacion.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/euskadi/playadeorio/fichas/playa-de-orio.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Orio - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Orio, un hermoso destino costero en el País Vasco. Ideal para disfrutar del sol, el mar y la rica cultura de la región.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/euskadi/playadeorio/foto_presentacion.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Orio';
$localidad_minuscula = 'orio';

$descripcion = 'Descubre la Playa de Orio, una de las playas más bellas del País Vasco, perfecta para disfrutar del surf, paseos por la costa y vistas impresionantes al mar.';
$url = 'http://playas2024.kesug.com/bloques/localidades/euskadi/playadeorio/fichas/playa-de-orio.php';

$mainEntity_description = 'La Playa de Orio es una playa espectacular en la costa del País Vasco, conocida por su arena fina y dorada, su ambiente familiar, y sus condiciones ideales para el surf y otros deportes acuáticos.';
$mainEntity_addressLocality = 'Orio';
$mainEntity_addressRegion = 'País Vasco';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.2789;
$mainEntity_geo_longitude = -2.1275;

$mainEntity_image = 'https://example.com/path/to/orio-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/euskadi/playade' . $localidad_minuscula . '/fichas/playade' . $localidad_minuscula . '.php';
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


<!-- Contenido principal -->
<main class="container my-4">
    <?php require './../sections/descripcion-detallada.php'; ?>
    <?php $articulo = 'jeans_man'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './../sections/mapa-ubicacion.php'; ?>
    <?php $articulo = 'shirts_modelo_derecha'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './../sections/actividades-recomendadas.php'; ?>
    <?php $articulo = 'sneakers_izquierda_45'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './../sections/servicios.php'; ?>
    <?php $articulo = 'dress_woman'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


    <?php require './../sections/galeria-imagenes.php'; ?>
    <?php $articulo = 'purse_woman'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
    <?php $articulo = 'sandals_woman_izda_15'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>



    <h6 id="masinfo">Para más información puede consultar en la pagina de la Oficina de Turismo de
        <a href="https://www.turismozarautz.eus/es/oficina-de-turismo"><?= $localidad; ?></a>
        </h6>
    </main>

    <!-- Footer -->
    <?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>


    <?php require $atras_5niveles . '/bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
    <?php require $atras_5niveles . '/bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>

</body>

</html>
