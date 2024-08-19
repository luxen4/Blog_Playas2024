<?php
$articulo="sneakers_izquierda_45";
$grupo="2";

$articulo_2_1 = $articulo . $grupo . "_1";
$articulo_2_2 = $articulo . $grupo . "_2";
$articulo_2_3 = $articulo . $grupo . "_3";
$articulo_2_4 = $articulo . $grupo . "_4";

?>

<div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <?php $var_name = "images_shirts_1_2"; ?>
                    <div class="col-xl-9 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                            <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                        </a>
                    </div>

                    
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <div>
                            <?php $var_name = "images_sneakers_izquierda_45_2_1"; ?>
                            <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                                <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                            </a>
                        </div>

                        <div>
                        <?php $var_name = "images_sneakers_izquierda_45_2_2"; ?>
                            <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                                <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                            </a>
                        </div>
                        <div>
                        <?php $var_name = "images_sneakers_izquierda_45_2_3"; ?>
                            <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                                <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                            </a>
                        </div>
                        <div>
                        <?php $var_name = "images_sneakers_izquierda_45_2_4"; ?>
                            <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                                <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                            </a>
                        </div>
                    </div>

                </div>




                <div class="row">
                    <?php $var_name = "images_sneakers_puma_izda_0_2_1"; ?>
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_45_2_1" href="<?= ${$var_name}[0]['href']; ?>">
                            <img id="image_image-link_sneakers_45_2_1" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                        </a>
                    </div>
                    <?php $var_name = "images_sneakers_puma_izda_0_2_2"; ?>
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                            <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                        </a>
                    </div>
                    <?php $var_name = "images_sneakers_puma_izda_0_2_3"; ?>
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                            <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                        </a>
                    </div>
                    <?php $var_name = "images_sneakers_puma_izda_0_2_4"; ?>
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_<?= $var_name; ?>" href="<?= ${$var_name}[0]['href']; ?>">
                            <img id="image_<?= $var_name; ?>" src="<?= ${$var_name}[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?= ${$var_name}[0]['alt']; ?>">
                        </a>
                    </div>
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
        object-fit: contain;
        /* Ajusta la imagen dentro del contenedor manteniendo la proporción */
        object-position: top;
        /* Alinea la imagen desde la parte superior */
    }
</style>

<script>
    
    <?php
    function generateImageConstants($total_images, $categories) {
        foreach ($categories as $category => $group) {
            for ($i = 1; $i <= $total_images; $i++) {
                $variable_name = "{$category}_{$group}_{$i}";
                if (isset($GLOBALS["images_" . $variable_name])) {
                    echo "const images_{$variable_name} = " . json_encode($GLOBALS["images_" . $variable_name]) . ";\n";
                } else {
                    echo "const images_{$variable_name} = [];\n";
                }
            }
        }
    }
    
    // Define categories and their respective groups
    $categories = [
        "sneakers_puma_izda_0" => 2
    ];
    
    // Call the function with the total number of images and categories
    generateImageConstants(4, $categories);
    ?>

    let currentIndex = {};

// Función para agregar propiedades al objeto con un patrón definido
function addProperties(baseName, groupRange, count) {
    for (let i = 1; i <= count; i++) {
        currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
    }
}

// Definir las bases y rangos de grupos
const definitions = [
    { baseName: 'sneakers_45', groupRange: 2, count: 4 }
];

// Agregar las propiedades usando la función definida
definitions.forEach(def => addProperties(def.baseName, def.groupRange, def.count));

    function updateImage(image_link, image, cte, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % cte.length;
        document.getElementById(image_link).href = cte[currentIndex[indexKey]].href;
        document.getElementById(image).src = cte[currentIndex[indexKey]].src;
        document.getElementById(image).alt = cte[currentIndex[indexKey]].alt;
    }

    function changeImages() {
        <?php 
        $articulo = "sneakers_45";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "updateImage('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>
    }

    setInterval(changeImages, 4000);

</script>