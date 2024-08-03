<div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_jeans_man_derecha_2_1" href="<?php echo $images_jeans_man_derecha_2_1[0]['href']; ?>">
                            <img id="image_jeans_man_derecha_2_1" src="<?php echo $images_jeans_man_derecha_2_1[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $images_jeans_man_derecha_2_1[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_jeans_man_derecha_2_2" href="<?php echo $images_jeans_man_derecha_2_2[0]['href']; ?>">
                            <img id="image_jeans_man_derecha_2_2" src="<?php echo $images_jeans_man_derecha_2_2[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $images_jeans_man_derecha_2_2[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_jeans_man_derecha_2_3" href="<?php echo $images_jeans_man_derecha_2_3[0]['href']; ?>">
                            <img id="image_jeans_man_derecha_2_3" src="<?php echo $images_jeans_man_derecha_2_3[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $images_jeans_man_derecha_2_3[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_jeans_man_derecha_2_4" href="<?php echo $images_jeans_man_derecha_2_4[0]['href']; ?>">
                            <img id="image_jeans_man_derecha_2_4" src="<?php echo $images_jeans_man_derecha_2_4[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $images_jeans_man_derecha_2_4[0]['alt']; ?>">
                        </a>
                    </div>
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

<style>
    /* Clase personalizada para las imágenes del carrusel */
    .custom-carousel-image {
        height: 100%;
        width: 100%;
        object-fit: contain; /* Ajusta la imagen dentro del contenedor manteniendo la proporción */
        object-position: top; /* Alinea la imagen desde la parte superior */
    }
</style>