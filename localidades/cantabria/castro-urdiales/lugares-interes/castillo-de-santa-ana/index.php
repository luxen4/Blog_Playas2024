<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'castillo-de-santa-ana';

$region = 'Cantabria';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Castillo de Santa Ana en Castro-Urdiales – Historia y Patrimonio en Cantabria 2025"); ?>
<?php define('DESCRIPTION', "El Castillo de Santa Ana en Castro-Urdiales: una fortaleza medieval junto al puerto, con vistas al mar Cantábrico y al casco histórico. Un lugar imprescindible de la historia y el patrimonio de Cantabria."); ?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Castillo de Santa Ana"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Castillo de Santa Ana, Castro-Urdiales, Cantabria, fortaleza medieval, patrimonio histórico, turismo cultural, mar Cantábrico, casco histórico, monumentos en Castro-Urdiales') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>

