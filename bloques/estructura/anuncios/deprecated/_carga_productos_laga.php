<?php
$servername = $_SERVER['SERVER_NAME'];
$category = '$images_shirts';
$group = "1";
$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
require $require;


/*
$table='amazon_shirts_images';
$where = 'where direccion = "modelo_derecha"';
require './../../../../products_amazon/shirts_modelo_derecha.php';
*/


$table='amazon_shorts_images';
$where = 'where direccion = "frente"';
include './../../../../products_amazon/shorts_man.php';


$table='amazon_sneakers_images';
$where = 'where marca = "TARELO" and direccion = "izquierda_45"';
include './../../../../products_amazon/sneakers_izquierda_45.php';

/*
$table='amazon_sneakers_images';
$where = 'where marca = "GEOX" and direccion = "izquierda_0"';
include './../../../../products_amazon/sneakers.php';
*/


$table='amazon_sneakers_images';
$where = 'where direccion = "izquierda_0"';
include './../../../../products_amazon/sneakers_puma_izda_0.php';

$table='amazon_mochilas_images';
$where = 'where direccion = "izquierda"';
include './../../../../products_amazon/mochilas.php';