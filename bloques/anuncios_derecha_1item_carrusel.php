<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
    <?php
    /*
    $servername = $_SERVER['SERVER_NAME'];
    $category = '$product';
    $group = "1";
    $table = 'amazon_shirts_images';
    $where = 'where direccion = "modelo_frente"';

    $require = 'products_amazon/conexion.php';
    require 'products_amazon/shirts.php';*/

    ?>

<?php
$filename = PATH_RAIZ . '/anuncios/amazon_shorts_images.csv';
$products = [];

if (($handle = fopen($filename, "r")) !== false) {
    $header = fgetcsv($handle); // leer cabecera

    while (($data = fgetcsv($handle)) !== false) {
        $products[] = [
            'href' => $data[1],
            'src' => $data[2],
            'alt' => $data[3],
            'marca' => $data[4],
            'precio' => $data[5],
            'direccion' => $data[6],
        ];
    }
    fclose($handle);
}
?>

<div class="carousel-inner">
<?php for ($i = 0; $i < count($products); $i += 2): ?>
    <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
        <div style="display: flex; flex-wrap: wrap;">
            <?php for ($j = 0; $j < 2; $j++): 
                $index = $i + $j;
                if ($index < count($products)):
                    $product = $products[$index];
            ?>
            <div class="amazon-product" style="width: 50%; padding: 0.5rem; box-sizing: border-box;">
                <a href="<?php echo $product['href']; ?>" target="_blank">
                    <img src="<?php echo $product['src']; ?>" 
                         alt="<?php echo htmlspecialchars($product['alt']); ?>" 
                         style="width: 100%; height: auto; display: block;">
                </a>
                <div style="margin-top: 0.5rem;">
                    <strong><?php echo htmlspecialchars($product['marca']); ?></strong><br>
                    <span>€<?php echo htmlspecialchars($product['precio']); ?></span>
                </div>
                <a href="<?php echo $product['href']; ?>" target="_blank">
                    <button style="margin-top: 0.5rem;">Comprar ahora en Amazon</button>
                </a>
            </div>
            <?php endif; endfor; ?>
        </div>
    </div>
<?php endfor; ?>
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