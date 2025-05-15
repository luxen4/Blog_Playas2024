<?php $nombre_playa_region = '-playa-de-ostende-castro-urdiales-cantabria'; ?>

<?php define('SECTIONS_PATH_SECTIONS', $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/'); ?>


<?php require SECTIONS_PATH_SECTIONS. 'encabezado'.$nombre_playa_region.'.php'; ?>
<?php require SECTIONS_PATH_SECTIONS. 'descripcion'.$nombre_playa_region.'.php'; ?>
<?php require SECTIONS_PATH_SECTIONS. 'caracteristicas'.$nombre_playa_region.'.php'; ?>
<?php require SECTIONS_PATH_SECTIONS. 'services'.$nombre_playa_region.'.php'; ?>
<?php require SECTIONS_PATH_SECTIONS. 'imagenes'.$nombre_playa_region.'.php'; ?>
<?php require SECTIONS_PATH_SECTIONS. 'mas-informacion-'.$nombre_playa_region.'.php'; ?><?php define('BLOQUES_PATH',  './../../../../bloques/estructura/sections_generico') ?>
<?php require BLOQUES_PATH.'/Carruseles_CSV/prueba_atuendo.php'; ?>