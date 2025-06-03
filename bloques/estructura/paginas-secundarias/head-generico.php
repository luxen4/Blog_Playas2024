<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?= $title; ?> en la Playa de <?= $nombre_playa; ?> – <?= $localidad; ?></title>
<?php //require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/head-generico-paginas-secundarias.php";?> 



<?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/localizacion-playa.php";?>  
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_ETIQUETAS_META."/etiquetas_meta.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php"; ?>


<!-- Structured Data -->
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_SUBCARPETA . "/{$tema}_ldjson.php"; ?>
<?php define('PATH_HREF_RAIZ', "/Blog_Playas2024"); ?>

<!-- Estilos personalizados -->
<link rel="stylesheet" href="<?= PATH_HREF_RAIZ; ?>/styles.css" />

<?php /*<!--🧭 Canonical URL (evita contenido duplicado en SEO)-->*/?>
<link rel="canonical" href= "<?= PATH_HREF_RAIZ; ?>" />

<?php 
require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA."/structure-data-schema-org.php";
include_once  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/structured-data-generico.php"; ?>