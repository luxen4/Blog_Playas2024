<!-- informacion_general -->
<section id="actividades_recomendadas"><hr>    <h2 class="section-header">Actividades recomendadas en la Playa de <?= $localidad; ?></h2>
<?= $li_actividades_recomendadas; ?>
    <?php $articulo = $productos[array_rand($productos)]; //include "./../../../../../bloques/estructura/carrusel_auxiliar.php"; ?>

    <?php
    if(isset($li_actividades_recomendadas2)){
        echo($li_actividades_recomendadas2); 
        $articulo = $productos[array_rand($productos)]; //include "./../../../../../bloques/estructura/carrusel_auxiliar.php";

    }?>

    <?php
    if(isset($li_actividades_recomendadas3)){
        echo($li_actividades_recomendadas3); 
        $articulo = $productos[array_rand($productos)]; //include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
    }?>

<?php
    if(isset($li_actividades_recomendadas4)){
        echo($li_actividades_recomendadas4); 
        //$articulo = $productos[array_rand($productos)]; include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
    }?>
</section>




