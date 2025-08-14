<?php  
$localidad = 'Biarritz';     
$localidad_minuscula = 'biarritz'; 
$lugar_minuscula = 'grande-plage-biarritz';
$region = 'Nouvelle-Aquitaine';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'Francia';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Grande Plage de Biarritz – Playa Emblemática y Epicentro del Surf en la Costa Vasca Francesa 2025"); ?>
<?php define('DESCRIPTION', "Explora la Grande Plage de Biarritz: arena dorada, ambiente cosmopolita, surf, vistas espectaculares y el corazón turístico de la ciudad."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Grande Plage Biarritz"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Grande Plage, Biarritz, playa urbana, surf, turismo, costa atlántica, País Vasco Francés') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
