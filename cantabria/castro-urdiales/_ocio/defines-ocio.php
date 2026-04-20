<?php define('PATH_DOMINIO_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana"); ?>
<?php define('PATH_BLOQUES_ESTRUCTURA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/bloques/estructura"); ?>
<?php define('PATH_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD', rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/bloques/estructura/paginas-secundarias/head"); ?>
<?php define('PATH_LOCALIDAD', rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}"); ?>
<?php define('PATH_LOCALIDADES_OCIO', PATH_LOCALIDAD . '/ocio'); ?>
<?php define('PATH_LOCALIDADES_OCIO_HEAD', PATH_LOCALIDADES_OCIO . '/head'); ?>
<?php define('PATH_LOCALIDADES_OCIO_HEAD_VARIABLES', PATH_LOCALIDADES_OCIO . '/head/variables');?>
<?php define('PATH_LOCALIDADES_OCIO_SCHEMAS_BODY', PATH_LOCALIDADES_OCIO . '/schemas-body');?>
<?php define('PATH_LOCALIDADES_OCIO_SCHEMAS_HEAD', PATH_LOCALIDADES_OCIO . '/schemas-head');?>

<?php define('PATH_HREF_CARPETA', "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}");?>

