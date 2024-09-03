<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Azkorri';
$region = 'Vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Azkorri si se utiliza para verificación
$description_content = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$keywords_content = 'Playa de Azkorri, surf, naturaleza, costa de Vizcaya, turismo en Vizcaya, Azkorri';

$graph_Meta_Tags_property_title = 'Playa de Azkorri - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/vizcaya/playadeazkorri/playa-de-azkorri.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/vizcaya/playadeazkorri/fichas/playa-de-azkorri.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Azkorri - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/vizcaya/playadeazkorri/playa-de-azkorri.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/vizcaya/playadeazkorri/fichas/playa-de-azkorri.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Azkorri - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Azkorri, un enclave natural en la costa de Vizcaya, ideal para disfrutar de la tranquilidad, surf y vistas impresionantes del paisaje vasco.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/vizcaya/playadeazkorri/playa-de-azkorri.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Azkorri';
$localidad_minuscula = 'azkorri';

$descripcion = 'Explora la Playa de Azkorri, un destino conocido por su entorno natural, perfecto para la práctica del surf y disfrutar de la serenidad del mar Cantábrico.';
$url = 'http://playas2024.kesug.com/bloques/localidades/vizcaya/playadeazkorri/fichas/playa-de-azkorri.php';

$mainEntity_description = 'La Playa de Azkorri es un lugar único en la costa de Vizcaya, con su arena oscura, impresionantes acantilados, y excelentes condiciones para el surf.';
$mainEntity_addressLocality = 'Azkorri';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3746;
$mainEntity_geo_longitude = -3.0152;

$mainEntity_image = 'https://example.com/path/to/azkorri-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/vizcaya/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
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
    <?php $articulo = 'sandals_woman_izda_15'; include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

    

    <?php require './sections/contacto.php'; ?>
        <?php $articulo = 'sandals_woman_izda_15';
        include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>

</main>

<!-- Footer -->
<?php require $atras_5niveles . '/bloques/estructura/footer.php'; ?>


<?php require $atras_5niveles . '/bloques/estructura/anuncios/js/logica_anuncios.php'; ?>
<?php require $atras_5niveles . '/bloques/estructura/js_bootstrap/scripts-bootstrap.php'; ?>


<!-- Footer -->
<footer class="container my-4 text-center">
    <p>&copy; 2024 Playa de Azkorri. Todos los derechos reservados.</p>
</footer>

<!-- Enlace a los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>