<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Berria - Santoña, Cantabria</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <?php include_once 'structured_data.php'; // Entra 
    ?>
</head>

<body>
    <?php $src = './../../../../mifoto.png'; ?>
    <?php // <iframe style="width: 100%;" src="carrousels/castrourdiales/castrourdiales.html" style="border:none;"></iframe> 
    ?>

    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>
    <?php include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>
    <div class="container">
        <div class="row">
            <div id="#" class="col-xl-12 text-center col-lg-10 col-md-10 col-sm-12 col-12">

            </div>
        </div>

        <div class="row">
            <div id="#" class="col-xl-12 text-center col-lg-10 col-md-10 col-sm-12 col-12">
                <h1>Playa de Berria - Santoña, Cantabria</h1>

                <div class="image-container">
                    <img src="./../foto_presentacion2.jpg" alt="Playa de Berria, Santoña">
                </div>

                <div class="section">
                    <h2>Presentación General</h2>
                    <p>La Playa de Berria, situada en el municipio de Santoña, Cantabria, es una de las playas más impresionantes de la costa cantábrica. Este extenso arenal, rodeado de un entorno natural privilegiado, es conocido por su belleza escénica, aguas limpias y una atmósfera tranquila que la convierte en un destino ideal tanto para los amantes de la naturaleza como para los aficionados a las actividades acuáticas.</p>
                </div>

                <div class="section">
                    <h2>Características Principales</h2>
                    <ul>
                        <li><strong>Longitud:</strong> 2 kilómetros de arena fina y dorada.</li>
                        <li><strong>Anchura:</strong> Varía con las mareas, llegando hasta los 150 metros en marea baja.</li>
                        <li><strong>Oleaje:</strong> Moderado a fuerte, ideal para el surf.</li>
                        <li><strong>Entorno:</strong> Flanqueada por el Monte Buciero al oeste y el Monte Brusco al este.</li>
                        <li><strong>Accesibilidad:</strong> Fácil acceso por carretera desde Santoña, con varias zonas de aparcamiento cerca de la playa.</li>
                    </ul>
                </div>
                <?php
                $servername = $_SERVER['SERVER_NAME'];
                $require = './../../../../products_amazon/conexion.php';
                $var_base = 'images_shirts_1_';
                $table = 'amazon_shirts_images';
                $where = 'where direccion = "modelo_frente"';
                require './../../../../products_amazon/sql_generica.php'; ?>



                <div class="row">
                    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
                        <hr><?php $articulo = "shirts";
                            $grupo = '_1';
                            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
                        <hr>
                    </div>
                </div>



                <div class="section">
                    <h2>Actividades Disponibles</h2>
                    <ul>
                        <li><strong>Surf:</strong> La Playa de Berria es un lugar muy popular para el surf, gracias a sus olas constantes y su amplio espacio.</li>
                        <li><strong>Paseos y Senderismo:</strong> Los alrededores ofrecen rutas de senderismo que permiten disfrutar de impresionantes vistas panorámicas.</li>
                        <li><strong>Natación:</strong> Las aguas limpias y la extensión de la playa la hacen ideal para nadar, especialmente en las zonas menos agitadas.</li>
                        <li><strong>Relax:</strong> La amplitud de la playa permite encontrar espacios tranquilos para relajarse, tomar el sol y disfrutar del entorno.</li>
                    </ul>
                </div>

                <?php
                $require = './../../../../products_amazon/conexion.php';
                $var_base = 'images_shorts_2_';
                $table = 'amazon_shorts_images';
                $where = 'where direccion = "frente"';
                require './../../../../products_amazon/sql_generica.php'; ?>

                <div class="row">
                    <div id="#" class="col-xl-12 text-center col-lg-10 col-md-10 col-sm-12 col-12">
                        <hr><?php $articulo = "shorts";
                            $grupo = '_2';
                            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
                        <hr>
                    </div>
                </div>


 


                <div class="section">
                    <h2>Aspectos Históricos y Culturales</h2>
                    <p>La Playa de Berria también tiene una historia interesante, ya que en su extremo occidental se encuentra el Fuerte de San Martín, una fortificación del siglo XVIII que fue utilizada para defender la bahía de Santoña. Además, Santoña es conocida por su tradición pesquera y la elaboración de anchoas, uno de los productos gastronómicos más apreciados de la región.</p>
                    <p>El entorno natural de la playa forma parte del Parque Natural de las Marismas de Santoña, Victoria y Joyel, un espacio protegido que alberga una gran diversidad de flora y fauna, especialmente aves migratorias.</p>
                </div>
                <?php
                $require = './../../../../products_amazon/conexion.php';
                $var_base = 'images_pantalones_cortos_correr_2_';
                $table = 'amazon_pantalones_cortos_correr_images';
                $where = 'where direccion = "izquierda"';
                require './../../../../products_amazon/sql_generica.php'; ?>

                <?php
                $require = './../../../../products_amazon/conexion.php';
                $var_base = 'images_camiseta_deporte_manga_corta_2_';
                $table = 'amazon_camiseta_deporte_manga_corta_images';
                $where = 'where direccion = "izquierda"';
                require './../../../../products_amazon/sql_generica.php'; ?>


                <div class="row">
                    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
                        <hr><?php
                            $articulo  = "pantalones_cortos_correr";
                            $grupo =  '_2';

                            $articulo2 = "camiseta_deporte_manga_corta";
                            $grupo2 = '_2';

                            //include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar_doble.php'; ?>
                        <hr>
                    </div>
                </div>

                <div class="section">
                    <h2>Cómo Llegar</h2>
                    <p>La Playa de Berria se encuentra a unos 2 kilómetros del centro de Santoña, y es fácilmente accesible en coche o bicicleta. Desde Santander, se puede llegar en aproximadamente 45 minutos por la autovía A-8.</p>
                    <p>Para obtener más información sobre la playa y sus alrededores, puedes visitar el <a href="https://www.turismosantona.es/playas/berria/">sitio oficial de Turismo de Santoña</a>.</p>
                </div>

                <section class="map">
                    <h2>Ubicación</h2>
                    <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2900.8411948448353!2d-3.4521996!3d43.4607339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4940245c48bb7d%3A0x403b7baee0b9ab92!2sPlaya%20de%20Berria!5e0!3m2!1ses!2ses!4v1689340574832!5m2!1ses!2ses" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </section>

                <h6>Para más información puede consultar en la pagina de la oficina de turismo de la
                    <a href="https://turismodecantabria.com/playas/playa-de-berria/">Playa de Berria</a>
                </h6>
            </div>
        </div>
    </div>

    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>


</body>


<?php
// include_once './../../../../bloques/localidades/castrourdiales/js/logica_anuncios.php'; 
?>


<!-- Enlaza el JavaScript de Bootstrap y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



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
        "shirts" => 1,
        "shorts" => 2,
        "pantalones_cortos_correr" => 2,
        "camiseta_deporte_manga_corta" => 2,
        "sports_shirts" => 2
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
    const definitions = [{
            baseName: 'shirts',
            groupRange: 1,
            count: 4
        },
        {
            baseName: 'shorts',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'pantalones_cortos_correr',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'camiseta_deporte_manga_corta',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'sports_shirts',
            groupRange: 2,
            count: 4
        }
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
        $images = ["images_{$articulo}_1_1", "images_{$articulo}_1_2", "images_{$articulo}_1_3", "images_{$articulo}_1_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_1_$i', 'image_{$articulo}_1_$i', {$images[$i - 1]}, '{$articulo}_1_$i');\n";
        } ?>


        <?php
        $articulo = "shorts";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "pantalones_cortos_correr";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>


        <?php
        $articulo = "camiseta_deporte_manga_corta";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "sports_shirts";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>


    }

    setInterval(changeImages, 4000);
</script>





<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        /*background-color: #f4f4f4;*/
        margin: 0;
        padding: 20px;
    }

    h1,
    h2,
    h3 {
        color: #005f6b;
        text-align: left;
    }

    p,
    li {
        text-align: left;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        padding: 20px;
        /*background-color: #fff;*/
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .image-container {
        text-align: center;
        margin: 20px 0;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .section {
        margin-bottom: 20px;
    }

    ul {
        list-style-type: disc;
        margin-left: 20px;
    }

    a {
        color: #005f6b;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>