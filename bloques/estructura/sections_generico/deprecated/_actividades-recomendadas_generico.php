<!-- Sección de Informacion_general -->
 <hr>  
<section id="actividades">  
    <h5><i class="fas fa-map-marked-alt" style="color: #2ecc71;"></i> Actividades recomendadas en la Playa de <?= $localidad; ?> (<?= $region; ?>) </h5>


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