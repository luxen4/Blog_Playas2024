<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Castro Urdiales</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Encabezado de la Playa de Castro Urdiales 
    <header class="bg-primary text-white text-center py-1">
        <h1>Playa de Castro Urdiales</h1>
        <p>La Playa de Castro Urdiales, también conocida como La Salvé, es una de las playas más extensas y bellas de la costa cántabra. Un lugar perfecto para disfrutar del sol, el mar y los deportes acuáticos.</p>
    </header>-->


    <?php
    $src = './../../../../mifoto.png';
    include_once './../../../../bloques/estructura/barra_navegacion2.php'; ?>
    <?php
    $page = 'castrourdiales';
    include_once './../../../../bloques/estructura/anuncios/carga_productos.php'; ?>
    <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/../../../../bloques/estructura/'); ?>


    <div class="container my-5">
        <h1 class="text-center">Playa de Castro Urdiales: Un Paraíso en Cantabria</h1>

        <section class="my-4">
        <h2>Castro Urdiales</h2>
                
                <p>Castro Urdiales, conocido en la antigüedad como Flaviobriga, fue fundado por los romanos en el siglo I d.C. <br>
                    Su puerto natural jugó un papel crucial en el comercio y la pesca, convirtiéndose en uno de los puertos más importantes del Cantábrico.
                </p>

                <p>En la Edad Media, el puerto de Castro Urdiales continuó siendo un centro de actividad marítima. <br>
                    Durante los siglos XIX y XX, se desarrollaron importantes infraestructuras portuarias que ayudaron a modernizar la ciudad y su puerto.
                </p>
        </section>


        <h3>10 lugares que no te puedes perder en Castro Urdiales</h3>

        <?php include_once './../lugares/parqueamestoy.php'; ?>

                <?php include_once './../lugares/asadorlaperla.php'; ?>
        <hr><?php
            $articulo = 'sandals_man';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>
                <?php include_once './../lugares/paseomaritimo.php'; ?>
                
                <?php include_once './../lugares/clubnautico.php'; ?>
        <hr><?php
            $articulo = 'sandals_woman_izda_15';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>
                <?php include_once './../lugares/puentemedieval.php'; ?>

                <?php include_once './../lugares/puertocastrourdiales.php'; ?><hr>

                <?php include_once './../lugares/plazaayuntamiento.php'; ?>
        <hr><?php
            $articulo = 'shirts_modelo_derecha';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>
                <?php include_once './../lugares/puertocastrourdiales.php'; ?>

                <?php include_once './../lugares/castillodesantaana.php'; ?>

                <?php include_once './../lugares/iglesiadesantamariadelaasuncion.php'; ?>
        <hr><?php
            $articulo = 'shirts_izquierda';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>
                <?php include_once './../lugares/elpedregal.php'; ?>

                <?php include_once './../lugares/playadeostende.php'; ?> 
        <hr><?php
            $articulo = 'sneakers_izquierda_15';
            $grupo = '_2';
            include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
        <hr>
                <?php include_once './../lugares/palaciodeochagaran.php'; ?>

    </div>



    <!-- Contenido principal -->
    <main class="container my-4">

        <?php // Carrusel de 3 Imágenes //
        $lugar = 'castrourdiales';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/playacastrourdiales.jpg', '/paseomaritimocastrourdiales.jpg', '/atardecerencastrourdiales.jpg'];
        $alt = ["Vista de la Playa de Castro Urdiales", "Paseo marítimo en la Playa de Castro Urdiales", "Atardecer en la Playa de Castro Urdiales"];
        require './../../../../bloques/estructura/carruselimagenes/carruselgenerico.php'; ?>

        <?php // Galeria 3 imagenes //
        $lugar = 'castrourdiales';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2024/bloques/localidades/' . $lugar . '/img';
        $imges_name = ['/actividadesenlacastrourdiales.jpg', '/olasenlacastrourdiales.jpg', '/puertodeportivodecastrourdiales.jpg'];
        $alt = ["Actividades en la Playa de Castro Urdiales", "Olas en la Playa de Castro Urdiales", "Puerto deportivo en la Playa de Castro Urdiales"];
        require './../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>




<!-- Mapa de Ubicación -->
<section class="map container my-5">
    <h2>Ubicación</h2>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5831.651444241797!2d-3.223077446167217!3d43.386075434058306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd491d8696af44a3%3A0xc1223f750f28a028!2sCastro-Urdiales%2C%20Cantabria!5e0!3m2!1ses!2ses!4v1692109982432!5m2!1ses!2ses"
        width="100%"
        height="450"
        allowfullscreen=""
        loading="lazy"
        aria-hidden="false"
        tabindex="0">
    </iframe>
</section>



    </main>

    <!-- Footer -->
    <footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
 


<?php
/*                
Vista aérea de la Playa de Castro Urdiales
Para una imagen que muestre una vista desde arriba de la playa y sus alrededores.

Paseo marítimo en la Playa de Castro Urdiales
Para una imagen que capture el paseo marítimo junto a la playa.

Atardecer en la Playa de Castro Urdiales
Para una imagen que muestre el atardecer sobre el mar en Castro Urdiales.

Actividades en la Playa de Castro Urdiales
Para una imagen que muestre a personas disfrutando de actividades como voleibol o natación en la playa.

Olas en la Playa de Castro Urdiales
Para una imagen que capture las olas rompiendo en la orilla de la playa.

Surf en la Playa de Castro Urdiales
Para una imagen que muestre a surfistas disfrutando de las olas en la playa.

Familias disfrutando en la Playa de Castro Urdiales
Para una imagen que muestre a familias jugando o relajándose en la arena.

Vista panorámica desde el monte Atalaya en Castro Urdiales
Para una imagen que muestre una vista panorámica de la playa y la ciudad desde una ubicación elevada.

Playas doradas de Castro Urdiales en verano
Para una imagen que capture la playa llena de bañistas en un día soleado de verano.

Puerto deportivo de Castro Urdiales junto a la playa
Para una imagen que muestre el puerto deportivo cercano a la playa.*/



?>


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
        "sandals_man" => 2,
        "shirts_modelo_derecha" => 2,
        "shirts_izquierda" => 2,
        "sneakers_izquierda_15" => 2,
        "sandals_woman_izda_15" => 2
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
        },
        {
            baseName: 'shirts_modelo_derecha',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'shirts_izquierda',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'sneakers_izquierda_15',
            groupRange: 2,
            count: 4
        },
        {
            baseName: 'sandals_woman_izda_15',
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

        <?php
        $articulo = "shirts_modelo_derecha";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "shirts_izquierda";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "sneakers_izquierda_15";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>

        <?php
        $articulo = "sandals_woman_izda_15";
        $images = ["images_{$articulo}_2_1", "images_{$articulo}_2_2", "images_{$articulo}_2_3", "images_{$articulo}_2_4"];
        for ($i = 1; $i <= 4; $i++) {
            echo "prueba('image-link_{$articulo}_2_$i', 'image_{$articulo}_2_$i', {$images[$i - 1]}, '{$articulo}_2_$i');\n";
        } ?>



    }

    setInterval(changeImages, 4000);
</script>