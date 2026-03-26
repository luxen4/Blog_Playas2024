<?php //$grupo = '_2'; ?>
<div style="" class="container carrusel_auxiliar1">

    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-xl-1 text-center col-lg-1 col-md-1">
        </div>

        <div class="col-xl-10 text-center col-lg-10 col-md-10 col-sm-12 col-12">
            <h6 class="text-publicidad">Publicidad</h6>
            <div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    // Crear el nombre dinámico de la variable, usando $articulo y $grupo
                                    $articulo_var = $articulo . $grupo . '_' . $i;  
                                    $images_articulo_var = 'images_' . $articulo_var;   // Formato de la variable con los productos de imágenes

                                    // Verificamos si la variable existe para evitar errores
                                    if (isset(${$images_articulo_var}[0])) {
                                        // Imprimir el HTML dinámico para cada imagen
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
                                }
                                ?>
                            </div>
                            <div class="text-left">
                                <img src="./../../../../logo_amazon.png" alt="ddda" style="width: 80px; height: auto; margin-top: 1em;">
                                <?php /*
                                <div>
                                    <p style="margin: 0;">Texto o elemento adicional</p>
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

<style>


    .carrusel_auxiliar1 .custom-carousel-image-container {
        border: 1px solid #ccc;
        border-radius: 2px;
        overflow: hidden;
        margin: 0.05em;
        padding: 0;
    }

    .carrusel_auxiliar1 .row {
        margin-left: 0;
        margin-right: 0;
    }


    .carousel-item {
        transition: transform 1s ease-in-out;
    }

    /* Ajustes para imágenes en pantallas pequeñas */
    @media (max-width: 768px) {
        .carousel-inner .carousel-item {
            text-align: center;
        }

        .custom-carousel-image-container img {
            width: 90%;
            margin: 0 auto;
        }
    }
</style>