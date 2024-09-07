
<?php //require './sections/encabezado.php'; ?>
<?php //$articulo = 'sandals_man'; ?>
<?php 
//include 'carrusel_auxiliar.php'; ?>


<!-- Contenido principal -->
<main class="container my-4">

    <?php //require './sections/descripcion-detallada.php'; ?>
    <?php //$articulo = 'sandals_man';
    //include 'carrusel_auxiliar.php'; ?>
    <?php require './../../../../../bloques/estructura/sections_generico/descripcion-detallada_generico.php'; ?>
    <?php $articulo = 'sandals_man';
    include 'carrusel_auxiliar.php'; ?>





    <?php //require './sections/mapa-ubicacion.php'; ?>
    <?php //$articulo = 'jeans_man';
    //include 'carrusel_auxiliar.php'; ?>
    <?php require './../../../../../bloques/estructura/sections_generico/mapa-ubicacion_generico.php'; ?>
    <?php $articulo = 'jeans_man';
    include 'carrusel_auxiliar.php'; ?>




    <?php //require './sections/actividades-recomendadas.php'; ?>
    <?php //$articulo = 'shirts_modelo_derecha';
    //include 'carrusel_auxiliar.php'; ?>
    <?php require './../../../../../bloques/estructura/sections_generico/actividades-recomendadas_generico.php'; ?>
    <?php $articulo = 'shirts_modelo_derecha';
    include 'carrusel_auxiliar.php'; ?>


<?php // Esto es temporal
if($page = 'playadesuances'){ ?>
    <?php require './../../../../../bloques/estructura/sections_generico/servicios_generico.php'; ?>
    <?php $articulo = 'sneakers_izquierda_45';
    include 'carrusel_auxiliar.php'; 
}else{ ?>
    <?php require './sections/servicios.php'; 
          $articulo = 'sneakers_izquierda_45';
          include 'carrusel_auxiliar.php'; 
}
?>







    <?php require './sections/galeria-imagenes.php'; ?>
    <?php $articulo = 'dress_woman';
    include 'carrusel_auxiliar.php'; ?>


    <?php $articulo = 'purse_woman';
    include 'carrusel_auxiliar.php'; ?>

    <?php //require './sections/contacto.php'; ?>
    <?php //$articulo = 'sandals_woman_izda_15';
    //include 'carrusel_auxiliar.php'; ?>
    <?php require './../../../../../bloques/estructura/sections_generico/mas-info_generico.php'; ?>
    <?php $articulo = 'sandals_woman_izda_15';
    include 'carrusel_auxiliar.php'; ?>

</main>

