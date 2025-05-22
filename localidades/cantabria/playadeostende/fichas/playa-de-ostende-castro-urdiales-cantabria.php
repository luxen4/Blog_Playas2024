<!DOCTYPE html>
<html lang="es">

<?php
$_COOKIE['idioma'] = 'es';
 define('PATH_RAIZ',  'https://playas2024.kesug.com/Blog_Playas2024/');

// Variables para la página de la Playa de Ostende
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/localizacion-playa.php';


$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
$description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende';



// Variables de etiquetas meta
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/meta_tags.php';

// Variables Twitter
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/tweeter.php';

// Variables Pinterest
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/pinterest.php';

// Variables para el archivo Structured_data_generico.php
require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/data-generico.php';


// Imagen representativa y URL canónica

require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/head/variables/web-playa/structure-data-schema-org.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/bloques/estructura/head.php'; ?>

<body>
    <?php $page = 'playade'.$nombre_playa_minuscula;?>
    <?php require "./sections/info.php"; ?>    
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/bloques/estructura/body_generico.php'; ?>
</body>

</html>