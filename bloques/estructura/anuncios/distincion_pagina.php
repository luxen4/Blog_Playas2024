<?php
if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    $require = './../../../../products_amazon/conexion.php';
    require './../../../../products_amazon/sql_generica.php';
} ?>