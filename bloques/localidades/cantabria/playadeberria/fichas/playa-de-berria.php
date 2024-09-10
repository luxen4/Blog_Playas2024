<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Berria';
$region = 'Cantabria';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Verificación adecuada si se utiliza para Berria
$description_content = 'Explora la Playa de Berria, un hermoso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar del entorno natural.';
$keywords_content = 'Playa de Berria, surf, naturaleza, paseo marítimo, Costa Cantábrica, turismo en Cantabria, Berria';

$graph_Meta_Tags_property_title = 'Playa de Berria - Información y Turismo';
$graph_Meta_Tags_property_description = 'Explora la Playa de Berria, un hermoso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar del entorno natural.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadeberria/playa-de-berria.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadeberria/fichas/playa-de-berria.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Berria - Información y Turismo';
$twiterCards_descripcion = 'Explora la Playa de Berria, un hermoso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar del entorno natural.';
$twiterCards_image = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadeberria/playa-de-berria.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadeberria/fichas/playa-de-berria.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Berria - Información y Turismo';
$pinterest_property_card_description_content = 'Explora la Playa de Berria, un hermoso arenal en Cantabria, ideal para el surf, paseos por la costa y disfrutar del entorno natural.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadeberria/playa-de-berria.jpg';

$href_styles = './../fichas/css/styles.css';


////////
// Para el archivo Structured_data_generico.php
$localidad = 'Berria';
$localidad_minuscula = 'berria';

$descripcion = 'Explora la Playa de Berria, un destino famoso por su arenal amplio, excelente para practicar surf y disfrutar de un entorno natural tranquilo.';
$url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playadeberria/fichas/playa-de-berria.php';

$mainEntity_description = 'La Playa de Berria es una de las playas más destacadas de Cantabria, conocida por su gran extensión, arena dorada, y excelentes condiciones para el surf.';
$mainEntity_addressLocality = 'Berria';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4630; // Coordenadas aproximadas
$mainEntity_geo_longitude = -3.4341; // Coordenadas aproximadas

$mainEntity_image = 'https://example.com/path/to/berria-image.jpg';
$mainEntity_url = 'http://playas2024.kesug.com/bloques/localidades/cantabria/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade'.$localidad_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../../bloques/estructura/body_generico.php"; ?>
    
</body>

</html>
