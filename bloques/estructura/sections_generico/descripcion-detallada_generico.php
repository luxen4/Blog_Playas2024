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
];?>


<!-- informacion_general -->
<section id="informacion_general" class="container my-5">
    <?= $li_descripcion_detallada; ?>
    <?php $articulo = $productos[array_rand($productos)]; include "./../../../../../bloques/estructura/carrusel_auxiliar.php"; ?>

    <?php
    if(isset($li_descripcion_detallada2)){
        $li_descripcion_detallada2; 
        $articulo = $productos[array_rand($productos)]; include "./../../../../../bloques/estructura/carrusel_auxiliar.php";

    }?>

    <?php
    if(isset($li_descripcion_detallada3)){
        $li_descripcion_detallada3; 
        $articulo = $productos[array_rand($productos)]; include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
    }?>

</section>





<style>
        #informacion_general h3{
        text-align: left;
    }
    #informacion_general li{
        text-align: left;
    }

    #informacion_general p{
        text-align: left;
    }
</style>