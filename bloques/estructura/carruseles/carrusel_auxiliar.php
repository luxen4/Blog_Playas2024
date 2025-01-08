<?php //$grupo = '_2';?>
<!--<div class="carrusel <?php if (isset($es_segundo_carrusel)) echo 'segundo-carrusel'; ?> <?php if (isset($es_tercer_carrusel)) echo 'tercer-carrusel'; ?>">-->
<div style="" class="container carrusel_auxiliar1">

    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-xl-2 text-center col-lg-1 col-md-1">
        </div>

        <div class="col-xl-7 text-center col-lg-10 col-md-10 col-sm-12 col-12">
            <h6 class="text-publicidad">Publicidad</h6>
            <div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row" style="">
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    // Generate variable names dynamically
                                    $articulo_var = $articulo . $grupo . '_' . $i;      //echo($articulo_var . '<br>');
                                    $images_articulo_var = 'images_' . $articulo_var;   //echo($images_articulo_var);

                                    // Render the HTML
                                    echo '
                                            <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6"> 
                                                <div class="custom-carousel-image-container">
                                                    <a id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                                        <img id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                                    </a>
                                                </div>
                                            </div>
                                            ';
                                }
                                ?>
                            </div>
                            <div class=" text-left">
                                <img src="./../../../../logo_amazon.png" alt="ddd" style="width: 80px; height: auto; margin-top: 1em;">
                                <?php /*
                                <div>
                                    <!-- Aquí puedes agregar lo que quieras a la derecha de la imagen de Amazon -->
                                    <p style="margin: 0;">Texto o elemento adicional</p>
                                    <!-- Por ejemplo, un enlace -->
                                    <a href="https://www.ejemplo.com" style="text-decoration: none; color: blue;">Visitar Ejemplo</a>
                                </div> */?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 text-center col-lg-1 col-md-1">
        </div>
    </div>
</div>
<!--</div>-->


<style>
    .carrusel_auxiliar1 {
        margin-top: 3em;
        margin-bottom: 3em;
    }

    .carrusel_auxiliar1 .custom-carousel-image-container {
        border: 1px solid #ccc;
        /* Color y grosor del borde */
        border-radius: 2px;
        /* Radio para bordes redondeados */
        overflow: hidden;
        /* Para asegurar que las esquinas redondeadas se mantengan */
        margin: 0.05em;
        /* Sin margen entre las imágenes */
        padding: 0;
        /* Sin padding */
    }

    .carrusel_auxiliar1 .row {
        margin-left: 0;
        /* Quitar margen izquierdo */
        margin-right: 0;
        /* Quitar margen derecho */
    }

    /* Eliminar padding en columnas */
    .carrusel_auxiliar1 .col-xl-6,
    .carrusel_auxiliar1 .col-lg-6,
    .carrusel_auxiliar1 .col-md-6,
    .carrusel_auxiliar1 .col-sm-6,
    .carrusel_auxiliar1 .col-6 {
        padding-left: 0;
        /* Sin padding izquierdo */
        padding-right: 0;
        /* Sin padding derecho */
    }


    .text-publicidad {
        text-align: left;
        color: lightgray;
    }
</style>