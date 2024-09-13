<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Hendaya';
$region = 'Guipuzcoa';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Hendaya si se utiliza para verificación
$description_content = 'Explora la Playa de Hendaya, una impresionante playa en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$keywords_content = 'Playa de Hendaya, surf, naturaleza, paseo marítimo, Costa Vasca, turismo en Gipuzkoa, Hendaya';

$graph_Meta_Tags_property_title = 'Playa de Hendaya - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Hendaya, una impresionante playa en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadehendaya/playa-de-hendaya.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadehendaya/fichas/playa-de-hendaya.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Hendaya - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Hendaya, una impresionante playa en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadehendaya/playa-de-hendaya.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadehendaya/fichas/playa-de-hendaya.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Hendaya - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Hendaya, una impresionante playa en el País Vasco, ideal para el surf, paseos por la costa y disfrutar de la gastronomía vasca.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadehendaya/playa-de-hendaya.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Hendaya';
$localidad_minuscula = 'hendaya';

$descripcion = 'Explora la Playa de Hendaya, un destino famoso por su extensa playa, excelente para practicar surf y disfrutar de un vibrante paseo marítimo lleno de vida.';
$url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playadehendaya/fichas/playa-de-hendaya.php';

$mainEntity_description = 'La Playa de Hendaya es una de las playas más destacadas del País Vasco, conocida por su gran extensión, arena dorada, y excelentes condiciones para el surf.';
$mainEntity_addressLocality = 'Hendaya';
$mainEntity_addressRegion = 'Gipuzkoa';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3686;
$mainEntity_geo_longitude = -1.7774;

$mainEntity_image = 'https://example.com/path/to/hendaya-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/guipuzkoa/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>