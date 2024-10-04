<?php
$articulo_2_1 = $articulo . $grupo . "_1";
$articulo_2_2 = $articulo . $grupo . "_2";
$articulo_2_3 = $articulo . $grupo . "_3";
$articulo_2_4 = $articulo . $grupo . "_4";
?>

<div class="carousel slide custom-carousel" data-ride="carousel" data-interval="6000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        $articulo_var = $articulo . $grupo . '_' . $i;
                        $images_articulo_var = 'images_' . $articulo_var;
                        echo '
                            <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                                <a class="image-link image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img class="image image_' . $articulo_var . ' d-block w-100 custom-carousel-image" src="' . ${$images_articulo_var}[0]['src'] . '" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        $articulo_var = $articulo . $grupo . '_' . $i;
                        $images_articulo_var = 'images_' . $articulo_var;
                        echo '
                            <div  class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                                <a  class="image-link image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img  class="image image_' . $articulo_var . ' d-block w-100 custom-carousel-image" src="' . ${$images_articulo_var}[0]['src'] . '" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Puedes añadir una tercera diapositiva si lo deseas -->
    </div>

    <a class="carousel-control-prev" href="javascript:void(0);" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="javascript:void(0);" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script>
    let currentIndex = {};

    // Inicializa los índices para cada grupo de imágenes
    function initializeIndexes() {
        for (let i = 1; i <= 4; i++) {
            currentIndex[`shorts_2_${i}`] = 0;
            //currentIndex[`sports_shirts_2_${i}`] = 0;
        }
    }

    // Función para cambiar las imágenes y enlaces
    function changeImage(imageLinkClass, imageClass, imageArray, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % imageArray.length;

        // Cambiar el href del enlace
        let linkElements = document.getElementsByClassName(imageLinkClass);
        for (let linkElement of linkElements) {
            linkElement.href = imageArray[currentIndex[indexKey]].href;
        }

        // Cambiar la src, alt de la imagen
        let imgElements = document.getElementsByClassName(imageClass);
        for (let imgElement of imgElements) {
            imgElement.src = imageArray[currentIndex[indexKey]].src;
            imgElement.alt = imageArray[currentIndex[indexKey]].alt;
        }
    }

    // Función para cambiar las imágenes en intervalos regulares
    function changeImages() {
        <?php 
        for ($i = 1; $i <= 4; $i++) {
            $articulo_var = $articulo . $grupo . '_' . $i;
            $images_articulo_var = 'images_' . $articulo_var;
            echo "changeImage('image-link_{$articulo_var}', 'image_{$articulo_var}', " . json_encode($$images_articulo_var) . ", 'shorts_2_{$i}');\n";
        
            //echo "changeImage('image-link_{$articulo_var}', 'image_{$articulo_var}', " . json_encode($$images_articulo_var) . ", 'sports_shirts_2_{$i}');\n";
        
        } 
        ?>
    }

    // Inicia los índices y el intervalo de cambio de imágenes
    initializeIndexes();
    setInterval(changeImages, 2000);

    document.querySelectorAll('.custom-carousel').forEach(function(carousel) {
        let nextButton = carousel.querySelector('.carousel-control-next');
        let prevButton = carousel.querySelector('.carousel-control-prev');

        nextButton.addEventListener('click', function() {
            $(carousel).carousel('next');
        });

        prevButton.addEventListener('click', function() {
            $(carousel).carousel('prev');
        });
    });
</script>

<style>
    .custom-carousel {
    transform: scale(0.85);
    transform-origin: center center;
}
</style>



