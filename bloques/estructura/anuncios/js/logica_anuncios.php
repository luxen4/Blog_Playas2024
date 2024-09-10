


<?php
// Definir categorías y grupos
$categories = [
    "sweatshirts" => 2,
    "sandals_man" => 2,
    "shirts_modelo_derecha" => 2,
    "purse_woman" => 2,
    "sneakers_izquierda_45" => 2,
    "sandals_woman_izda_15" => 2,
    "dress_woman" => 2,
    /*"shirts_izquierda" => 2,*/

    "camiseta_deporte_manga_corta" => 2,
    "polos_man_frente" => 2,
    "swimsuits_woman" => 2,
    "shirts" => 2,
    "sneakers_puma_izda_0" => 2,
    "mochilas" => 2
  ];

// Función para generar las constantes de imagen en JavaScript
function generateImageConstants($categories, $total_images = 4) {
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

// Definir las bases y rangos de grupos para la inicialización de los índices
function addProperties($categories, $total_images = 4) {
    foreach ($categories as $category => $group) {
        for ($i = 1; $i <= $total_images; $i++) {
            echo "currentIndex['{$category}_{$group}_{$i}'] = 0;\n";
        }
    }
}
?>

<script>
    let currentIndex = {};

    <?php generateImageConstants($categories); ?>
    <?php addProperties($categories); ?>

    function updateImage(image_link, image, cte, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % cte.length;
        document.getElementById(image_link).href = cte[currentIndex[indexKey]].href;
        document.getElementById(image).src = cte[currentIndex[indexKey]].src;
        document.getElementById(image).alt = cte[currentIndex[indexKey]].alt;
    }

    function changeImages() {
        <?php
        foreach ($categories as $articulo => $group) {
            $images = [];
            for ($i = 1; $i <= 4; $i++) {
                $images[] = "images_{$articulo}_{$group}_{$i}";
            }
            foreach ($images as $index => $image) {
                $i = $index + 1;
                echo "updateImage('image-link_{$articulo}_{$group}_{$i}', 'image_{$articulo}_{$group}_{$i}', {$image}, '{$articulo}_{$group}_{$i}');\n";
            }
        }
        ?>
    }

    setInterval(changeImages, 4000);
</script>

<script>
    alert("Entro");
</script>