<?php  
$localidad = 'Bakio';        $localidad_minuscula = 'bakio'; $lugar_minuscula='playa-de-bakio';
$region = 'Bizkaia';         $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';         $country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Playa de Bakio – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "La Playa de Bakio es una de las más conocidas de Bizkaia: amplia, de arena dorada y con olas perfectas para surfistas. Rodeada de montañas y con un paseo marítimo lleno de bares y restaurantes, es un lugar ideal para familias, amantes del surf y quienes buscan disfrutar del Cantábrico.");?>
<?php define('COLOR_PAGE', "amber"); ?>
<?php define('LUGAR', "Playa de Bakio"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Bakio, Bizkaia, surf en Bakio, turismo Bizkaia, playas País Vasco, costa vasca, arena dorada, paseo marítimo') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
