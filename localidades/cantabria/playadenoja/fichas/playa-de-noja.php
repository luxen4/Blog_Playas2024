<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Noja';
$region = 'Cantabria';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Noja si se utiliza para verificación
$description_content = 'Descubre la Playa de Noja, un extenso arenal en Cantabria, perfecto para relajarse, practicar surf y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Noja, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Noja';

$graph_Meta_Tags_property_title = 'Playa de Noja - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Noja, un extenso arenal en Cantabria, perfecto para relajarse, practicar surf y disfrutar de la naturaleza.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadenoja/playa-de-noja.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadenoja/fichas/playa-de-noja.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Noja - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Noja, un extenso arenal en Cantabria, perfecto para relajarse, practicar surf y disfrutar de la naturaleza.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadenoja/playa-de-noja.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadenoja/fichas/playa-de-noja.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Noja - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Noja, un extenso arenal en Cantabria, perfecto para relajarse, practicar surf y disfrutar de la naturaleza.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadenoja/playa-de-noja.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Noja';
$localidad_minuscula = 'noja';

$descripcion = 'Descubre la Playa de Noja, un destino conocido por su amplia extensión de arena dorada, ideal para disfrutar del surf y la naturaleza en la costa cantábrica.';
$url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadenoja/fichas/playa-de-noja.php';

$mainEntity_description = 'La Playa de Noja es una de las más famosas de Cantabria, conocida por sus extensas playas de arena dorada y sus excelentes condiciones para deportes acuáticos como el surf.';
$mainEntity_addressLocality = 'Noja';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4855;
$mainEntity_geo_longitude = -3.5331;

$mainEntity_image = 'https://example.com/path/to/noja-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>