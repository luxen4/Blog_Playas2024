<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
    <?php
    /*
    $servername = $_SERVER['SERVER_NAME'];
    $category = '$images_shirts';
    $group = "1";
    $table = 'amazon_shirts_images';
    $where = 'where direccion = "modelo_frente"';

    $require = 'products_amazon/conexion.php';
    require 'products_amazon/shirts.php';*/

    ?>






    
<?php
$images_shirts_1_1 = [
    [
        'href' => 'https://amzn.to/3YUJl6b',
        'src' => 'https://m.media-amazon.com/images/I/61A5rpxOQQL._AC_SX569_.jpg',
        'alt' => 'LY4U Pantalones Cortos Deportivos Casuales para Hombre con Bolsillos con Cremallera en la Cintura Elástica'
    ],
    [
        'href' => 'https://amzn.to/3AHvi9Z',
        'src' => 'https://images-eu.ssl-images-amazon.com/images/I/71CFTMk+t5L._AC_UL165_SR165,165_.jpg',
        'alt' => 'Tansozer Pantalones Cortos Hombre Deporte Running","Tansozer'
    ]
];

$images_shirts_1_2 = [
    [
        'href' => 'https://amzn.to/3X2yWm7',
        'src' => 'https://m.media-amazon.com/images/I/61A5rpxOQQL._AC_UF480,600_SR480,600_.jpg',
        'alt' => 'Csqtongan Pantalones deportivos para hombre, pantalones cortos para hombre, pantalones cortos de verano, algodón, pantalones cortos de deporte, elásticos, para gimnasio, con bolsillo'
    ],
    [
        'href' => 'https://amzn.to/3WXNrrz',
        'src' => 'https://m.media-amazon.com/images/I/51V8lb5FHvL._AC_UF480,600_SR480,600_.jpg',
        'alt' => 'JustSun Pantalones Cortos Hombre Deporte Shorts Running con Cremallera'
    ]
];

$images_shirts_1_3 = [
    [
        'href' => 'https://www.amazon.es/dp/B08BJ1N9Z7',
        'src' => 'https://m.media-amazon.com/images/I/71C8aRk+pwL._AC_UL320_.jpg',
        'alt' => 'Camiseta Manga Larga Hombre - Verde Militar'
    ],
    [
        'href' => 'https://www.amazon.es/dp/B093R6D4J3',
        'src' => 'https://m.media-amazon.com/images/I/71LDR9vV5wL._AC_UL320_.jpg',
        'alt' => 'Camiseta Estampada Hombre - Estilo Vintage'
    ]
];

$images_shirts_1_4 = [
    [
        'href' => 'https://www.amazon.es/dp/B08GS8NR8F',
        'src' => 'https://m.media-amazon.com/images/I/71W8k1Jz7kL._AC_UL320_.jpg',
        'alt' => 'Pack 2 Camisetas Básicas Hombre - Blanco y Negro'
    ],
    [
        'href' => 'https://www.amazon.es/dp/B07P5R5PLT',
        'src' => 'https://m.media-amazon.com/images/I/61IZpDL1DEL._AC_UL320_.jpg',
        'alt' => 'Camiseta Slim Fit Hombre - Rayas Grises'
    ]
];
?>

<div class="carousel-inner">
    <div class="carousel-item active">
        <div style="display: flex; flex-wrap: wrap;">

            <!-- Producto 1 -->
            <div class="amazon-product" style="width: 50%; padding: 0.5rem; box-sizing: border-box;">
                <a id="image-link_shirts_1_1" href="<?php echo $images_shirts_1_1[0]['href']; ?>" target="_blank">
                    <img id="image_shirts_1_1" src="<?php echo $images_shirts_1_1[0]['src']; ?>" 
                        alt="<?php echo $images_shirts_1_1[0]['alt']; ?>" 
                        style="width: 100%; height: auto; display: block;">
                </a>
                <a href="<?php echo $images_shirts_1_1[0]['href']; ?>" target="_blank">
                    <button style="margin-top: 0.5rem;">Comprar ahora en Amazon</button>
                </a>
            </div>

            <!-- Producto 2 -->
            <div class="amazon-product" style="width: 50%; padding: 0.5rem; box-sizing: border-box;">
                <a id="image-link_shirts_1_2" href="<?php echo $images_shirts_1_2[0]['href']; ?>" target="_blank">
                    <img id="image_shirts_1_2" src="<?php echo $images_shirts_1_2[0]['src']; ?>" 
                        alt="<?php echo $images_shirts_1_2[0]['alt']; ?>" 
                        style="width: 100%; height: auto; display: block;">
                </a>
                <a href="<?php echo $images_shirts_1_2[0]['href']; ?>" target="_blank">
                    <button style="margin-top: 0.5rem;">Comprar ahora en Amazon</button>
                </a>
            </div>



        </div>
    </div>
</div>

</div>

<script>
    
    <?php 

if (!function_exists('generateImageConstants')) {

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
    }}

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



