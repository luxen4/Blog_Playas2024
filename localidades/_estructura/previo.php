<?php
define('PATH_DOMINIO_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana"); 
define('PATH_LOCALIDAD', PATH_DOMINIO_RAIZ. "/{$region_minuscula}/{$localidad_minuscula}"); 
define('PATH_CARPETA_LOCALIDADES_LUGARES_INTERES', PATH_LOCALIDAD. "/{$nombre_sub_carpeta}"); 
define('PATH_CARPETA_LUGARES_CARPETA_LUGAR', PATH_CARPETA_LOCALIDADES_LUGARES_INTERES. "/{$localidad_minuscula_lugar}"); 
define('PATH_CARPETA_LUGARES_CARPETA_LUGAR_BODY', PATH_CARPETA_LUGARES_CARPETA_LUGAR. "/body"); 

define('PATH_CARPETA_LUGARES_SCHEMAS', PATH_CARPETA_LUGARES_CARPETA_LUGAR. "/schemas"); 
define('PATH_LOCALIDAD_HEAD', PATH_CARPETA_LUGARES_CARPETA_LUGAR. "/head"); 
define('PATH_LOCALIDAD_HEAD_VARIABLES', PATH_CARPETA_LUGARES_CARPETA_LUGAR. "/head/variables"); 

define('PATH_HREF_CARPETA', "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}");
define('PATH_HREF_CARPETA_LUGARES_INTERES', PATH_HREF_CARPETA. "/lugares-interes");
define('PATH_HREF_CARPETA_IMAGENES', PATH_HREF_CARPETA_LUGARES_INTERES. "/{$localidad_minuscula_lugar}/imagenes");
?>

<?php require PATH_LOCALIDAD_HEAD_VARIABLES. "/data-generico.php"; ?>