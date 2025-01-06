<?php

$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table = 'amazon_'.$articulo.'_images';
$where = 'WHERE direccion = '.$direccion;

if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    $require = './../../../../products_amazon/conexion.php';
    require './../../../../products_amazon/sql_generica.php';
} ?>