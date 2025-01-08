<!-- Contenido principal -->
<?php require './../../../../bloques/estructura/anuncios/lista_productos.php'; ?>
<?php $anuncios = 'no';
$articulosMostrados = []; ?>
<div style="padding: 0px;" class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->

        <div id="#" class="col-xl-2 col-lg-10 col-md-12 col-sm-12"></div>

        <div id="#" class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>

                
                
                <?php
                $li_variable = $li_encabezado;
                if (isset($li_encabezado2)) {
                    $li_variable2 = ' ';
                }
                if (isset($li_encabezado3)) {
                    $li_variable3 = ' ';
                }?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_encabezado_generico.php'; ?>
                <?php 
                $li_variable2 = ''; $li_variable3 = '';
                //require './../../../../bloques/estructura/sections_generico/generico.php'; ?>


                
                
                <?php 
                $li_variable = $li_descripcion_detallada;
                if (isset($descripcion_detallada2)) {
                    $li_variable2 = ' ';
                }
                if (isset($descripcion_detallada3)) {
                    $li_variable3 = ' ';
                } ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_descripcion-detallada_generico.php'; ?>
                <?php 
                $li_variable2 = ''; $li_variable3 = '';
                //require './../../../../bloques/estructura/sections_generico/generico.php'; ?>
             
                
                <?php 
                $li_variable = $li_mapa_ubicacion;
                if (isset($li_mapa_ubicacion2)) {
                    $li_variable2 = ' ';
                }
                if (isset($li_mapa_ubicacion3)) {
                    $li_variable3 = ' ';
                }?>
   
                <?php  require './../../../../bloques/estructura/sections_generico/deprecated/_actividades-recomendadas_generico.php'; ?>
                <?php 

                require './../../../../bloques/estructura/sections_generico/generico.php'; ?>
                
                
                <?php 
                $li_variable = $li_actividades_recomendadas;

                if (!empty($li_actividades_recomendadas2)) {
                    $li_variable2 = $li_actividades_recomendadas2;
                }

                if (!empty($li_actividades_recomendadas3)) {
                    $li_variable3 = $li_actividades_recomendadas3;
                } ?>

                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mapa-ubicacion_generico.php'; ?>
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
                } ?>

                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_servicios_generico.php'; ?>
                <?php 
                $li_variable2 = ''; $li_variable3 = '';
                require './../../../../bloques/estructura/sections_generico/generico.php'; ?>


                <?php require './../../../../bloques/estructura/sections_generico/galeria-imagenes_generico.php'; ?>
                <?php 
                $li_variable2 = ''; $li_variable3 = '';
                require './../../../../bloques/estructura/sections_generico/generico.php'; ?>


                <?php
                $li_variable = $li_mas_info;
                if (!empty($li_mas_info2)) {
                    $li_variable2 = $li_mas_info2;
                }
                if (!empty($li_mas_info3)) {
                    $li_variable3 = $li_mas_info3;
                }?>
                <?php 
                
                require './../../../../bloques/estructura/sections_generico/deprecated/_mas-info_generico.php'; ?>
                
                <?php 
                
                require './../../../../bloques/estructura/sections_generico/generico.php'; ?>

            </main>
        </div>

        <div id="#" class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 content-wrapper"> <!-- Ajustado el tamaño de la columna -->
            <?php if (isset($caja_caracteristicas)) {
                echo ($caja_caracteristicas);
            } ?>

            <?php if (isset($caja_eventosYfestividades)) {
                echo ($caja_eventosYfestividades);
            }  ?>
        </div>
    </div> <!-- Fin del contenedor de fila -->
</div>
                
<?php 
// $archivoCSV = 'amazon_shorts_images.csv';
// require './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba.php'; 
// include './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba2.php'; ?>




<style>
    li,
    h1,
    h2,
    h3,
    h4,
    p {
        text-align: left;
    }

    .highlight {
        font-weight: bold;
    }

    figcaption {
        font-size: 0.80em;
    }
</style>

<style>
    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1500px;
        }
    }


    .content-wrapper {
        height: 100vh;
        /* Ajusta según necesites */
        overflow-y: auto;
        /* Activa el scroll vertical */
    }

    main {
        padding: 1em;
        /* Añade un poco de espacio interno */
    }
</style>