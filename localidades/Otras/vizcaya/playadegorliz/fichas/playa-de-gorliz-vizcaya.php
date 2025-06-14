<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Gorliz';
$region = 'Bizkaia';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Actualiza con el código correcto para Gorliz si es necesario
$description_content = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$keywords_content = 'Playa de Gorliz, surf, naturaleza, playa Bizkaia, turismo en Gorliz, actividades al aire libre';

$graph_Meta_Tags_property_title = 'Playa de Gorliz - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$graph_Meta_Tags_property_image = 'http://playas2025.kesug.com/localidades/bizkaia/playadegorliz/playa-de-gorliz.jpg';
$graph_Meta_Tags_property_url = 'http://playas2025.kesug.com/localidades/bizkaia/playadegorliz/fichas/playa-de-gorliz.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Gorliz - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$twiterCards_image = 'http://playas2025.kesug.com/localidades/bizkaia/playadegorliz/playa-de-gorliz.jpg';
$twiterCards_url = 'http://playas2025.kesug.com/localidades/bizkaia/playadegorliz/fichas/playa-de-gorliz.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Gorliz - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Gorliz, una hermosa playa en Bizkaia, ideal para disfrutar del sol, practicar deportes acuáticos y relajarte en un entorno natural impresionante.';
$pinterest_property_card_image_content = 'http://playas2025.kesug.com/localidades/bizkaia/playadegorliz/playa-de-gorliz.jpg';

//$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Gorliz';
$localidad_minuscula = 'gorliz';

$descripcion = 'Explora la Playa de Gorliz, un destino popular en Bizkaia con un extenso arenal, ideal para el surf y disfrutar de actividades al aire libre.';
$url = 'http://playas2025.kesug.com/localidades/bizkaia/playadegorliz/fichas/playa-de-gorliz.php';

$mainEntity_description = 'La Playa de Gorliz es conocida por su amplia extensión de arena dorada y su entorno natural, perfecto para disfrutar de actividades al aire libre y deportes acuáticos.';
$mainEntity_addressLocality = 'Gorliz';
$mainEntity_addressRegion = 'Bizkaia';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4005;
$mainEntity_geo_longitude = -2.9714;

$mainEntity_image = 'https://example.com/path/to/gorliz-image.jpg';
$mainEntity_url = 'http://playas2025.kesug.com/localidades/bizkaia/playadegorliz/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
