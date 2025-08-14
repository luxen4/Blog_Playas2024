<?php  
$localidad = 'Saint-Jean-de-Luz';     
$localidad_minuscula = 'saint-jean-de-luz'; 
$lugar_minuscula = 'iglesia-san-juan-bautista-saint-jean-de-luz';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Iglesia de San Juan Bautista – Historia y Patrimonio en Saint-Jean-de-Luz 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Iglesia de San Juan Bautista en Saint-Jean-de-Luz: joya arquitectónica del País Vasco Francés, famosa por su historia, arte religioso y vínculo con la realeza."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Iglesia San Juan Bautista Saint Jean de Luz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Iglesia San Juan Bautista, Saint-Jean-de-Luz, patrimonio, historia, arquitectura, arte religioso, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
