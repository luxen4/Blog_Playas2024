<?php
// Ruta del archivo CSV


$csv_file = './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/'. $archivoCSV;

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
?>

<div class="container carrusel_auxiliar2">
    <div class="row" style="max-width: 1300px; margin:auto;">
        <div class="col-12 text-center">
            <h6 class="text-publicidad">Publicidad</h6>

            <div class="row">
                <?php
                // Asegúrate de que haya al menos 4 productos para mostrar
                for ($i = 0; $i < min(4, count($productos)); $i++) {
                    echo '
                        <div class="col-3 custom-carousel-image-container-wrapper">
                            <div class="custom-carousel-image-container square-container">
                                <a id="image-link_' . $i . '" href="' . $productos[$i]['href'] . '">
                                    <img id="image_' . $i . '" src="' . $productos[$i]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . $productos[$i]['alt'] . '">
                                </a>
                            </div>
                        </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilo para el contenedor de las imágenes */
    .carrusel_auxiliar2 .custom-carousel-image-container {
        border: 1px solid #ccc; /* Color y grosor del borde */
        border-radius: 2px; /* Radio para bordes redondeados */
        overflow: hidden; /* Para asegurar que las esquinas redondeadas se mantengan */
        margin: 0.05em; /* Sin margen entre las imágenes */
        padding: 0; /* Sin padding */
    }

    .carrusel_auxiliar2 .row {
        margin-left: 0; /* Quitar margen izquierdo */
        margin-right: 0; /* Quitar margen derecho */
    }

    /* Eliminar padding en las columnas */
    .carrusel_auxiliar2 .col-3 {
        padding-left: 0; /* Sin padding izquierdo */
        padding-right: 0; /* Sin padding derecho */
    }

    .text-publicidad {
        text-align: left;
        color: lightgray;
    }

    /* Estilo para las imágenes pequeñas */
    .custom-carousel-image-container-wrapper {
        padding: 0 5px; /* Espaciado entre las imágenes pequeñas */
    }

    /* Media queries para dispositivos pequeños */
    @media (max-width: 768px) {
        .carrusel_auxiliar2 .col-3 {
            width: 50%; /* Las imágenes ocuparán el 50% del ancho en pantallas pequeñas */
        }

        .custom-carousel-image-container-wrapper {
            padding: 0 3px; /* Reducir el espaciado entre las imágenes pequeñas en pantallas pequeñas */
        }
    }
</style>