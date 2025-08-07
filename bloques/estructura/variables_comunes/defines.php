
<?php define('NAME_BLOG', "Blog Playas Cantábrico"); ?>
<?php define('AUTHOR', "Adrián Laya García"); ?>
<?php define('WEB_PAGE', "website"); ?>
<?php define('EMAIL_AUTHOR', "superlaya50@gmail.com");?>
<?php define('HOY', date('Y-m-d')); ?>
<?php define('IDIOMA_LOCAL', 'es_ES'); ?>

<?php define('TURISMO_PLAYAS', 'Turismo y Playas'); ?>

<?php define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5"); ?>

<?php define('NOMBRE_PROYECTO', '/Blog_Playas2025'); ?>
<?php define('SUMARY_LARGE_IMAGE', 'sumary_large_image'); ?>
<?php define('CARD_SITE', '@laya_garcia'); ?>

<?php define('PATH_DOMINIO_RAIZ', 'https://playas2024.kesug.com/Blog_Playas2025/'); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES', 'https://playas2024.kesug.com/Blog_Playas2025/localidades/'); ?>
<?php define('PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD', PATH_DOMINIO_RAIZ_LOCALIDADES .$region_minuscula.'/'.$localidad_minuscula); ?>


<?php //define('PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS_LUGAR_INTERES_IMG_LUGAR_INTERES_LOCALIDAD_REGION', PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD.'/lugares-interes/playas/'.$lugar_interes.'/img/'.$lugar_interes.'-'.$localidad_minuscula.'-'.$region_minuscula.'-1.jpg'); ?>
<?php define('PATH_IMAGEN_PRESENTACION_PLAYA', PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD.'/lugares-interes/playas/'.$lugar_interes.'/img/'.$lugar_interes.'-'.$localidad_minuscula.'-'.$region_minuscula.'-1.jpg'); ?>




<?php define('PATH_RAIZ',                                               rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/Blog_Playas2025'); ?>
<?php define('PATH_RAIZ_ANUNCIOS',  PATH_RAIZ. '/anuncios'); ?>
<?php define('PATH_RAIZ_HOME_HEAD_VARIABLES', PATH_RAIZ. '/home/head/variables'); ?>
   
<?php define('PATH_RAIZ_BLOQUES',                                       PATH_RAIZ. '/bloques'); ?> 
<?php define('PATH_RAIZ_BLOQUES_CONTROL',                               PATH_RAIZ_BLOQUES . '/control'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA',                            PATH_RAIZ_BLOQUES. '/estructura'); ?>

<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN_SECTIONS', PATH_RAIZ_BLOQUES_ESTRUCTURA ."/paginas-playa/body/main/sections/"); ?>


<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_ANUNCIOS_JS',                PATH_RAIZ_BLOQUES_ESTRUCTURA. '/anuncios/js'); ?>
<?php define('PATH_BLOQUES_SECTIONS_GENERICO',                          PATH_RAIZ_BLOQUES_ESTRUCTURA. '/sections_generico'); ?>
<?php define('PATH_RAIZ_ESTRUCTURA_PAGINAS_PRINCIPALES_BODY_MAIN',      PATH_RAIZ_BLOQUES_ESTRUCTURA. "/paginas-principales/body/main"); ?>


<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME',           PATH_RAIZ_BLOQUES. '/estructura/_home'); ?>



<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO',           PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_BODY',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. '/body'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD',      PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head"); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD',         PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/head'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY',         PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main'); ?>

<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_PAGINAS_SECUNDARIAS',    PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-secundarias'); ?>
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEADER',                 PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-secundarias/body/main/header'); ?>


<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_FOOTER',                     PATH_RAIZ_BLOQUES. '/estructura/paginas-generico'); ?>



<?php define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); ?>
<?php define('PATH_RAIZ_LOCALIDADES_CARPETA',                           PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$carpeta}"); ?>
<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES',                     PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes"); ?>
     
<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG',      PATH_RAIZ_LOCALIDAD_LUGARES_INTERES. "/playas/img"); ?>


<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_SCHEMAS',             PATH_RAIZ_LOCALIDAD_LUGARES_INTERES. "/schemas"); ?>

<?php define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_SCHEMAS_PLAYAS_NOMBRE_PLAYA',      PATH_RAIZ_LOCALIDAD_LUGARES_INTERES. "/playas/{$lugar_interes}/schemas"); ?>



<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS',       PATH_RAIZ_LOCALIDADES_CARPETA. "/paginas-secundarias"); ?>
<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES',            PATH_RAIZ_LOCALIDADES_CARPETA. "/head/variables"); ?>


<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_META_TAGS',             PATH_RAIZ_LOCALIDAD_LUGARES_INTERES. "/playas/{$lugar_interes}/head/"); ?>



<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_JSON_LD',                   PATH_RAIZ_LOCALIDADES_CARPETA. "/fichas/jsonld/"); ?>



<?php define('SECTIONS_PATH_SECTIONS',                                  PATH_RAIZ_LOCALIDADES_CARPETA. "/paginas-secundarias/sections/variables/"); ?>
<?php define('PATH_RAIZ_LOCALIDADES_SECTIONS',                          PATH_RAIZ_LOCALIDADES_CARPETA. '/fichas/sections'); ?>
<?php define('SECTIONS_PAGINAS_SECUNDARIAS_ACTIVIDADES_RECOMENDADAS',   PATH_RAIZ_LOCALIDADES_CARPETA. '/paginas-secundarias'); ?>
<?php define('PATH_RAIZ_LOCALIDADES_SECTIONS_VARIABLES',                PATH_RAIZ_LOCALIDADES_CARPETA. '/paginas-secundarias/sections/variables'); ?>


<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_TEMA',                      PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/{$tema}"); ?>
<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_SUBCARPETA', PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS.'/eventos-festividades'); ?>
<?php //define('PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_SUBCARPETA',                PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/{$tema}"); ?>
<?php //define('PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_COMO_LLEGAR',               PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/como-llegar"); ?>
<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_ETIQUETAS_META',                                PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/{$tema}/head"); ?>
<?php define('PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_HEADER',                    PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/header"); ?>


<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>
<?php define('PATH_HREF_RAIZ_LOCALIDADES', "https://playas2025.kesug.com/Blog_Playas2025/localidades"); ?>
<?php define('PATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD', PATH_HREF_RAIZ_LOCALIDADES ."/{$region_minuscula}/{$localidad_minuscula}"); ?>
<?php define('PATH_HREF_RAIZ_BLOQUES', "/Blog_Playas2025/bloques"); ?>


<?php define('PATH_HREF_RAIZ_LOCALIDAD', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}"); ?>
<?php define('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES',        PATH_HREF_RAIZ_LOCALIDAD. "/lugares-interes"); ?>





<?php define('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG',    PATH_HREF_RAIZ_LOCALIDAD. "/lugares-interes/{$lugar_interes}/img"); ?>

<?php define('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_PLAYAS_IMG',    PATH_HREF_RAIZ_LOCALIDAD. "/lugares-interes/playas/{$lugar_interes}/img"); ?>


<?php define('PATH_HREF_CARPETA_LUGARES_INTERES', "/Blog_Playas2025/localidades/{$region_minuscula}/{$carpeta}/lugares-interes");?>
<?php define('PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES', PATH_HREF_CARPETA_LUGARES_INTERES. "/{$lugar_interes}/img"); ?>
          

<?php //define('PATH_RAIZ_LOCALIDADES_CARPETA_SECTIONS_VARIABLES', PATH_RAIZ_LOCALIDADES_CARPETA. "/fichas/sections/variables"); ?>
<?php //define('PATH_RAIZ_LOCALIDADES_CARPETA_ETIQUETAS_META', PATH_RAIZ_LOCALIDADES_CARPETA. "/paginas-secundarias/head/etiquetas_meta/"); ?>

<?php define('PATH_BLOQUES_SECTIONS_CARRUSELES_CSV',  PATH_BLOQUES_SECTIONS_GENERICO. '/Carruseles_CSV'); ?>

<?php //define('PATH_RAIZ_LOCALIDADES_MAIN', PATH_RAIZ_LOCALIDADES. "/{$region_minuscula}/{$carpeta}/fichas/sections/main"); ?>

<?php define('SECTIONS_PAGINAS_SECUNDARIAS', './paginas-secundarias'); ?>


  <?php //define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_ESTRUCTURA_BODY_MAIN',    PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes/_estructura/body/main"); ?>

  <?php define('PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN',    PATH_RAIZ_LOCALIDADES. "/_estructura/body/main"); ?>




