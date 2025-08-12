<?php define('LOCALIDAD', $localidad); ?> <?php define('LOCALIDAD_MINUSCULA', strtolower(str_replace(' ', '-', $localidad))); ?> 
<?php define('REGION', $region); ?>
<?php define('TITLE', LOCALIDAD. " – Turismo y Naturaleza en ".REGION. " 2025"); ?>
<?php define('LUGAR', LOCALIDAD); ?> 
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA . "/head/variables/meta_tags.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES . "/data-generico.php";  ?>