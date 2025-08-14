<?php  
$localidad = 'Hendaia';     
$localidad_minuscula = 'hendaia'; 
$lugar_minuscula = 'playa-ondarraitz-hendaia';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Ondarraitz – Naturaleza, Surf y Relax en Hendaya 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Ondarraitz en Hendaya: arena fina, olas para surf, paisajes costeros impresionantes y un ambiente tranquilo ideal para paseos y familias."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Playa Ondarraitz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa Ondarraitz, Hendaya, playa, surf, turismo, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
