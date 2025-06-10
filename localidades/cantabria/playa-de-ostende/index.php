
<?php // Variables para la página de la Playa de Ostende ?>
<?php $region_minuscula = 'cantabria'; $carpeta = 'playa-de-ostende'; $tema='playa-de-ostende'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/localidades/{$region_minuscula}/{$carpeta}/previo.php"; ?>

<!DOCTYPE html>
<html lang="es">

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head-generico-playa.php"; ?>

    <body>

        <?php require PATH_RAIZ_LOCALIDADES_CARPETA. '/img/index.php'; ?>


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