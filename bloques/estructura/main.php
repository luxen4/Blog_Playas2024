<!-- Contenido principal -->

<div style="padding: 0px;" class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->

        <div id="left-empty-column" class="col-xl-2 col-lg-10 col-md-12 col-sm-12"></div>

        <div id="central-column" class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_encabezado_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_descripcion-detallada_generico.php'; ?>
                <?php  require './../../../../bloques/estructura/sections_generico/deprecated/_actividades-recomendadas_generico.php'; ?>

                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mapa-ubicacion_generico.php'; ?>

                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_servicios_generico.php'; ?>
                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/galeria-imagenes_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mas-info_generico.php'; ?>
                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_jeans_man.php'; ?>

            </main>
        </div>




        <div id="right-column" class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12 content-wrapper"> 
            <?php require './../../../../bloques/estructura/sections_generico/deprecated/_caracteristicas_generico.php'; ?>
            <?php require './../../../../bloques/estructura/sections_generico/deprecated/_eventos_festividades_generico.php'; ?>




        </div>

    </div> <!-- Fin del contenedor de fila -->
</div>
                
<?php 
// $archivoCSV = 'amazon_shorts_images.csv';
// require './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba.php'; 
// include './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba2.php'; ?>









<?php //require './../../../../bloques/estructura/sections_generico/generico.php'; ?>

<?php //require './../../../../bloques/estructura/anuncios/lista_productos.php'; ?>

<?php /* $anuncios = 'no'; $articulosMostrados = []; */?>

<?php /*
    $li_variable = $li_actividades_recomendadas;

    if (!empty($li_actividades_recomendadas2)) {
        $li_variable2 = $li_actividades_recomendadas2;
        
    }

    if (!empty($li_actividades_recomendadas3)) {
        $li_variable3 = $li_actividades_recomendadas3;
    } ?>


    <?php 
    $li_variable2 = ''; $li_variable3 = '';
    require './../../../../bloques/estructura/sections_generico/generico.php'; ?>

    
    <?php 
    $li_variable = $li_services;
    if (!empty($li_services2)) {
        $li_variable2 = $li_services2;
    }
    if (!empty($li_services3)) {
        $li_variable3 = $li_services3;
    } */ 
?>



<?php /*
    $li_variable = $li_mas_info;
    if (!empty($li_mas_info2)) {
        $li_variable2 = $li_mas_info2;
    }
    if (!empty($li_mas_info3)) {
        $li_variable3 = $li_mas_info3;
    }*/
?>