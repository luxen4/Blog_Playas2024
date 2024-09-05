<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Biarritz';
$region = 'País Vasco Francés';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Biarritz si se utiliza para verificación
$description_content = 'Descubre la Playa de Biarritz, una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$keywords_content = 'Playa de Biarritz, surf, País Vasco Francés, turismo en Biarritz, playa, gastronomía, turismo costero';

$graph_Meta_Tags_property_title = 'Playa de Biarritz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Biarritz, una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/paisvascofrances/playadebiarritz/playa-de-biarritz.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/paisvascofrances/playadebiarritz/fichas/playa-de-biarritz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Biarritz - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Biarritz, una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/paisvascofrances/playadebiarritz/playa-de-biarritz.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/paisvascofrances/playadebiarritz/fichas/playa-de-biarritz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Biarritz - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Biarritz, una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/paisvascofrances/playadebiarritz/playa-de-biarritz.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Biarritz';
$localidad_minuscula = 'biarritz';

$descripcion = 'Descubre la Playa de Biarritz, un destino icónico en el País Vasco Francés, famoso por su vibrante ambiente, surf de calidad y una rica oferta gastronómica.';
$url = 'http://playas2024.kesug.com/bloques/localidades/paisvascofrances/playadebiarritz/fichas/playa-de-biarritz.php';

$mainEntity_description = 'La Playa de Biarritz es una de las playas más emblemáticas del País Vasco Francés, conocida por su ambiente vibrante, excelentes condiciones para el surf y una rica oferta gastronómica.';
$mainEntity_addressLocality = 'Biarritz';
$mainEntity_addressRegion = 'País Vasco Francés';
$mainEntity_addressCountry = 'Francia';

$mainEntity_geo_latitude = 43.4833; // Coordenadas aproximadas
$mainEntity_geo_longitude = -1.5581; // Coordenadas aproximadas

$mainEntity_image = 'https://example.com/path/to/biarritz-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/paisvascofrances/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>




<?php

$page = 'playadezarautz';
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