<?php
$images = 'images_';

$articulo_2_1 = $articulo . $grupo . "_1";
$articulo_2_2 = $articulo . $grupo . "_2";
$articulo_2_3 = $articulo . $grupo . "_3";
$articulo_2_4 = $articulo . $grupo . "_4";
?>


<div class="container">
    <hr>
    <div class="row">

        <div class="col-xl-2 text-center col-lg-1 col-md-1">
        </div>

        <div class="col-xl-8 text-center col-lg-10 col-md-10 col-sm-12 col-12">

            <div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    // Generate variable names dynamically
                                    $articulo_var = $articulo . $grupo . '_' . $i; // echo($articulo_var);
                                    $images_articulo_var = 'images_' . $articulo_var;

                                    // Render the HTML
                                    echo '
                            <div class="col-xl-3 text-center col-lg-3 col-md-3 col-sm-3 col-3">
                                <a id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                            </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>


        <div class="col-xl-2 text-center col-lg-1 col-md-1">
        </div>
    </div>
    <hr>
</div>


<style>
    
    .custom-carousel-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }


    /* Clase personalizada para las imágenes del carrusel */
    .custom-carousel-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* Ajusta la imagen dentro del contenedor manteniendo la proporción */
        object-position: top;
        /* Alinea la imagen desde la parte superior si es necesario */
        display: block;
        /* Elimina el espacio inferior en algunos navegadores */
    }


    @media (max-width: 576px) {
        .custom {
            /*width: 65%;*/
            /*margin: 0 auto;*/
        }
    }

    a{
        
    }

    a img {
        /*
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;

        /* Light gray color */
    }


    .custom-carousel-image {
        transition: transform 0.5s ease;
    }
</style>