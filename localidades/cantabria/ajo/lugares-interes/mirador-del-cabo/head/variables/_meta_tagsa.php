<?php
// Ruta de la Costa Oriental de Ajo – Cantabria
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un valor distinto


$pinterest_property_card_card_content        = SUMARY_LARGE_IMAGE;
$pinterest_property_card_title_content       = 'Ruta de la Costa Oriental – Ajo, Cantabria';
$pinterest_property_card_description_content = 'Recorre la Ruta de la Costa Oriental en Ajo: senderos naturales, acantilados, faros y vistas panorámicas del Cantábrico en una experiencia inolvidable.';
$pinterest_property_card_image_content       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/ruta-costa-oriental-ajo-1.jpg";

// Twitter Cards
$twitterCards_card        = SUMARY_LARGE_IMAGE;
$twitterCards_site        = CARD_SITE;
$twitterCards_title       = 'Ruta de la Costa Oriental – Ajo, Cantabria';
$twitterCards_description = 'Explora la Ruta de la Costa Oriental en Ajo: un paseo por acantilados, naturaleza salvaje y vistas al Faro de Ajo. Ideal para senderistas y fotógrafos.';
$twitterCards_image       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/ruta-costa-oriental-ajo-1.jpg";
$twitterCards_url         = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/ruta-costa-oriental.php";

// Open Graph
$graph_Meta_Tags_property_title        = 'Ruta de la Costa Oriental – Ajo, Cantabria';
$graph_Meta_Tags_property_description  = 'Descubre la Ruta de la Costa Oriental de Ajo: senderos entre el mar y los acantilados, perfectos para conectar con la naturaleza del norte de España.';
$graph_Meta_Tags_property_image        = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/{$lugar_interes}/img/{$lugar_interes}.jpg";

$graph_Meta_Tags_property_url          = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/{$lugar_interes}/index.php"; 
echo($graph_Meta_Tags_property_image);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD. '/graph_Meta_Tags_property-generico.php'; ?>