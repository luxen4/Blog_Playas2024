<?php
// Ruta del archivo CSV
//$csv_file = './../../../../localidades/francia/playadesanjuandeluz/fichas/sections/amazon_chaquetas_hombre_images.csv';

//$csv_file = './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/amazon_chaquetas_hombre_images.csv';

$csv_file = './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/amazon_jeans_man_images.csv';

// Array para almacenar todos los productos
$productos = [];

// Verifica si el archivo existe
if (file_exists($csv_file)) {
    // Abre el archivo en modo lectura
    if (($handle = fopen($csv_file, "r")) !== FALSE) {
        $header = fgetcsv($handle); // Leer la primera línea como cabecera
        
        // Leemos las filas de los productos
        while (($row = fgetcsv($handle)) !== FALSE) {
            // Crear el array del producto a partir de cada fila
            $product = [
                "href" => $row[1],   // Enlace del producto
                "src"  => $row[2],   // Enlace de la imagen
                "alt"  => $row[3],   // Descripción de la imagen
                "marca" => $row[4],  // Marca del producto
                "precio" => $row[5]  // Precio del producto
            ];

            // Agregar el producto al array principal
            $productos[] = $product;
        }

        fclose($handle);  // Cerrar el archivo CSV
    } else {
        echo "Error al abrir el archivo CSV.";
    }
} else {
    echo "El archivo CSV no existe.";
}

// Mostrar los productos (opcional)
//var_dump($productos);  // Esto te ayudará a ver el contenido de la variable $productos
?>


<!--<div class="carrusel <?php if (isset($es_segundo_carrusel)) echo 'segundo-carrusel'; ?> <?php if (isset($es_tercer_carrusel)) echo 'tercer-carrusel'; ?>">-->
<div class="container carrusel_auxiliar1">
    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-xl-2 text-center col-lg-1 col-md-1"></div>

        <div class="col-xl-7 text-center col-lg-10 col-md-10 col-sm-12 col-12">
            <h6 class="text-publicidad">Publicidad</h6>

            <div class="row">
                <!-- Imagen grande a la izquierda -->
                <div class="col-xl-9 text-center col-lg-10 col-md-10 col-sm-12 col-8">
                    <div class="custom-carousel-image-container square-container">
                        <a id="image-link_1" href="<?php echo $productos[0]['href']; ?>">
                            <img id="image_1" src="<?php echo $productos[0]['src']; ?>" class="d-block w-100 custom-carousel-image" alt="<?php echo $productos[0]['alt']; ?>">
                        </a>
                    </div>
                </div>

                <!-- Imágenes pequeñas a la derecha -->
                <div class="col-xl-3 text-center col-lg-10 col-md-10 col-sm-12 col-4">
                    <?php
                    for ($i = 1; $i < 4; $i++) {
                        echo '
                            <div class="custom-carousel-image-container square-container">
                                <a id="image-link_' . ($i+1) . '" href="' . $productos[$i]['href'] . '">
                                    <img id="image_' . ($i+1) . '" src="' . $productos[$i]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . $productos[$i]['alt'] . '">
                                </a>
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-xl-3 text-center col-lg-1 col-md-1"></div>
    </div>
</div>
<!--</div>-->


<style>
    .carrusel_auxiliar1 {
        margin-top: 3em;
        margin-bottom: 3em;
        
    }

    .carrusel_auxiliar1 .custom-carousel-image-container {
        border: 1px solid #ccc;
        /* Color y grosor del borde */
        border-radius: 2px;
        /* Radio para bordes redondeados */
        overflow: hidden;
        /* Para asegurar que las esquinas redondeadas se mantengan */
        margin: 0.05em;
        /* Sin margen entre las imágenes */
        padding: 0;
        /* Sin padding */
    }

    .carrusel_auxiliar1 .row {
        margin-left: 0;
        /* Quitar margen izquierdo */
        margin-right: 0;
        /* Quitar margen derecho */
    }

    /* Eliminar padding en columnas */
    .carrusel_auxiliar1 .col-xl-6,
    .carrusel_auxiliar1 .col-lg-6,
    .carrusel_auxiliar1 .col-md-6,
    .carrusel_auxiliar1 .col-sm-6,
    .carrusel_auxiliar1 .col-6 {
        padding-left: 0;
        /* Sin padding izquierdo */
        padding-right: 0;
        /* Sin padding derecho */
    }


    .text-publicidad {
        text-align: left;
        color: lightgray;
    }

</style>