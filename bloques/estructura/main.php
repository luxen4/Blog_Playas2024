<style>


@media (min-width: 1200px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1500px;
    }
}


    .content-wrapper {
        height: 100vh; /* Ajusta según necesites */
        overflow-y: auto; /* Activa el scroll vertical */
    }
    main {
        padding: 1em; /* Añade un poco de espacio interno */
    }
</style>

<!-- Contenido principal -->
<?php require './../../../../bloques/estructura/anuncios/lista_productos.php'; ?>
<?php $anuncios = 'no'; ?>
<div style="padding: 0px;" class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->
        
        <div id="#" class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>
                <?php require './../../../../bloques/estructura/sections_generico/encabezado_generico.php'; ?>
                <?php //require './../../../../bloques/estructura/sections_generico/descripcion-detallada_generico.php'; ?>

                <?php
                $li_variable=$li_descripcion_detallada;
                $li_variable2=$li_descripcion_detallada2;
                $li_variable3=$li_descripcion_detallada3;
                require './../../../../bloques/estructura/sections_generico/generico.php'; ?>

                <?php require './../../../../bloques/estructura/sections_generico/mapa-ubicacion_generico.php'; ?>




                <?php require './../../../../bloques/estructura/sections_generico/actividades-recomendadas_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/servicios_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/galeria-imagenes_generico.php'; ?>
                <?php //require './../../../../bloques/estructura/sections_generico/mas-info_generico.php'; ?>

                <?php 
                $li_variable=$li_services;
                $li_variable2=$li_services2;
                $li_variable3=$li_services3;
                require './../../../../bloques/estructura/sections_generico/generico.php'; ?>

            </main>
        </div>

        <div id="#" class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 content-wrapper"> <!-- Ajustado el tamaño de la columna -->
            <?php if (isset($caja_caracteristicas)) {
                echo($caja_caracteristicas);
            } ?>

            <?php if (isset($caja_eventosYfestividades)) {
                echo($caja_eventosYfestividades);
            } ?>
        </div>
    </div> <!-- Fin del contenedor de fila -->
</div>

<style>
    li, h1, h2, h3, h4, p{
        text-align: left;
    }

    .highlight{font-weight: bold;}

    figcaption {font-size: 0.80em;}
</style>