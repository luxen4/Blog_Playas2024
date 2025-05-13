<?php 

$nombre_playa = 'playa-de-ostende';


$carpeta = './../../../../localidades/cantabria/playadeostende/fichas/sections/';
//$carpeta = './sections/'; ?>

<?php require $carpeta . "faq-". $nombre_playa ."-cantabria.php"; ?>

<?php //require $carpeta . "encabezado-". $nombre_playa ."-". $region .".php"; ?>
<?php require './../../../../localidades\cantabria\playadeostende\fichas\sections\encabezado-playa-de-ostende-cantabria.php'; ?>


<?php require $carpeta . "descripcion-". $nombre_playa ."-". $region .".php"; ?>
<?php require $carpeta . "imagenes-". $nombre_playa ."-". $region .".php"; ?>
<?php require "./sections/mas-informacion-". $nombre_playa ."-". $region .".php"; ?>
<?php require "./sections/services-". $nombre_playa ."-". $region .".php"; ?>

<?php require "./sections/caracteristicas-". $nombre_playa ."-". $region .".php"; ?>