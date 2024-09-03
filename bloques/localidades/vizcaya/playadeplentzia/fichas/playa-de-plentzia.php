<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Plentzia';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Plentzia si se utiliza para verificación
$description_content = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$keywords_content = 'Playa de Plentzia, deportes acuáticos, naturaleza, paseo marítimo, Costa Vasca, turismo en Bizkaia, Plentzia';

$graph_Meta_Tags_property_title = 'Playa de Plentzia - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadeplentzia/playa-de-plentzia.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadeplentzia/fichas/playa-de-plentzia.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Plentzia - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadeplentzia/playa-de-plentzia.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadeplentzia/fichas/playa-de-plentzia.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Plentzia - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Plentzia, un hermoso arenal en la costa de Bizkaia, ideal para disfrutar de un día en familia, practicar deportes acuáticos y explorar la encantadora villa de Plentzia.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadeplentzia/playa-de-plentzia.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Plentzia';
$localidad_minuscula = 'plentzia';

$descripcion = 'Descubre la Playa de Plentzia, un destino ideal en la costa de Bizkaia, conocido por su arena dorada y un ambiente familiar, perfecto para disfrutar de deportes acuáticos y paseos relajados.';
$url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playadeplentzia/fichas/playa-de-plentzia.php';

$mainEntity_description = 'La Playa de Plentzia es una joya en la costa de Bizkaia, conocida por su ambiente tranquilo, arena dorada y excelentes opciones para practicar deportes acuáticos.';
$mainEntity_addressLocality = 'Plentzia';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4107;
$mainEntity_geo_longitude = -2.9483;

$mainEntity_image = 'https://example.com/path/to/plentzia-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
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



<!-- Encabezado -->
<header class="container my-4">
    <h1 class="text-center">Playa de Plentzia</h1>
    <p class="text-center">Descubre la Playa de Plentzia, una hermosa playa en la costa de Bizkaia, conocida por su ambiente tranquilo, arena dorada y aguas calmadas, ideales para disfrutar en familia. Perfecta para un día de relax y para explorar la encantadora villa de Plentzia.</p>
</header>



<?php $articulo = 'sandals_man'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

<!-- Contenido principal -->
<main class="container my-4">
    <?php require './sections/descripcion-detallada.php'; ?>
    <?php $articulo = 'jeans_man'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './sections/mapa-ubicacion.php'; ?>
    <?php $articulo = 'shirts_modelo_derecha'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './sections/actividades-recomendadas.php'; ?>
    <?php $articulo = 'sneakers_izquierda_45'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    <?php require './sections/servicios.php'; ?>
    <?php $articulo = 'dress_woman'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>


    <?php require './sections/galeria-imagenes.php'; ?>
    <?php $articulo = 'purse_woman'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

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