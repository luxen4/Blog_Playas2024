<!-- informacion_general -->
<section id="actividades"><hr>    
    <h2><i class="fas fa-map-marked-alt" style="color: #2ecc71;"></i> Actividades recomendadas en la Playa de <?= $localidad; ?> (<?= $region; ?>) </h2>


    <?= $li_actividades_recomendadas; ?>
    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_dress_woman.php'; ?>
    

    <?php
        if(isset($li_actividades_recomendadas2)){
            echo($li_actividades_recomendadas2); 
        
        }
    ?>
    <?php
        if(isset($li_actividades_recomendadas3)){
            echo($li_actividades_recomendadas3); 
        }?>

    <?php
        if(isset($li_actividades_recomendadas4)){
            echo($li_actividades_recomendadas4); 
        }?>
</section>



 <?php //$articulo = $productos[array_rand($productos)]; //include "./../../../../../bloques/estructura/carruseles/carrusel_auxiliar.php"; ?>
