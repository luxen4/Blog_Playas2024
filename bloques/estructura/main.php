<?php

// Definir el array con los elementos proporcionados
$productos = [
    'sweatshirts', /* OK */
    'shorts',
    'swimsuits_woman',
    'sneakers',
    'sandals_man',
    'purse_woman',
    'sandals_woman',
    'sandals_woman_izda_15',
    'sports_shirts',
    'dress_woman',
    'shirts_modelo_derecha',  /* OK */
    'camiseta_deporte_manga_corta',
    'mochilas',
    'jeans_man',
    'polos_man_frente',
    'sneakers_puma_izda_0',
    'sneakers_izquierda_45',
    'sneakers_izquierda_0'
];


//$producto_aleatorio = $productos[array_rand($productos)];
//echo "Producto seleccionado: " . $producto_aleatorio;

?>


<div id="#" class="container">
    <div id="#" class="col-xl-10 text-center col-lg-3 col-md-12 col-sm-12 col-12">
        <!-- Contenido principal -->
        <main class="container my-4">
            <?php require './../../../../../bloques/estructura/sections_generico/descripcion-detallada_generico.php'; ?>
            <?php

            $articulo = $productos[array_rand($productos)];
            echo ($articulo);
            include 'carrusel_auxiliar.php'; 
            ?>

            <?php $articulo = 'sandals_man';
             include 'carrusel_auxiliar.php'; 
            ?>


            <?php require './../../../../../bloques/estructura/sections_generico/mapa-ubicacion_generico.php'; ?>

            <?php  //$articulo = 'jeans_man'; include 'carrusel_auxiliar.php'; 
            ?>

            <?php require './../../../../../bloques/estructura/sections_generico/actividades-recomendadas_generico.php'; ?>
            <?php  $articulo = 'shirts_modelo_derecha'; include 'carrusel_auxiliar.php'; 
            ?>





            <?php require './sections/galeria-imagenes.php'; ?>
            <?php $articulo = 'sweatshirts'; // $articulo = 'dress_woman';
            include 'carrusel_auxiliar.php'; 
            ?>


            <?php  $articulo = 'mochilas'; include 'carrusel_auxiliar.php'; 
            ?>

            <?php require './../../../../../bloques/estructura/sections_generico/mas-info_generico.php'; ?>
            <?php $articulo = 'sandals_woman_izda_15'; include 'carrusel_auxiliar.php'; 
            ?>

        </main>
    </div>
</div>