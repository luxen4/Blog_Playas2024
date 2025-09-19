<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'asador-la-perla';

$region = 'Cantabria';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Asador La Perla en Castro-Urdiales – Gastronomía y Mar en Cantabria 2025"); ?>
<?php define('DESCRIPTION', "El Asador La Perla en Castro-Urdiales: cocina tradicional cántabra con pescados frescos, carnes a la brasa y vistas únicas al mar Cantábrico. Una experiencia gastronómica en la costa de Cantabria."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Asador La Perla"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Asador La Perla, Castro-Urdiales, Cantabria, gastronomía cántabra, pescados frescos, carnes a la brasa, costa Cantábrica, restaurantes en Castro-Urdiales, turismo gastronómico') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
