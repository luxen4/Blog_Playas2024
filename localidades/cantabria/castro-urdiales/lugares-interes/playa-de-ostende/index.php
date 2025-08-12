<?php  
$localidad = 'Castro-Urdiales';     $localidad_minuscula = 'castro-urdiales'; $lugar_minuscula='playa-de-ostende';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('TITLE', "Playa de Ostende en Castro-Urdiales – Turismo y Naturaleza en Cantabria 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Ostende en Castro-Urdiales, Cantabria: una playa urbana amplia y de fácil acceso, perfecta para familias. Ofrece servicios completos, paseo marítimo, vigilancia, y vistas al mar Cantábrico.");?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Playa de Ostende"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Ostende, Castro-Urdiales, playas Cantabria, playa urbana, costa de Cantabria, turismo Castro Urdiales, playa accesible, servicios playa, paseo marítimo') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>