<?php require PATH_RAIZ_LOCALIDADES_CARPETA . '/localizacion-localidad.php';?>

<?php
$charset = 'UTF-8';
$vieport_content = 'width=device-width, initial-scale=1.0';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content = 'Descubre la Playa de Sonabia en Castro-Urdiales: arena fina, aguas limpias y un entorno natural único junto a los acantilados de Cantabria.';
$keywords_content = 'Playa de Sonabia, Castro-Urdiales, playas Cantabria, turismo Castro-Urdiales, naturaleza, costa Cantábrica';
$robots_content = 'index, follow';
$author_content = 'Adrián Laya García';
$languaje_content = 'es';
$name_blog= '2025 Blog Playas 2025';
?>

<?php // meta-tags
$graph_Meta_Tags_property_title = 'Playa de Sonabia - Castro-Urdiales';
$graph_Meta_Tags_property_description = 'La Playa de Sonabia, un paraíso natural en Castro-Urdiales, con aguas cristalinas y acantilados impresionantes en Cantabria.';
$graph_Meta_Tags_property_image = PATH_RAIZ_LOCALIDADES_CARPETA."/playa-de-sonabia.jpg";
$graph_Meta_Tags_property_url = PATH_RAIZ_LOCALIDADES_CARPETA."/fichas/playa-de-sonabia.php";
$graph_Meta_Tags_property_type = 'website';
?>

<?php
// Pinterest
$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Playa de Sonabia - Castro-Urdiales';
$pinterest_property_card_description_content = 'Disfruta de la tranquilidad y belleza natural de la Playa de Sonabia en Castro-Urdiales.';
$pinterest_property_card_image_content = PATH_RAIZ_LOCALIDADES_CARPETA.'/playa-de-sonabia.jpg';
?>

<?php
// Twitter Cards
$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Playa de Sonabia - Castro-Urdiales';
$twiterCards_descripcion = 'Playa natural de Cantabria en Castro-Urdiales, perfecta para disfrutar del mar y el paisaje costero.';
$twiterCards_image = PATH_RAIZ_LOCALIDADES_CARPETA.'/playa-de-sonabia.jpg';
$twiterCards_url = PATH_RAIZ_LOCALIDADES_CARPETA.'/fichas/playa-de-sonabia.php';
?>

<?php
$descripcion = 'La Playa de Sonabia destaca por su arena fina, aguas limpias y el entorno natural protegido que la rodea.';
$url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$carpeta}/playa-de-sonabia.php";

$mainEntity_description = 'La Playa de Sonabia es una playa natural en Castro-Urdiales, con acantilados y un paisaje costero impresionante.';
$mainEntity_addressLocality = $localidad;
$mainEntity_addressRegion = $region;
$mainEntity_addressCountry = $country;

$mainEntity_geo_latitude = 43.3820; // Latitud aproximada de la playa
$mainEntity_geo_longitude = -3.2300; // Longitud aproximada

$mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA."/img/playa-de-sonabia.jpg";
$mainEntity_url = PATH_RAIZ . "playa-de-sonabia";
?>

<?php // structure-data-schema-org ?>
<?php
$mainEntity_description = 'La Playa de Sonabia es una playa natural en Castro-Urdiales, con acantilados y un paisaje costero impresionante.';
$mainEntity_addressLocality = 'Castro-Urdiales';
$mainEntity_addressRegion = 'Cantabria';
$mainEntity_addressCountry = 'España';

$mainEntity_geo_latitude = 43.3820;
$mainEntity_geo_longitude = -3.2300;

$mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA."/img/playa-de-sonabia.jpg";
$mainEntity_url = PATH_RAIZ . "playa-de-sonabia";
?>