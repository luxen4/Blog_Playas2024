<style>
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
        
        <div id="#" class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>
                <?php require './../../../../bloques/estructura/sections_generico/encabezado_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/descripcion-detallada_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/mapa-ubicacion_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/actividades-recomendadas_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/servicios_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/galeria-imagenes_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/mas-info_generico.php'; ?>
            </main>
        </div>

        <div id="#" class="col-xl-4 col-lg-2 col-md-12 col-sm-12 col-12 content-wrapper"> <!-- Ajustado el tamaño de la columna -->
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