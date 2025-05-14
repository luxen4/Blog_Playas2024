<!-- Sección de Descripción detallada -->
<hr> 
<section id="descripcion_detallada" class="mb-5">
    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_chaquetas_hombre.php'; ?>

    <?php //require $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/localidades/cantabria/playadeostende/fichas/sections/descripcion-playa-de-ostende-cantabria.php'; ?>




    <h2  class="section-header text-center"></h2>

    <?php echo($li_descripcion_detallada);

    if (isset($li_descripcion_detallada2)) {
        echo($li_descripcion_detallada2);                   
        //require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';  
    }

    if (isset($li_descripcion_detallada3)) {
        echo($li_descripcion_detallada3);
        //require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo.php'; 

        //require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo2.php'; 

    }?>
</section>       