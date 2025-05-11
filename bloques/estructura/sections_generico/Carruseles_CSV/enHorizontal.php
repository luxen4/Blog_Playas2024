<div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <?php 
                        // Ajustamos el ciclo para mostrar 4 imágenes
                        for ($i = 0; $i < 4; $i++) {
                            echo '
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                    <div class="custom-carousel-image-container square-container">
                                        <a id="image-link_csv_' . ($i)  .   '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" href="' . $productos[$i]['href'] . '">
                                            <img id="image_csv_' . ($i) . '_' . $arrayElementos[$numeroAleatorio]["nombre"]   . '" src="' . $productos[$i]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . $productos[$i]['alt'] . '">
                                        </a>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                </div>
                <div class="text-left">
                    <img src="./logo_amazon.png" alt="dddb" style="width: 80px; height: auto; margin-top: 1em;">
                </div>
            </div>
        </div>
    </div>
</div>

