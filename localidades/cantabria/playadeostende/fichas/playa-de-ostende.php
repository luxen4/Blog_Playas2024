<!DOCTYPE html>
<html lang="es">

<?php
$localidad = 'Ostende';
$region = 'Cantabria';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
$description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende';

$graph_Meta_Tags_property_title = 'Playa de Ostende - Información y Turismo';
$graph_Meta_Tags_property_description = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$graph_Meta_Tags_property_image = 'http://playas2024.kesug.com/localidades/cantabria/playadeostende/playa-de-ostende.jpg';
$graph_Meta_Tags_property_url = 'http://playas2024.kesug.com/localidades/cantabria/playadeostende/fichas/playa-de-ostende.php';
$graph_Meta_Tags_property_type = 'website';

$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Ostende - Información y Turismo';
$twiterCards_descripcion = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$twiterCards_image = 'http://playas2024.kesug.com/localidades/cantabria/playadeostende/playa-de-ostende.jpg';
$twiterCards_url = 'http://playas2024.kesug.com/localidades/cantabria/playadeostende/fichas/playa-de-ostende.php?i=1';

$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Ostende - Información y Turismo';
$pinterest_property_card_description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$pinterest_property_card_image_content = 'http://playas2024.kesug.com/localidades/cantabria/playadeostende/playa-de-ostende.jpg';


////////
// Para el archivo Structured_data_generico.php
$localidad_minuscula = 'ostende';

$descripcion = 'Descubre la Playa de Ostende, un destino conocido por su amplia extensión de arena dorada, ideal para disfrutar del surf y la naturaleza en la costa cantábrica.';
$url = 'http://playas2024.kesug.com/localidades/cantabria/playadeostende/fichas/playa-de-ostende.php';

$mainEntity_description = 'La Playa de Ostende es famosa por su hermosa arena dorada y sus excelentes condiciones para deportes acuáticos como el surf.';
$mainEntity_addressLocality = 'Ostende';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.4693; // Actualiza según la ubicación correcta
$mainEntity_geo_longitude = -3.5002; // Actualiza según la ubicación correcta

$mainEntity_image = 'http://playas2024.kesug.com/localidades/cantabria/playadeostende/playa-de-ostende.jpg'; // Reemplaza con la imagen correcta
$mainEntity_url = 'http://playas2024.kesug.com/localidades/cantabria/playade' . $localidad_minuscula . '/fichas/playa-de-' . $localidad_minuscula . '.php';
////////

require "./../../../../bloques/estructura/head.php"; ?>

<body>
    <?php $page = 'playade' . $localidad_minuscula; ?>
    <?php require "./sections/info.php"; ?>    
    <?php require "./../../../../bloques/estructura/body_generico.php"; ?>
</body>

</html>