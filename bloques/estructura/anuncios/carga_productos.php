<?php
$servername = $_SERVER['SERVER_NAME'];
$require = './../../../../products_amazon/conexion.php';

//if ($page == 'playadelaga'){ 
    //$category = '$images_shirts';
    /*$group = "1";
    //$require = './../../../../products_amazon/conexion.php';  */
    


$articulo = 'swimsuits_woman';
$grupo = '_1';
$var_base = 'images_swimsuits_woman_1_';
$table = 'amazon_swimsuits_woman_images';
$where = 'order by direccion';
require './../../../../products_amazon/sql_generica.php';




$articulo = 'sneakers';
$grupo = '_2';
$var_base = 'images_sneakers_2_';
$table = 'amazon_sneakers_images';
$where = 'where marca = "TARELO" and direccion = "izquierda_45"';
require './../../../../products_amazon/sql_generica.php';





$articulo = 'sandals_man';
$grupo = '_2';
$var_base = 'images_sandals_man_2_';
$table = 'amazon_sandals_man_images';
$where = 'where marca = "FLARUT"';
require './../../../../products_amazon/sql_generica.php';





$articulo = 'purse_woman';
$grupo = '_2';
$var_base = 'images_purse_woman_2_';
$table = 'amazon_purse_woman_images';
$where = 'where direccion = "frente"';
require './../../../../products_amazon/sql_generica.php';

$articulo = 'sandals_woman';
$grupo = '_2';
$var_base = 'images_sandals_woman_woman_2_';
$table = 'amazon_sandals_woman_images';
$where = 'where direccion = "izda_15"';
require './../../../../products_amazon/sql_generica.php';

/*
$table='amazon_sandals_woman_images';
$where = 'where direccion = "izda_15"';
$where = 'where marca = "XTI" and direccion = "izda_15º"';
include './../../../../products_amazon/sandals_woman_15izda.php';*/

$articulo = 'sandals_woman';
$grupo = '_2';
$var_base = 'images_sandals_woman_izda_15_2_';
$table = 'amazon_sandals_woman_images';
$where = 'where direccion = "izda_15"';
require './../../../../products_amazon/sql_generica.php';





$articulo = 'sports_shirts';
$grupo = '_2';
$var_base = 'images_sports_shirts_2_';
$table = 'amazon_sports_shirts_images';
$where = 'where direccion = "frente"';
require './../../../../products_amazon/sql_generica.php';


/* $table='amazon_dress_woman_images';
$where = 'where marca = "The Drop" ';
include './../../../../products_amazon/dress_woman.php';
 */

$articulo = 'sandals_man';
$grupo = '_2';
$var_base = 'images_sandals_man_2_';
$table = 'amazon_sandals_man_images';
$where = 'where marca = "FLARUT"';
require './../../../../products_amazon/sql_generica.php';


$articulo = 'camiseta_deporte_manga_corta';
$grupo = '_2';
$var_base = 'images_camiseta_deporte_manga_corta_2_';
$table = 'amazon_camiseta_deporte_manga_corta_images';
$where = 'where precio > 12.99';
require './../../../../products_amazon/sql_generica.php';

    
$articulo = 'shirts';
$grupo = '_1';
$var_base = 'images_shirts_1_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
require './../../../../products_amazon/sql_generica.php';



$articulo = 'shirts';
$grupo = '_2';
$var_base = 'images_shirts_modelo_derecha_2_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "modelo_derecha"';
require './../../../../products_amazon/sql_generica.php';

$articulo = 'shirts';
$grupo = '_2';
$var_base = 'images_shirts_izquierda_2_';
$table = 'amazon_shirts_images';
$where = 'where direccion = "izquierda"';
require './../../../../products_amazon/sql_generica.php';



$articulo = 'shorts';
$grupo = '_3';
$var_base = 'images_shorts_3_';
$table = 'amazon_shorts_images';
$where = 'where direccion = "frente"';
require './../../../../products_amazon/sql_generica.php';






//}
$articulo = 'sneakers';
$grupo = '_2';
$var_base = 'images_sneakers_izquierda_0_2_';
$table = 'amazon_sneakers_images';
$where = 'where direccion = "izquierda_15"';
require './../../../../products_amazon/sql_generica.php';
// Hacer más











$table='amazon_jeans_man_images';
$where = 'where direccion = "derecha"';
include './../../../../products_amazon/jeans_man_derecha.php';

//
$table='amazon_polos_man_images';
$where = 'where direccion = "frente"';
include './../../../../products_amazon/polos_man_frente.php';














$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
include './../../../../products_amazon/sports_shirts2.php';


//$images_shirts_1_1 = []; $images_shirts_1_2 = []; $images_shirts_1_3 = []; $images_shirts_1_4 = [];
//require   './../../../../products_amazon/sql.php';