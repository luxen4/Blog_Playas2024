<?php // Variables para la página de la Playa de Ostende ?>
<?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; $tema='playa-de-ostende'; ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/localizacion-playa.php"; ?>

<?php require PATH_RAIZ_LOCALmIDADES_CARPETA. "/previo.php"; ?>

<!DOCTYPE html>
<html lang="es">

<?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD_VARIABLES. "/index.php"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head-generico-playa.php"; ?>

    <body>

        <?php require SECTIONS_PATH_SECTIONS. 'imagenes'.$nombre_playa_region.'.php'; ?>


        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY. "/body-generico-playa.php"; ?>

 
        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/recarga_pagina_amigable.php"; ?>
    </body>

<?php /* $ruta_archivo_visitas = './../../../bloques/control/visitas.csv'; */?>
<?php require PATH_RAIZ_BLOQUES. "/control/control-visitas.php"; ?>

</html>

    <!-- Estilo opcional para fondo -->
    <style>
        body {
            background-image: url('./../../../arenaplaya.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>