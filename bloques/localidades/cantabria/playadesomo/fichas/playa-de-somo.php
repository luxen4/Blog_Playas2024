<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Somo';
$region = 'Cantabria';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Somo si se utiliza para verificación
$description_content = 'Descubre la Playa de Somo, un extenso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Somo, surf, naturaleza, paseo marítimo, Costa Cantábrica, turismo en Cantabria, Somo';

$graph_Meta_Tags_property_title = 'Playa de Somo - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Somo, un extenso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar de la naturaleza.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesomo/playa-de-somo.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesomo/fichas/playa-de-somo.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Somo - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Somo, un extenso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar de la naturaleza.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesomo/playa-de-somo.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesomo/fichas/playa-de-somo.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Somo - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Somo, un extenso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar de la naturaleza.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesomo/playa-de-somo.jpg';

//$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Somo';
$localidad_minuscula = 'somo';

$descripcion = 'Descubre la Playa de Somo, un destino popular por su extenso arenal, perfecto para el surf y paseos por la costa cantábrica, con vistas impresionantes y una rica biodiversidad.';
$url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadesomo/fichas/playa-de-somo.php';

$mainEntity_description = 'La Playa de Somo es una de las playas más populares de Cantabria, conocida por su gran extensión, arena dorada y sus condiciones excepcionales para la práctica del surf.';
$mainEntity_addressLocality = 'Somo';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4523;
$mainEntity_geo_longitude = -3.7424;

$mainEntity_image = 'https://example.com/path/to/somo-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>
