<div class="row box_atuendo">
    <!-- Imagen grande a la izquierda -->
    <div class="col-xl-6 text-center col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="custom-carousel-image-container square-container image_izda">
            <a id="image-link_csv_0_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" href="<?php echo $productos[0]['href']; ?>">
                <img id="image_csv_0_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" src="<?php echo $productos[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $productos[0]['alt']; ?>">
            </a>
        </div>

        <div class="custom-carousel-image-container square-container image_izda">
            <a id="image-link_csv_1_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" href="<?php echo $productos[1]['href']; ?>">
                <img id="image_csv_1_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" src="<?php echo $productos[1]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $productos[0]['alt']; ?>">
            </a>
        </div>
    </div>

    <!-- Imágenes pequeñas a la derecha -->
    <div class="col-xl-6 text-center col-lg-6 col-md-6 col-sm-6 col-6">
        <?php
        // Recorremos los productos pequeños para generar las imágenes pequeñas
        for ($i = 2; $i < 5; $i++) {
            // Generamos dinámicamente los id's basados en el nombre del producto y el índice
            $nombreElemento = $arrayElementos[$i]["nombre"];
            echo '
                <div class="custom-carousel-image-container square-container image_atuendo">
                    <a id="image-link_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" href="' . $productos[$i]['href'] . '">
                        <img id="image_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" src="' . $productos[$i]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . $productos[$i]['alt'] . '">
                    </a>
                </div>
            ';
        }
        ?>
    </div>
    <div class="text-left">
        <img src="./logo_amazon.png" alt="ddd" style="width: 80px; height: auto; margin-top: 1em;">
    </div>
</div>