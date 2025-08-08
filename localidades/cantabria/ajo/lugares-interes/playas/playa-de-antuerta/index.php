<?php $localidad = 'Ajo';     $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); $carpeta = $localidad_minuscula; ?>
<?php $lugar   = 'Playa de Antuerta';  $lugar_interes  = 'playa-de-antuerta-ajo'; ?>

<?php 
    require rtrim($_SERVER['DOCUMENT_ROOT']) . "/Blog_Playas2025/localidades/cantabria/variables-generales-region.php"; ?>

<?php 
    $description_content = 'Descubre la Playa de Antuerta en Ajo, Cantabria: una playa salvaje y tranquila, ideal para desconectar, hacer senderismo costero y disfrutar de la naturaleza en estado puro.';
    $keywords_content    = 'Playa de Antuerta, Ajo, playas Cantabria, naturaleza, costa Cantabria, turismo natural, playa salvaje, senderismo Cantabria';

    $lugar   = 'Playa de Antuerta'; 
    $lugar_interes  = 'playa-de-antuerta';
    $lugar_interes           = $lugar_interes;
    $title          = $lugar . ' - ' . $localidad . ', ' . $region;
    $rutas          = $lugar_interes . ' -' . $localidad_minuscula . '-' . $region_minuscula;
    $color_page     = 'emerald';
    $lugar_interes_footer    = '- ' . $lugar . ' -'; 
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/localidades/carga-variables-generico.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES . "/page-playa-generico.php"; ?>