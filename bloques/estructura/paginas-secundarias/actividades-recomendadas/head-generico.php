<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?= $title; ?> en la Playa de <?= $nombre_playa; ?> – <?= $localidad; ?></title>
<?php //require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/head-generico-paginas-secundarias.php";?> 

<?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/localizacion-playa.php";?>  
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_ETIQUETAS_META."{$tema}.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php"; ?>


<!-- Structured Data -->
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_JSON_LD."{$tema}_ldjson.php"; ?>

<!-- Estilos personalizados -->
<link rel="stylesheet" href="./../../../../styles.css" />

<?php /*<!--🧭 Canonical URL (evita contenido duplicado en SEO)-->*/?>
<link rel="canonical" href= "" />

<?php 
require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA."/structure-data-schema-org.php";
include_once  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/structured-data-generico.php"; ?>