<?php
$servername = $_SERVER['SERVER_NAME'];
$require = './../../../../products_amazon/conexion.php';


$group = "1";
$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
require './../../../../products_amazon/shirts.php';
include './../../../../products_amazon/sports_shirts2.php';


//$images_shirts_1_1 = []; $images_shirts_1_2 = []; $images_shirts_1_3 = []; $images_shirts_1_4 = [];
//require   './../../../../products_amazon/sql.php';