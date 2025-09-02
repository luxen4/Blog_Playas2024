<?php  
$localidad = 'Muskiz';        $localidad_minuscula = 'muskiz'; $lugar_minuscula = 'playa-de-la-arena';
$region = 'Bizkaia';          $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';          $country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de la Arena en Muskiz – Surf y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "La Playa de la Arena, situada en Muskiz, es una de las más largas de Bizkaia. Con arena fina y dorada, dunas y un entorno natural privilegiado junto al río Barbadun, es ideal para familias, surfistas y amantes del Cantábrico."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Playa de la Arena"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de la Arena, Muskiz, Bizkaia, surf en Muskiz, turismo Bizkaia, playas País Vasco, costa vasca, arena dorada, dunas de Muskiz, río Barbadun') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
