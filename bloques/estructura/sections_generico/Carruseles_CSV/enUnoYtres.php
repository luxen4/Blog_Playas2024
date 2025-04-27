<div class="row">
    <!-- Imagen grande a la izquierda -->
    <div class="col-xl-9 text-center col-lg-10 col-md-10 col-sm-12 col-8">
        <div class="custom-carousel-image-container square-container">
            <a id="image-link_csv_1_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" href="<?php echo $productos[0]['href']; ?>">
                <img id="image_csv_1_<?php echo $arrayElementos[$numeroAleatorio]["nombre"]; ?>" src="<?php echo $productos[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $productos[0]['alt']; ?>">
            </a>
        </div>
    </div>
    
    <!-- Imágenes pequeñas a la derecha -->
    <div class="col-xl-3 text-center col-lg-10 col-md-10 col-sm-12 col-4">
        <?php
        // Recorremos los productos pequeños para generar las imágenes pequeñas
        for ($i = 1; $i < 4; $i++) {
            // Generamos dinámicamente los id's basados en el nombre del producto y el índice
            $nombreElemento = $arrayElementos[$i]["nombre"];
            echo '
                <div class="custom-carousel-image-container square-container">
                    <a id="image-link_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" href="' . $productos[$i]['href'] . '">
                        <img id="image_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" src="' . $productos[$i]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . $productos[$i]['alt'] . '">
                    </a>
                </div>
            ';
        }
        ?>
    </div>
</div>

<script>
let currentIndex = 0;
const productos = <?php echo json_encode($productos); ?>;
const numeroAleatorio = <?php echo json_encode($numeroAleatorio); ?>;
const nombreElementoPrincipal = <?php echo json_encode($arrayElementos[$numeroAleatorio]['nombre']); ?>;
alert(nombreElementoPrincipal);
const imagenesPequenas = [];
const linksPequenos = [];

// Obtener referencias a las imágenes pequeñas y sus enlaces
for (let i = 1; i < 4; i++) {
    imagenesPequenas.push(document.getElementById('image_csv_' + i + '_' + nombreElementoPrincipal));
    linksPequenos.push(document.getElementById('image-link_csv_' + i + '_' + nombreElementoPrincipal));
}

function actualizarCarrusel() {
    currentIndex = (currentIndex + 1) % productos.length;

    const imagenGrande = document.getElementById("image_csv_1_" + nombreElementoPrincipal);
    const linkGrande = document.getElementById("image-link_csv_1_" + nombreElementoPrincipal);

    if (imagenGrande && linkGrande) {
        imagenGrande.src = productos[currentIndex]['src'];
        imagenGrande.alt = productos[currentIndex]['alt'];
        linkGrande.href = productos[currentIndex]['href'];
    }

    for (let i = 0; i < 3; i++) {
        const productoPequeno = productos[(currentIndex + i + 1) % productos.length];

        if (imagenesPequenas[i] && linksPequenos[i]) {
            imagenesPequenas[i].src = productoPequeno['src'];
            imagenesPequenas[i].alt = productoPequeno['alt'];
            linksPequenos[i].href = productoPequeno['href'];
        }
    }
}

setInterval(actualizarCarrusel, 4000);
</script>