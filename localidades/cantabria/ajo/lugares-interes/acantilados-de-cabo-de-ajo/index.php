<?php  
$localidad = 'Ajo';     
$localidad_minuscula = 'ajo'; 
$lugar_minuscula = 'acantilados-de-cabo-de-ajo';

$region = 'Cantabria';    
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';       
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Acantilados del Cabo de Ajo – Senderismo y Paisajes de Cantabria 2025"); ?>
<?php define('DESCRIPTION', "Los Acantilados del Cabo de Ajo ofrecen vistas espectaculares del mar Cantábrico, senderos panorámicos y oportunidades únicas para fotografía y observación de aves. Ideal para caminatas y disfrutar de la naturaleza en Bareyo, Cantabria."); ?>
<?php define('COLOR_PAGE', "emerald"); ?>
<?php define('LUGAR', "Acantilados del Cabo de Ajo"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Acantilados Cabo de Ajo, Cantabria, senderismo, acantilados, miradores, turismo Cantabria, naturaleza, costa cantábrica, Bareyo, mar Cantábrico') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>