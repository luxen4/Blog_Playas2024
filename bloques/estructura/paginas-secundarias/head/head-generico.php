<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?= $title; ?> en la Playa de <?= $nombre_playa; ?> – <?= $localidad; ?></title>
<?php //require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/head-generico-paginas-secundarias.php";?> 
<?php define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD', PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-secundarias/head'); ?>


<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/localizacion-playa.php";?>  
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_ETIQUETAS_META."/etiquetas_meta.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEAD . "/links-generico.php"; ?>


<!-- Structured Data -->
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_SUBCARPETA . "/{$tema}_ldjson.php"; ?>
<?php define('PATH_HREF_RAIZ', "/Blog_Playas2025"); ?>

<!-- Estilos personalizados -->
<link rel="stylesheet" href="<?= PATH_HREF_RAIZ; ?>/styles.css" />

<?php /*<!--🧭 Canonical URL (evita contenido duplicado en SEO)-->*/?>
<link rel="canonical" href= "<?= PATH_HREF_RAIZ; ?>" />

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD . "/structured-data-generico.php"; ?>