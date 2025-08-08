
<?php define('TITLE', "Playa de Cuberris en Ajo – Turismo y Naturaleza en Cantabria 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Cuberris en Ajo: arena dorada, olas ideales para surfistas, entornos naturales protegidos y un ambiente perfecto para disfrutar del Cantábrico.");?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/ajo/variables-localidad.php"; ?>

<?php 
    $lugar   = 'Playa de Cuberris'; 
    $lugar_interes  = strtolower(str_replace(' ', '-', $lugar));
    $color_page     = 'sky';
    $keywords_content    = 'Playa de Cuberris, Ajo, playas Cantabria, surf Cantabria, naturaleza, costa de Cantabria, turismo natural, playa de arena';
?>



<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>