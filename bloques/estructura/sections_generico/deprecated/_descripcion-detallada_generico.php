<!-- Sección de Descripción detallada -->
<hr> 
<section id ="informacion_general">
    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_chaquetas_hombre.php'; ?>
    <h2  class="section-header text-center"></h2>

    <?= $li_descripcion_detallada; 
    require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_botas_hombre.php';
    

    if (isset($li_descripcion_detallada2)) {
        echo($li_descripcion_detallada2);                   
        require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';  
    }

    if (isset($li_descripcion_detallada3)) {
        echo($li_descripcion_detallada3);
        require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo.php'; 
    }?>
</section>       