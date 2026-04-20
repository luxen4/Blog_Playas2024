<?php define('DOMINIO', $_SERVER['DOCUMENT_ROOT']); ?>

<?php define('NOMBRE_PROYECTO', 'turismo-norte-espana'); ?>
<?php define('PATH_DOMINIO_RAIZ', DOMINIO . '/'.NOMBRE_PROYECTO); ?>

<?php define('PATH_LOCALIDADES', PATH_DOMINIO_RAIZ . '/'); ?>
<?php define('PATH_DOMINIO_URL', PATH_LOCALIDADES . "$region_minuscula/$localidad_minuscula/lugares-interes/" . LUGAR_MINUSCULA. "/"); ?>
<?php define('PATH_DOMINIO_LUGAR_IMAGEN_1', PATH_DOMINIO_URL. "/img/{$lugar_interes}-{$region_minuscula}.jpg"); ?>

<?php define('NAME_BLOG', "Turismo Norte de España"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('TURISMO_NORTE_ESPANA', 'Turismo Norte de España'); ?>
<?php define('WEB_PAGE', "website"); ?>
<?php define('EMAIL_AUTHOR', "superlaya50@gmail.com");?>
<?php define('HOY', date('Y-m-d')); ?>
<?php define('IDIOMA_LOCAL', 'es_ES'); ?>

<?php define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5"); ?>


<?php define('SUMARY_LARGE_IMAGE', 'sumary_large_image'); ?>
<?php define('CARD_SITE', '@laya_garcia'); ?>



<?php
if (!isset($lugar_interes)) {
    //require 'defines-localidad.php';
} else {
    require 'defines-lugar-interes.php';
}
?>



<?php define('PATH_HOME_HEAD_VARIABLES', PATH_DOMINIO_RAIZ. '/home/head/variables'); ?>

   
<?php define('PATH_BLOQUES',                      PATH_DOMINIO_RAIZ. '/bloques'); ?> 
<?php define('PATH_BLOQUES_CONTROL',              PATH_BLOQUES . '/control'); ?>
<?php define('PATH_BLOQUES_ESTRUCTURA',           PATH_BLOQUES. '/estructura'); ?>
<?php define('PATH_BLOQUES_ESTRUCTURA_HOME',           PATH_BLOQUES. '/estructura/_home'); ?>
<?php define('PATH_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_BLOQUES. '/estructura/paginas-generico'); ?>
<?php define('PATH_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD',         PATH_BLOQUES_ESTRUCTURA. '/paginas-playa/head'); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',         PATH_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>
<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>



<?php define('PATH_HREF_RAIZ', "/turismo-norte-espana"); ?>












<?php /*
$localidad = 'Baiona'; // Para francés, normalmente "Bayonne" pero si usas Baiona en español, mantén aquí
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $localidad
    )
);

$region = 'Nouvelle Aquitaine';
$region_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $region
    )
);  */ ?>