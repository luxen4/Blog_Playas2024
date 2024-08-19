<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>

<?php
$page = 'home';
//$ruta = './bloques/estructura';
//include './bloques/estructura/basico.php'; ?>
<?php 
    // <iframe style="width: 100%;" src="carrousels/castrourdiales/castrourdiales.html" style="border:none;"></iframe> 
    // $_SERVER['SERVER_NAME'] . '/Blog_Playas2024' .?>
    
    <?php // Barra de navegacion //
    //$src = './../../../../mifoto.png';
    //include_once $ruta . '/barra_navegacion2.php';?>

    <?php // Carga de anuncios de productos
    // include_once $ruta . '/anuncios/carga_productos.php'; ?>

<?php
$servername = $_SERVER['SERVER_NAME'];
$require = './../../../../products_amazon/conexion.php';



$articulo = 'shorts';
$grupo = '_2';
$var_base = 'images_'.$articulo.'_2_';
$table = 'amazon_'.$articulo.'_images';
$where = 'where direccion = "frente"';

if ($page == 'home'){ 
    $require = 'products_amazon/conexion.php';
    require 'products_amazon/sql_generica.php';
}else{
    require 'products_amazon/sql_generica.php';
} ?>

    <?php // Definir la constante para la ruta base
    //define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/');      // antes
    // define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../bloques/estructura/');           // Hendaya 
    // define('BASE_PATH_ESTRUCTURA', 'bloques/estructura/');?>



<hr><?php $articulo = "shorts"; $grupo = '_2';
//include './bloques/estructura/carrusel_auxiliar.php'; ?><hr>

<?php
$images = 'images_';

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
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        // Generate variable names dynamically
                        $articulo_var = $articulo . $grupo . '_' . $i;
                        $images_articulo_var = 'images_' . $articulo_var;

                        // Render the HTML
                        echo '
                            <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                                <a style="margin: 1em;" id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img style="padding: 0em;" id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                            </div>';
                    }
                    ?>
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


    
</body>
<script>
    // Declarar las imágenes de cada categoría
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

    // Definir categorías y grupos
    $categories = [
        "shorts" => 2
    ];

    // Generar constantes de imagen
    generateImageConstants(4, $categories);
    ?>

    let currentIndex = {};

    // Función para inicializar índices
    function addProperties(baseName, groupRange, count) {
        for (let i = 1; i <= count; i++) {
            currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
        }
    }

    // Inicializar índices
    addProperties('shorts', 2, 4);

    // Función para actualizar imágenes
    function updateImage(imageLinkId, imageId, imagesArray, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % imagesArray.length;
        document.getElementById(imageLinkId).href = imagesArray[currentIndex[indexKey]].href;
        document.getElementById(imageId).src = imagesArray[currentIndex[indexKey]].src;
        document.getElementById(imageId).alt = imagesArray[currentIndex[indexKey]].alt;
    }

    // Función para cambiar las imágenes
    function changeImages() {
        <?php
        $articulo = "shorts";
        for ($i = 1; $i <= 4; $i++) {
            echo "updateImage('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', images_{$articulo}_2_{$i}, '{$articulo}_2_$i');\n";
        }
        ?>
    }






    // Cambiar imágenes cada 4 segundos
    setInterval(changeImages, 4000);
</script>


<!-- Enlaza el JavaScript de Bootstrap y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>




