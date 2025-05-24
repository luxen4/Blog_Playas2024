
<?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2024'); ?>
<?php define('PATH_RAIZ_BLOQUES', PATH_RAIZ. '/bloques'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES. '/estructura'); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>


<?php define('PATH_RAIZ_LOCALIDADES_CARPETA', PATH_RAIZ_LOCALIDADES. "/" .$region_minuscula. "/" . $carpeta. "/paginas_secundarias"); ?>


<?php define('SECTIONS_PAGINAS_SECUNDARIAS', './../paginas_secundarias/'); ?>


<?php define('PATH_RAIZ_WEB_PLAYA', PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$carpeta}/fichas/sections/head/variables/web-playa"); ?>

<?php define('PATH_RAIZ_LOCALIDADES_MAIN', PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$carpeta}/fichas/sections/main"); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',  PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>

