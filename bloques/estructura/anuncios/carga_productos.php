<?php
$servername = $_SERVER['SERVER_NAME'];
$require = './../../../../products_amazon/conexion.php';


$articulo = 'swimsuits_woman';
$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table = 'amazon_swimsuits_woman_images';
$where = 'order by direccion';


if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}



$articulo = 'sneakers';
$grupo = '_2';
$var_base = 'images_sneakers_2_';
$table = 'amazon_sneakers_images';
$where = 'where marca = "TARELO" and direccion = "izquierda_45"';


if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}




$articulo = 'sandals_man';
$grupo = '_2';
$var_base = 'images_sandals_man_2_';
$table = 'amazon_sandals_man_images';
$where = 'where marca = "FLARUT"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}




$articulo = 'purse_woman';
$grupo = '_2';
$var_base = 'images_purse_woman_2_';
$table = 'amazon_purse_woman_images';
$where = 'where direccion = "frente"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}



$articulo = 'sandals_woman';
$grupo = '_2';
$var_base = 'images_sandals_woman_2_';
$table = 'amazon_sandals_woman_images';
$where = 'where direccion = "izda_15"';

if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}


$articulo = 'sandals_woman';
$grupo = '_2';
$var_base = 'images_sandals_woman_izda_15_2_';
$table = 'amazon_sandals_woman_images';
$where = 'where direccion = "izda_15"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}





$articulo = 'sports_shirts';
$grupo = '_2';
$var_base = 'images_sports_shirts_2_';
$table = 'amazon_sports_shirts_images';
$where = 'where direccion = "frente"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}



$articulo = 'dress_woman';
$grupo = '_2';
$var_base = 'images_' .$articulo. '_2_';
$table = 'amazon_' .$articulo. '_images';
$where = 'where marca = "The Drop"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}


$articulo = 'shirts_modelo_derecha';
$grupo = '_2';
$var_base = 'images_' .$articulo. '_2_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "modelo_derecha"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}


$articulo = 'shirts_modelo_derecha';
$grupo = '_2';
$var_base = 'images_sports_shirts_2_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "modelo_derecha"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}





$articulo = 'sandals_man';
$grupo = '_2';
$var_base = 'images_sandals_man_2_';
$table = 'amazon_sandals_man_images';
$where = 'where marca = "FLARUT"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}


$articulo = 'camiseta_deporte_manga_corta';
$grupo = '_2';
$var_base = 'images_camiseta_deporte_manga_corta_2_';
$table = 'amazon_camiseta_deporte_manga_corta_images';
$where = 'where precio > 12.99';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}

    
$articulo = 'shirts';
$grupo = '_2';
$var_base = 'images_shirts_2_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}

$articulo = 'shorts';
$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table = 'amazon_'.$articulo.'_images';
$where = 'where direccion = "frente"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}

$articulo = 'shirts';
$grupo = '_2';
$var_base = 'images_shirts_modelo_derecha_2_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "modelo_derecha"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}




$articulo = 'shirts';
$grupo = '_2';
$var_base = 'images_shirts_izquierda_2_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "izquierda"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}









//}
$articulo = 'sneakers';
$grupo = '_2';
$var_base = 'images_sneakers_izquierda_0_2_';
$table = 'amazon_sneakers_images';
$where = 'where direccion = "izquierda_15"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}

// Hacer más









$articulo = 'jeans_man';
$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table='amazon_jeans_man_images';
$where = 'where direccion = "derecha"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}



$articulo = 'polos_man_frente';
$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table='amazon_polos_man_images';
$where = 'where direccion = "frente"';

if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}



$articulo = 'sneakers_puma_izda_0';
$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table='amazon_sneakers_images';
$where = 'where direccion = "izquierda_0"';

if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}

$articulo = 'sneakers_izquierda_45';
$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table='amazon_sneakers_images';
$where = 'where direccion = "izquierda_45"';

if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}









$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require './../../../../products_amazon/sql_generica.php';
}


//$images_shirts_1_1 = []; $images_shirts_1_2 = []; $images_shirts_1_3 = []; $images_shirts_1_4 = [];
//require   './../../../../products_amazon/sql.php';*/