<?php
$images = 'images_';

$articulo_2_1 = $articulo . $grupo . "_1";
$articulo_2_2 = $articulo . $grupo . "_2";
$articulo_2_3 = $articulo . $grupo . "_3";
$articulo_2_4 = $articulo . $grupo . "_4";

?>



<div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="5000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        // Generar nombres de variables dinámicamente
                        $articulo_var = $articulo . $grupo . '_' . $i;

                        $images_articulo_var = 'images_' . $articulo_var;
                        // echo($images_articulo_var);
                        // Renderizar el HTML
                        echo '
                            <div  class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                                <a style="marging: 1em;" id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img style="padding: 0em;"; id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        
<?php
$images = 'images_';

$articulo_2_1 = $articulo2 . $grupo2 . "_1";
$articulo_2_2 = $articulo2 . $grupo2 . "_2";
$articulo_2_3 = $articulo2 . $grupo2 . "_3";
$articulo_2_4 = $articulo2 . $grupo2 . "_4";

?>

        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        // Generar nombres de variables dinámicamente
                        $articulo_var2 = $articulo2 . $grupo2 . '_' . $i;

                        $images_articulo_var2 = 'images_' . $articulo_var2;
                        // echo($images_articulo_var2);
                        // Renderizar el HTML
                        echo '
                            <div  class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                                <a style="marging: 1em;" id="image-link_' . $articulo_var2 . '" href="' . ${$images_articulo_var2}[0]['href'] . '">
                                    <img style="padding: 0em;"; id="image_' . $articulo_var2 . '" src="' . ${$images_articulo_var2}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var2}[0]['alt'] . '">
                                </a>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>



    </div>

<!--
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>-->
</div>


<style>
    /* Clase personalizada para las imágenes del carrusel */
    .custom-carousel-image {
        height: 100%;
        width: 100%;
        object-fit: contain;
        /* Ajusta la imagen dentro del contenedor manteniendo la proporción */
        object-position: top;
        /* Alinea la imagen desde la parte superior */
    }


    @media (max-width: 576px) {
        .custom {
            width: 65%;
            margin: 0 auto;
        }
    }

    a img {
        margin: 1em;
        /*border: 1px solid #ccc;*/ /* Light gray color */
    }

</style>