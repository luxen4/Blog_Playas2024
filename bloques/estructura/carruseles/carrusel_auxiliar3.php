<hr>
<!--<div class="carrusel <?php if (isset($es_segundo_carrusel)) echo 'segundo-carrusel'; ?> <?php if (isset($es_tercer_carrusel)) echo 'tercer-carrusel'; ?>">-->
    <div style="margin: 2em;" class="container carrusel_auxiliar3">
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
                                        $articulo_var = $articulo . $grupo . '_' . $i;      //echo($articulo_var . '<br>');
                                        $images_articulo_var = 'images_' . $articulo_var;   //echo($images_articulo_var);

                                        // Render the HTML
                                        echo '
                            <div class="col-xl-6 text-center col-lg-6 col-md-6 col-sm-6 col-4"> 
                            <div class="custom-carousel-image-container">
                                <a id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                                </div>
                            </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-2 text-center col-lg-1 col-md-1">
            </div>
        </div>
    </div>
<!--</div>-->
<hr>

<style>
.carrusel_auxiliar3 .custom-carousel-image-container {
    /*margin: 15px; /* Ajusta el valor según lo que necesites */
    padding: 1em;
    border: 1px solid #ccc; /* Color y grosor del borde */
    border-radius: 10px; /* Radio para bordes redondeados */
    overflow: hidden; /* Para asegurar que las esquinas redondeadas se mantengan */
}</style>