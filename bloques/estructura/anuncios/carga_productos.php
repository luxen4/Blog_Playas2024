<?php
$servername = $_SERVER['SERVER_NAME'];
$require = './../../../../products_amazon/conexion.php';

//if ($page == 'playadelaga'){ 
    //$category = '$images_shirts';
    /*$group = "1";

    $table='amazon_shirts_images';
    $where = 'where direccion = "modelo_frente"';
    require './../../../../products_amazon/shirts.php';*/

    /*
    $table='amazon_shorts_images';
    $where = 'where direccion = "frente"';
    include './../../../../products_amazon/shorts_man.php';*/



    //$require = './../../../../products_amazon/conexion.php';       
    
    
    $articulo = 'shirts';
    $grupo = '_1';
    $var_base = 'images_shirts_1_';
    $table = 'amazon_shirts_images';
    $where = 'where direccion = "modelo_frente"';
    require './../../../../products_amazon/sql_generica.php';


    $articulo = 'shorts';
    $grupo = '_3';
    $var_base = 'images_shorts_3_';
    $table = 'amazon_shorts_images';
    $where = 'where direccion = "frente"';
    require './../../../../products_amazon/sql_generica.php';






//}





$table='amazon_shirts_images';
$where = 'where direccion = "modelo_derecha"';
require './../../../../products_amazon/shirts_modelo_derecha.php';



$table='amazon_sneakers_images';
$where = 'where marca = "TARELO" and direccion = "izquierda_45"';
include './../../../../products_amazon/sneakers_izquierda_45.php';


$table='amazon_sneakers_images';
$where = 'where marca = "GEOX" and direccion = "izquierda_0"';
include './../../../../products_amazon/sneakers.php';



$table='amazon_sneakers_images';
$where = 'where marca = "PUMA" and direccion = "izquierda_0"';
include './../../../../products_amazon/sneakers_puma_izda_0.php';


$table='amazon_purse_woman_images';
// $where = 'where marca = "JANSBEN" and direccion = "frente"';
$where = 'where direccion = "frente"';
include './../../../../products_amazon/purse_woman_frente.php';


$table='amazon_sandals_woman_images';
$where = 'where direccion = "izda_15"';
//$where = 'where marca = "XTI" and direccion = "izda_15º"';
include './../../../../products_amazon/sandals_woman_15izda.php';



$table='amazon_jeans_man_images';
$where = 'where direccion = "derecha"';
include './../../../../products_amazon/jeans_man_derecha.php';

//
$table='amazon_polos_man_images';
$where = 'where direccion = "frente"';
include './../../../../products_amazon/polos_man_frente.php';



$table='amazon_dress_woman_images';
$where = 'where marca = "The Drop" ';
include './../../../../products_amazon/dress_woman.php';




$table='amazon_swimsuits_woman_images';
$where = 'order by direccion';
include './../../../../products_amazon/swimsuits_woman.php';

$table='amazon_sandals_man_images';
$where = 'order by direccion';
include './../../../../products_amazon/sandals_man.php';


$table='amazon_sports_shirts_images';
$where = 'where marca = "Pepe Jeans" and direccion = "modelo_frente_izquierda"';
include './../../../../products_amazon/sports_shirts.php';

$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
include './../../../../products_amazon/sports_shirts2.php';


//$images_shirts_1_1 = []; $images_shirts_1_2 = []; $images_shirts_1_3 = []; $images_shirts_1_4 = [];
//require   './../../../../products_amazon/sql.php';