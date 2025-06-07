<!DOCTYPE html>
<html lang="es">

<?php // Variables para la página de la Playa de Ostende ?>
<?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; $tema='playa-de-ostende'; ?>


<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/localizacion-playa.php"; ?>

<?php $title="Playa de {$nombre_playa} - {$localidad}, {$region}"; ?>

<?php
// Variables para las etiquetas meta y SEO
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
$description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende';


require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/grupo1/index.php"; 
require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/head-generico-playa.php"; ?>

    <body>
        <?php $pafge = 'playade'.$nombre_playa_minuscula;?>
        <?php require PATH_RAIZ_LOCALIDADES_SECTIONS."/info.php"; ?>    
        <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PRINCIPALES_BODY. "/body-generico-playa.php"; ?>
 
        <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/recarga_pagina_amigable.php"; ?>
    </body>

<?php 
$ruta_archivo_visitas = './../../../bloques/control/visitas.csv';
require PATH_RAIZ_BLOQUES. "/control/control-visitas.php"; ?>

</html>