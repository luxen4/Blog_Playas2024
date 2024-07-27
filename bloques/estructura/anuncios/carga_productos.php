<?php
$servername = $_SERVER['SERVER_NAME'];

$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
require './../../../../products_amazon/shirts.php';


$table='amazon_shirts_images';
$where = 'where direccion = "modelo_derecha"';
require './../../../../products_amazon/shirts_modelo_derecha.php';

$table='amazon_sneakers_images';
$where = 'where marca = "GEOX" and direccion = "izquierda_0º"';
//include './../../../../products_amazon/sneakers.php';

$table='amazon_swimsuits_woman_images';
$where = 'order by direccion';
//include './../../../../products_amazon/swimsuits_woman.php';

$table='amazon_sandals_man_images';
$where = 'order by direccion';
//include './../../../../products_amazon/sandals_man.php';

$table='amazon_shorts_images';
$where = 'where direccion = "frente"';
//include './../../../../products_amazon/shorts_man.php';

$table='amazon_sports_shirts_images';
$where = 'where marca = "Pepe Jeans" and direccion = "modelo_frente_izquierda"';
//include './../../../../products_amazon/sports_shirts.php';

$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
//include './../../../../products_amazon/sports_shirts2.php';
?>