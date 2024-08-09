<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
    <?php
    $servername = $_SERVER['SERVER_NAME'];
    $category = '$images_shirts';
    $group = "1";
    $table = 'amazon_shirts_images';
    $where = 'where direccion = "modelo_frente"';

    $require = 'products_amazon/conexion.php';
    require 'products_amazon/shirts.php';

    ?>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div style="display: flex;">
                <a id="image-link_shirts_1_1" href="<?php echo $images_shirts_1_1[0]['href']; ?>">
                    <img id="image_shirts_1_1" src="<?php echo $images_shirts_1_1[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_shirts_1_1[0]['alt']; ?>">
                </a>
            </div>
        </div>
        <!-- Aquí puedes añadir más `carousel-item` si lo necesitas -->
    </div>
</div>

<script>
    
    <?php
    function generateImageConstants($total_images, $categories)
    {
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

    // Define categorías y grupos
    $categories = ["shirts" => 1];

    // Genera las constantes de imagen
    generateImageConstants(4, $categories);
    ?>

    let currentIndex = {};

    function addProperties(baseName, groupRange, count) {
        for (let i = 1; i <= count; i++) {
            currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
        }
    }

    const definitions = [{
        baseName: 'shirts',
        groupRange: 1,
        count: 4
    }];

    definitions.forEach(def => addProperties(def.baseName, def.groupRange, def.count));

    function prueba(image_link, image, cte, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % cte.length;
        document.getElementById(image_link).href = cte[currentIndex[indexKey]].href;
        document.getElementById(image).src = cte[currentIndex[indexKey]].src;
        document.getElementById(image).alt = cte[currentIndex[indexKey]].alt;
    }

    function changeImages() {
        <?php
        $articulo = "shirts";
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_1_{$i}', 'image_{$articulo}_1_{$i}', images_{$articulo}_1_{$i}, '{$articulo}_1_{$i}');\n";
        }
        ?>
    }

    setInterval(changeImages, 4000);
</script>