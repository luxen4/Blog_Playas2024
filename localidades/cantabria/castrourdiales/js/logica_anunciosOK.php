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

    // Define categories and their respective groups
    $categories = [
        "shirts" => 2,
        "shorts" => 2,
        "shirts_modelo_derecha" => 2,
        "swimsuits_woman" => 2,
        "sports_shirts" => 2,
        "sneakers" => 2,        
        "dress_woman" => 2,
        "sneakers_puma_izda_0" => 2, 
        "sandals_man" => 2,        
        "jeans_man" => 2,
        "polos_man_frente" => 2,        
        "sandals_woman" => 2,        
        "sneakers_izquierda_45" => 2
    ];

    // Call the function with the total number of images and categories
    generateImageConstants(4, $categories);
    ?>

    // Initialize currentIndex for each image set
    let currentIndex = {};

    // Function to add properties to the currentIndex object based on a pattern
    function addProperties(baseName, groupRange, count) {
        for (let i = 1; i <= count; i++) {
            currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
        }
    }

    // Define the bases and group ranges
    const definitions = [
        { baseName: 'shirts', groupRange: 2, count: 4 },
        { baseName: 'shorts', groupRange: 2, count: 4 },
        { baseName: 'shirts_modelo_derecha', groupRange: 2, count: 4 },
        { baseName: 'swimsuits_woman', groupRange: 2, count: 4 },
        { baseName: 'sports_shirts', groupRange: 2, count: 4 },
        { baseName: 'sneakers', groupRange: 2, count: 4 },
        { baseName: 'sneakers_puma_izda_0', groupRange: 2, count: 4 },
        { baseName: 'sandals_man', groupRange: 2, count: 4 },
        { baseName: 'jeans_man', groupRange: 2, count: 4 },
        { baseName: 'polos_man_frente', groupRange: 2, count: 4 },
        { baseName: 'sandals_woman', groupRange: 2, count: 4 },
        { baseName: 'dress_woman', groupRange: 2, count: 4 }/*,
        { baseName: 'sneakers_izquierda_45', groupRange: 2, count: 4 }*/
        
    ];

    // Add properties to currentIndex using the defined bases and ranges
    definitions.forEach(def => addProperties(def.baseName, def.groupRange, def.count));

    // Function to update carousel images
    function updateCarouselImage(imageLinkId, imageId, imageArray, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % imageArray.length;
        document.getElementById(imageLinkId).href = imageArray[currentIndex[indexKey]].href;
        document.getElementById(imageId).src = imageArray[currentIndex[indexKey]].src;
        document.getElementById(imageId).alt = imageArray[currentIndex[indexKey]].alt;
    }

    // Function to change images in the carousel
    function changeImages() {
        <?php
        // Simplified loop to generate the JS calls for each article
        foreach (['shirts', 'shorts', 'shirts_modelo_derecha', 'swimsuits_woman', 'sports_shirts', 'sneakers', 'sneakers_puma_izda_0',
           'sandals_man', 'jeans_man', 'polos_man_frente', 'sandals_woman', 'dress_woman', /*'sneakers_izquierda_45'*/] as $articulo) {
            for ($i = 1; $i <= 4; $i++) {
                $images_articulo_var = "images_{$articulo}_2_{$i}";
                echo "updateCarouselImage('image-link_{$articulo}_2_{$i}', 'image_{$articulo}_2_{$i}', {$images_articulo_var}, '{$articulo}_2_{$i}');\n";
            }
        }
        ?>
    }


    // Set interval for changing images
    setInterval(changeImages, 4000);
</script>

<script>
    // alert("Entroo");
</script>