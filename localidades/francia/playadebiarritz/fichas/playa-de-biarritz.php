<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Biarritz';
$localidad_minuscula = 'biarritz';
$region = 'País Vasco Francés';
$carpeta = 'francia';
$country = 'Francia';

$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para '.$localidad'. si se utiliza para verificación
$description_content = 'Descubre la Playa de '.$localidad.', una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$keywords_content = 'Playa de '.$localidad.', surf, País Vasco Francés, turismo en '.$localidad.', playa, gastronomía, turismo costero';

$graph_Meta_Tags_property_title = 'Playa de '.$localidad.' - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de '.$localidad.', una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/localidades/' .$carpeta. '/'. $localidad_minuscula .'/fichas/playa-de-'.$localidad_minuscula.'.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/localidades/' .$carpeta. '/playade'.$localidad_minuscula. '/fichas/playa-de-'.$localidad_minuscula.'.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de '.$localidad.' - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de '.$localidad.', una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$twiterCards_image = 'http://playas2024.kesug.com/localidades/' .$carpeta. '/playade'.$localidad_minuscula. '/fichas/playa-de-'.$localidad_minuscula.'.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/localidades/' .$carpeta. '/playade'.$localidad_minuscula. '/fichas/playa-de-'.$localidad_minuscula.'.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de '.$localidad.' - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de '.$localidad.', una de las playas más famosas del País Vasco Francés, conocida por su ambiente vibrante, surf de calidad y exquisita gastronomía.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/localidades/' .$carpeta. '/playade'.$localidad_minuscula. '/fichas/playa-de-'.$localidad_minuscula.'.jpg';

//$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php

$descripcion = 'Descubre la Playa de '.$localidad.', un destino icónico en el País Vasco Francés, famoso por su vibrante ambiente, surf de calidad y una rica oferta gastronómica.';
$url = 'http://playas2024.kesug.com/localidades/' .$carpeta. '/playadeplayade'.$localidad_minuscula. '/fichas/playa-de-'.$localidad_minuscula.'.php';

$mainEntity_description = 'La Playa de '.$localidad.' es una de las playas más emblemáticas del País Vasco Francés, conocida por su ambiente vibrante, excelentes condiciones para el surf y una rica oferta gastronómica.';
$mainEntity_addressLocality = $localidad;
$mainEntity_addressRegion = $region;
$mainEntity_addressCountry = $country;

$mainEntity_geo_latitude = 43.4833; // Coordenadas aproximadas
$mainEntity_geo_longitude = -1.5581; // Coordenadas aproximadas

$mainEntity_image = 'https://example.com/path/to/'.$localidad_minuscula.'-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/localidades/' .$carpeta. '/playade'.$localidad_minuscula. '/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>