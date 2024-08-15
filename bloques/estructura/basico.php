<?php 
    // <iframe style="width: 100%;" src="carrousels/castrourdiales/castrourdiales.html" style="border:none;"></iframe> 
    // $_SERVER['SERVER_NAME'] . '/Blog_Playas2024' .?>
    
    <?php // Barra de navegacion //
    $src = './../../../../mifoto.png';
    include_once $ruta . '/barra_navegacion2.php';?>

    <?php // Carga de anuncios de productos
    include_once $ruta . '/anuncios/carga_productos.php'; ?>

    <?php // Definir la constante para la ruta base
    define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/');?>