<!DOCTYPE html>
<html lang="es">

<?php $_COOKIE['idioma'] = 'es'; ?>

<?php
// Variables para la página de la Playa de Ostende
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/localizacion-playa.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php';

$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
$description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende';


require PATH_RAIZ_WEB_PLAYA. "/meta_tags.php";      // Variables de etiquetas meta
require PATH_RAIZ_WEB_PLAYA. "/tweeter.php";        // Variables Twitter
require PATH_RAIZ_WEB_PLAYA. "/pinterest.php";      // Variables Pinterest
require PATH_RAIZ_WEB_PLAYA. "/data-generico.php";  // Variables para el archivo Structured_data_generico.php


// Imagen representativa y URL canónica
require PATH_RAIZ_WEB_PLAYA. "/structure-data-schema-org.php";

require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/head.php"; ?>

<body>
    <?php $page = 'playade'.$nombre_playa_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/body_generico.php"; ?>
</body>

</html>