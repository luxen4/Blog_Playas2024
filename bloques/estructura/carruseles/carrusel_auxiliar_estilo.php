<!--<div class="carrusel <?php if (isset($es_segundo_carrusel)) echo 'segundo-carrusel'; ?> <?php if (isset($es_tercer_carrusel)) echo 'tercer-carrusel'; ?>">-->
<div class="container carrusel_auxiliar1">
    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-xl-1 text-center col-lg-1 col-md-1"></div>

        <div class="col-xl-10 text-center col-lg-10 col-md-10 col-sm-12 col-12">
            <h6 class="text-publicidad">Publicidad</h6>

            <div class="row">
                <!-- Imagen grande a la izquierda -->
                <?php 
                $articulo_var = $articulo . $grupo . '_1';      
                $images_articulo_var = 'images_' . $articulo_var;
                 
                echo '
                <div class="col-xl-9 text-center col-lg-10 col-md-10 col-sm-12 col-8">
                    <div class="custom-carousel-image-container square-container">
                        <a id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                            <img id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                        </a>
                    </div>
                </div>
                ';?>

                <!-- Imágenes pequeñas a la derecha -->
                <div class="col-xl-3 text-center col-lg-10 col-md-10 col-sm-12 col-4">
                    <?php
                    for ($i = 2; $i <= 4; $i++) {
                        $articulo_var = $articulo . $grupo . '_' . $i;      
                        $images_articulo_var = 'images_' . $articulo_var;

                        // Render the HTML
                        echo '
                            <div class="custom-carousel-image-container square-container">
                                <a id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-xl-1 text-center col-lg-1 col-md-1"></div>
    </div>
</div>