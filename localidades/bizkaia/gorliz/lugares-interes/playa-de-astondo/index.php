<?php  
$localidad = 'Gorliz';     $localidad_minuscula = 'gorliz'; $lugar_minuscula='playa-de-astondo';
$region = 'Bizkaia';    $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';       $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('TITLE', "Playa de Astondo en Gorliz – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Astondo en Gorliz: arena dorada, ambiente familiar, aguas tranquilas y un entorno natural único junto a la bahía de Gorliz."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Playa de Astondo"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Astondo, Gorliz, playas Bizkaia, turismo País Vasco, costa vasca, naturaleza, playa familiar, arena dorada, turismo natural') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico-lugares-interes.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>
<?php /* No 🙂
La Playa de Astondo no está en Getxo.

👉 Está en Gorliz (Bizkaia, País Vasco), en la bahía de Gorliz, muy cerca de Plentzia.
Es una playa amplia, de arena dorada, muy usada para turismo familiar y actividades náuticas.

En Getxo tienes playas como Arrigunaga, Ereaga o Azkorri, pero Astondo pertenece a Gorliz. */