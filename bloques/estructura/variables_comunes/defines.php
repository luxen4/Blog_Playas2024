
<?php define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2024'); ?>
<?php define('PATH_RAIZ_BLOQUES', PATH_RAIZ. '/bloques'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES. '/estructura'); ?>

<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>


<?php define('PATH_RAIZ_LOCALIDADES_CARPETA', PATH_RAIZ_LOCALIDADES. "/" .$region_minuscula. "/" . $carpeta); ?>

<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_SECTIONS_VARIABLES', PATH_RAIZ_LOCALIDADES_CARPETA. "/fichas/sections/variables"); ?>



<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS', PATH_RAIZ_LOCALIDADES. "/" .$region_minuscula. "/" . $carpeta. "/paginas_secundarias"); ?>

<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA', PATH_RAIZ_LOCALIDADES_CARPETA. "/fichas/sections/head/variables/web-playa/"); ?>


<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_ETIQUETAS_META', PATH_RAIZ_LOCALIDADES_CARPETA. "/fichas/sections/head/etiquetas_meta/"); ?>



<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_JSON_LD', PATH_RAIZ_LOCALIDADES_CARPETA. "/fichas/jsonld/"); ?>



<?php define('SECTIONS_PAGINAS_SECUNDARIAS', './../paginas_secundarias/'); ?>


<?php define('PATH_RAIZ_WEB_PLAYA', PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$carpeta}/fichas/sections/head/variables/web-playa"); ?>

<?php define('PATH_RAIZ_LOCALIDADES_MAIN', PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$carpeta}/fichas/sections/main"); ?>

<?php define('PATH_BLOQUES_SECTIONS_GENERICO',  PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>
<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>

<?php define('PATH_RAIZ_LOCALIDADES_SECTIONS_VARIABLES',  PATH_RAIZ_LOCALIDADES_CARPETA. '/fichas/sections/variables'); ?>
