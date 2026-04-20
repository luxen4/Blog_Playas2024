<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('PATH_LOCALIDAD', PATH_LOCALIDADES .$region_minuscula.'/'.$localidad_minuscula.'/lugares-interes/'.$lugar_interes.'img/'); ?>

<?php define('PATH_LUGARES_INTERES', PATH_LOCALIDAD ."/lugares-interes/".$lugar_minuscula); ?>
<?php define('PATH_LUGARES_INTERES_IMG', PATH_LUGARES_INTERES .'/img'); ?>

<?php define('PATH_LOCALIDADES_ESTRUCTURA_BODY_MAIN', PATH_DOMINIO_RAIZ. "/_estructura/body/main/"); ?>

<?php define('PATH_HREF_CARPETA_LUGARES_INTERES', "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes");?>
<?php define('PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES', PATH_HREF_CARPETA_LUGARES_INTERES. "/".LUGAR_MINUSCULA."/img"); ?>