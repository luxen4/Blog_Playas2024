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
        "shirts" => 2,
        "shirts_modelo_derecha" => 2,
        "sports_shirts" => 2,
        "swimsuits_woman" => 2,
        "sandals_man" => 2,
        "sneakers" => 2,
        "sneakers_izquierda_45" => 2,
        "sneakers_puma_izda_0" => 2,
        "dress_woman" => 2,
        "sandals_woman" => 2,
        "jeans_man_derecha" => 2,
        "polos_man_frente" => 2,
        "shorts" => 2,
        "mochilas" => 2,
        "sweater_man" => 2
    ];
    
    // Call the function with the total number of images and categories
    generateImageConstants(4, $categories);
    ?>

  

    const images_shirts_lateral_1_1 = <?php echo json_encode($images_shirts_lateral_1_1); ?>

    
    let currentIndex = {};

// Función para agregar propiedades al objeto con un patrón definido
function addProperties(baseName, groupRange, count) {
    for (let i = 1; i <= count; i++) {
        currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
    }
}

// Definir las bases y rangos de grupos
const definitions = [
    { baseName: 'shirts', groupRange: 2, count: 4 },
    { baseName: 'shirts_modelo_derecha', groupRange: 2, count: 4 },
    { baseName: 'sports_shirts', groupRange: 2, count: 5 },
    { baseName: 'shorts', groupRange: 2, count: 4 },
    { baseName: 'sneakers', groupRange: 2, count: 4 },
    { baseName: 'sneakers_izquierda_45', groupRange: 2, count: 4 },
    { baseName: 'sneakers_puma_izda_0', groupRange: 2, count: 4 },
    { baseName: 'swimsuits_woman', groupRange: 2, count: 4 },
    { baseName: 'sandals_man', groupRange: 2, count: 4 },
    { baseName: 'dress_woman', groupRange: 2, count: 4 },
    { baseName: 'sandals_woman', groupRange: 2, count: 4 },
    { baseName: 'jeans_man_derecha', groupRange: 2, count: 4 },
    { baseName: 'polos_man_frente', groupRange: 2, count: 4 },
    { baseName: 'jeans_man_derecha', groupRange: 2, count: 4 },
    { baseName: 'mochilas', groupRange: 2, count: 4 },
    { baseName: 'shirts_lateral', groupRange: 2, count: 1, },
    { baseName: 'sweater_man', groupRange: 2, count: 4 },  // Especial caso para "shirts_lateral"
];

// Agregar las propiedades usando la función definida
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
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>



        <?php 
        $articulo = "shirts_modelo_derecha";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>




        <?php 
        $articulo = "shorts";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>

        


        <?php 
        $articulo = "sneakers";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>

    
        //
        <?php 
        $articulo = "jeans_man_derecha";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>



        <?php 
        $articulo = "polos_man_frente";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>


  
        

        <?php 
        $articulo = "sandals_woman";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>





        <?php 
        $articulo = "sneakers_izquierda_45";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>
///
        <?php 
        $articulo = "sneakers_puma_izda_0";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>





        <?php 
        $articulo = "sports_shirts";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>



        <?php 
        $articulo = "swimsuits_woman";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>

      <?php 
        $articulo = "dress_woman";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>

        <?php 
        $articulo = "mochilas";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>


<?php 
        $articulo = "sweater_man";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>




        <?php // Problemas
        $articulo = "sandals_man";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>


        



        
        <?php //$articulo="sandals_woman"; ?>
        //prueba('image-link_<?php echo $articulo; ?>_2_1', 'image_<?php echo $articulo; ?>_2_1', images_sandals_woman_2_1, '<?php echo $articulo; ?>_2_1');
        //prueba('image-link_<?php echo $articulo; ?>_2_2', 'image_<?php echo $articulo; ?>_2_2', images_sandals_woman_2_2, '<?php echo $articulo; ?>_2_2');
        //prueba('image-link_<?php echo $articulo; ?>_2_3', 'image_<?php echo $articulo; ?>_2_3', images_sandals_woman_2_3, '<?php echo $articulo; ?>_2_3');
        //prueba('image-link_<?php echo $articulo; ?>_2_4', 'image_<?php echo $articulo; ?>_2_4', images_sandals_woman_2_4, '<?php echo $articulo; ?>_2_4');


        <?php 
        $articulo = "sandals_woman";
        $images = [ "images_{$articulo}_2_1","images_{$articulo}_2_2","images_{$articulo}_2_3","images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";}?>





        // Todo debe ir aquí
        prueba('image-link_shirts_lateral_1_1', 'image_shirts_lateral_1_1', images_shirts_lateral_1_1, 'shirts_lateral_1_1');

    }

    setInterval(changeImages, 4000);

</script>
