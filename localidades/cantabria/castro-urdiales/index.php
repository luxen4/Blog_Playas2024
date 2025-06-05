    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .info-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .section-header {
            margin-top: 40px;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #343a40;
        }
        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
    </style><!DOCTYPE html>

<html lang="es">
<?php // Variables para la página de la Playa de Ostende ?>
<?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; $tema='playa-de-ostende';?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/localizacion-playa.php"; ?>

<?php
// Variables para las etiquetas meta y SEO
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
$description_content = 'Descubreeeeeeeeeeeeeeeeeeeeeeeeee la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
$keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende';


require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/grupo1/index.php"; 

require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/head-generico-playa.php"; ?>
<body>
    <div class="container my-5">



<?php require './fichas/sections/info.php' ?>


<!-- Renderizado en HTML -->
<?= $li_encabezado ?>
<hr>
<?= $li_descripcion_detallada ?>
<?= $li_descripcion_detallada2 ?>
<?= $li_descripcion_detallada3 ?>
<?= $caja_caracteristicas ?>
<?= $caja_eventosYfestividades ?>
<?= $li_mapa_ubicacion ?>
<?= $li_mas_info ?>

    </div>

    <footer class="text-center bg-light py-4">
        <p>&copy; <?= date('Y') ?> Castro Urdiales Turismo</p>
    </footer>

</body>
</html>