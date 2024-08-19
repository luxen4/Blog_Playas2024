<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Plentzia</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php 

    $page = 'castrourdiales';
    $ruta = './../../../../bloques/estructura';
    include './../../../../bloques/estructura/basico.php'; ?>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-3">
        <h1>Playa de Plentzia</h1>
        <p>Descubre una de las playas más encantadoras del País Vasco, Un paraíso costero en el corazón del País Vasco</p>
    </header>

    <hr><?php
            $articulo = 'sandals_man';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>

    <!-- Presentación -->
    <section class="container my-5">
        <h2 class="section-title">Bienvenida a la Playa de Plentzia</h2>
        <p>
            La Playa de Plentzia, ubicada en la encantadora localidad costera del País Vasco, ofrece una experiencia única para los amantes del sol y el mar. Esta playa de arena dorada y aguas cristalinas es ideal para disfrutar de un día en familia o para relajarse bajo el sol. Su ambiente acogedor y sus vistas panorámicas al mar Cantábrico crean un entorno perfecto para practicar deportes acuáticos, como el surf y el paddleboarding, o simplemente para relajarse y disfrutar de la tranquilidad del entorno. Con una amplia gama de servicios y una vibrante vida local, Plentzia es el destino perfecto para una escapada costera inolvidable.
        </p>

                        <p>
                    La Playa de Plentzia, ubicada en la pintoresca localidad del País Vasco, es un destino ideal para quienes buscan combinar relajación con actividades al aire libre. Con su extensa franja de arena dorada y sus aguas tranquilas, es perfecta para familias y visitantes de todas las edades. La playa cuenta con excelentes instalaciones, incluyendo duchas, aseos y zonas de juegos infantiles. Además, su entorno natural ofrece oportunidades para practicar deportes acuáticos como el surf y el paddleboarding, o simplemente disfrutar de una caminata a lo largo del paseo marítimo.
                </p>
                <div class="highlight">
                    <h3>Características Destacadas</h3>
                    <p>• Arena fina y dorada ideal para tomar el sol.</p>
                    <p>• Aguas cristalinas y calmadas perfectas para nadar.</p>
                    <p>• Amplia variedad de servicios y actividades recreativas.</p>
                    <p>• Entorno natural impresionante con vistas al mar Cantábrico.</p>
                </div>
                <p>
                    En Plentzia no solo disfrutarás de un día en la playa, sino que también podrás explorar el encantador pueblo cercano, con sus tiendas, restaurantes y bares que ofrecen una muestra de la rica cultura vasca. ¡No te pierdas la oportunidad de visitar la Playa de Plentzia para una experiencia costera inolvidable!
                </p>
    </section>



    <!-- Galería de Imágenes -->
    <section class="container my-5">
    <?php // Carrusel de 3 Imágenes //
        $lugar = 'playadeplentzia';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/vistaaereadelaplayadeplentzia.jpg', '/panoramicadelaplayadeplentzia.jpg', '/atardecerenplayadeplentzia.jpg'];
        $alt = ["Vista aérea de la Playa de Plentzia y su entorno natural", "Vista panorámica de la Playa de Plentzia con arena dorada y aguas tranquilas", "Atardecer en la Playa de Plentzia"];
        require './../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

        <?php // Galeria 3 imagenes //
        $lugar = 'playadeplentzia';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/vistadeplayadeplentzia2.jpg', '/paseomaritimo.jpg', '/puentenuevoplayadeplentzia.jpg'];
        $alt = ["Vista de la Playa de Plentzia", "Paseo Maritimo en Playa de Plentzia", "Puente Nuevo Playa de Plentzia"];
        require './../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>
    </section>


<?php /*
"Vista panorámica de la Playa de Plentzia con arena dorada y aguas tranquilas"
"Atardecer en la Playa de Plentzia, Vizcaya"
"Familias disfrutando de un día soleado en la Playa de Plentzia"
"Deportistas practicando paddle surf en la Playa de Plentzia"
"Vista aérea de la Playa de Plentzia y su entorno natural"
"Playa de Plentzia en la costa vasca, ideal para un día de relax"
"Niños jugando en la arena de la Playa de Plentzia"
"Paseo marítimo junto a la Playa de Plentzia, Vizcaya"
*/?>

    

    <!-- Mapa de Ubicación -->
    <section class="map container my-5">
        <h2 class="section-title">Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2900.758929572006!2d-2.985097484606638!3d43.41780067909733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b1a3d6e7e737%3A0xf62e83304d22c5c3!2sPlaya%20de%20Plentzia!5e0!3m2!1ses!2ses!4v1594865304784!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<style>

        .gallery img {
            width: 100%;
            height: auto;
        }
        .section-title {
            margin-bottom: 1.5em;
            font-size: 2em;
            font-weight: bold;
        }
        .map iframe {
            border: none;
        }
        .presentation img {
            max-width: 100%;
            height: auto;
        }
        .highlight {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .highlight h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .highlight p {
            margin-bottom: 0;
        }

    </style>

<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #2c3e50;
        color: #ecf0f1;
        padding: 20px 0;
        text-align: center;
    }

    nav {
        background-color: #34495e;
        padding: 10px;
        text-align: center;
    }

    nav a {
        color: #ecf0f1;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    }


    footer {
        background-color: #2c3e50;
        color: #ecf0f1;
        text-align: center;
        padding: 10px 0;
        margin-top: 20px;
    }
</style>

    




<script>
    /* Solo Shirts */
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
        "sandals_man" => 2
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
    const definitions = [{
            baseName: 'sandals_man',
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
        $articulo = "sandals_man";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

    }

    setInterval(changeImages, 4000);
</script>