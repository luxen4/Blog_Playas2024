<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Muskiz';
$region = 'vizcaya';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Muskiz si se utiliza para verificación
$description_content = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$keywords_content = 'Playa de Muskiz, naturaleza, tranquilidad, Costa Vasca, turismo en Bizkaia, Muskiz';

$graph_Meta_Tags_property_title = 'Playa de Muskiz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playademuskiz/playa-de-muskiz.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playademuskiz/fichas/playa-de-muskiz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Muskiz - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playademuskiz/playa-de-muskiz.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playademuskiz/fichas/playa-de-muskiz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Muskiz - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playademuskiz/playa-de-muskiz.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Muskiz';
$localidad_minuscula = 'muskiz';

$descripcion = 'Descubre la Playa de Muskiz, un tranquilo arenal en el País Vasco, ideal para disfrutar de la naturaleza y relajarse junto al mar en un entorno apacible.';
$url = 'http://playas2024.kesug.com/bloques/localidades/bizkaia/playademuskiz/fichas/playa-de-muskiz.php';

$mainEntity_description = 'La Playa de Muskiz es un hermoso y tranquilo rincón en la costa de Bizkaia, ideal para quienes buscan relajarse y disfrutar de un entorno natural único.';
$mainEntity_addressLocality = 'Muskiz';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3482;
$mainEntity_geo_longitude = -3.1001;

$mainEntity_image = 'https://example.com/path/to/muskiz-image.jpg';
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



<?php         
    $lugar = 'playademuskiz';
    $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' .$region. '/' . $lugar . '/img'; ?>


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


<?php 
/*

<!-- Pie de página -->
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Playas 2024</h5>
                <p>Tu guía completa para explorar las mejores playas de España. Encuentra información sobre destinos, actividades y servicios para planificar tu próxima escapada al mar.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Enlaces Útiles</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="#descripcion" class="text-dark">Descripción</a></li>
                    <li><a href="#servicios" class="text-dark">Servicios</a></li>
                    <li><a href="#actividades" class="text-dark">Actividades</a></li>
                    <li><a href="#informacion" class="text-dark">Información Adicional</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contacto</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="mailto:info@playas2024.com" class="text-dark">info@playas2024.com</a></li>
                    <li><a href="tel:+34900123456" class="text-dark">+34 900 123 456</a></li>
                    <li><a href="./contacto.html" class="text-dark">Formulario de Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
        © 2024 Playas 2024. Todos los derechos reservados.
    </div>
</footer>

*/ ?>