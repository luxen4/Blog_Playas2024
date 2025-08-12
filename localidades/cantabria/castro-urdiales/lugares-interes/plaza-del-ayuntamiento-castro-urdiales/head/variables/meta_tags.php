<?php
// Plaza del Ayuntamiento – Castro-Urdiales, Cantabria
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Cambia si tienes un valor distinto

// Pinterest Cards
$pinterest_property_card_card_content        = SUMARY_LARGE_IMAGE;
$pinterest_property_card_title_content       = 'Plaza del Ayuntamiento – Castro-Urdiales, Cantabria';
$pinterest_property_card_description_content = 'Descubre la Plaza del Ayuntamiento de Castro-Urdiales: centro histórico, vida local y eventos en un entorno único junto al mar.';
$pinterest_property_card_image_content       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/plaza-ayuntamiento-1.jpg";

// Twitter Cards
$twitterCards_card        = SUMARY_LARGE_IMAGE;
$twitterCards_site        = CARD_SITE;
$twitterCards_title       = 'Plaza del Ayuntamiento – Castro-Urdiales, Cantabria';
$twitterCards_description = 'Explora la Plaza del Ayuntamiento de Castro-Urdiales: arquitectura histórica, ambiente marinero y el corazón social de la villa.';
$twitterCards_image       = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/img/plaza-ayuntamiento-1.jpg";
$twitterCards_url         = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/plaza-ayuntamiento.php";

// Open Graph
$graph_Meta_Tags_property_title        = 'Plaza del Ayuntamiento – Castro-Urdiales, Cantabria';
$graph_Meta_Tags_property_description  = 'Visita la Plaza del Ayuntamiento de Castro-Urdiales: un lugar lleno de historia, rodeado de edificios emblemáticos y con ambiente único.';
$graph_Meta_Tags_property_image        = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/img/".LUGAR_MINUSCULA.".jpg";
$graph_Meta_Tags_property_url          = PATH_RAIZ_LOCALIDADES_CARPETA . "/lugares-interes/".LUGAR_MINUSCULA."/index.php"; 

echo($graph_Meta_Tags_property_image);
?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD . '/graph_Meta_Tags_property-generico.php'; ?>
