
<?php // Crear un array vacío
$arrayElementos = array(
    array("nombre" => "botas_hombre", "tipoPublicidad" => "horizontal"),
    array("nombre" => "chaquetas_hombre", "tipoPublicidad" => "horizontal"),
    array("nombre" => "dress_woman", "tipoPublicidad" => "horizontal"),
    array("nombre" => "jeans_man", "tipoPublicidad" => "horizontal"),
    array("nombre" => "shorts", "tipoPublicidad" => "horizontal"),
    array("nombre" => "sneakers", "tipoPublicidad" => "horizontal"),
    array("nombre" => "sports_shirts", "tipoPublicidad" => "horizontal"),
    array("nombre" => "vaqueros_hombre", "tipoPublicidad" => "horizontal"),
    array("nombre" => "camisas_hawaianas_man", "tipoPublicidad" => "horizontal"),
    array("nombre" => "atuendo1", "tipoPublicidad" => "atuendo")
);


// Función para leer el CSV y obtener los productos correspondientes
function leer_CSV($nombre) {

    $csv_file = PATH_BLOQUES_SECTIONS_GENERICO.'/csv_publicidad_amazon/amazon_' . $nombre . '_images.csv';


/*
// Detectar si estamos en index.php
if (basename($_SERVER['PHP_SELF']) === 'index.php') {
    $csv_file = './bloques/estructura/sections_generico/csv_publicidad_amazon/amazon_' . $nombre . '_images.csv';
} else {
    $csv_file = './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/amazon_' . $nombre . '_images.csv';
}*/



    $productos = [];

    // Verificar si el archivo CSV existe
    if (file_exists($csv_file)) {
        // Intentar abrir el archivo CSV en modo lectura
        if (($handle = fopen($csv_file, "r")) !== FALSE) {
            $header = fgetcsv($handle); // Leer la cabecera del archivo CSV

            // Leer cada fila del archivo CSV
            while (($row = fgetcsv($handle)) !== FALSE) {
                $product = [ "href" => $row[1], "src"  => $row[2], "alt"  => $row[3], "marca" => $row[4], "precio" => $row[5]
                ];
                $productos[] = $product; // Agregar el producto al array
            }
            fclose($handle); // Cerrar el archivo CSV
        } else {
            echo "Error al abrir el archivo CSV.";
        }
    } else {
        echo "El archivo CSV no existe.";
    }

    return $productos; // Retornar el array de productos
}
?>