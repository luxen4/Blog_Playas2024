<?php
require './../../../../products_amazon/conexion.php'; // Así funciona para localhost

$sql = "SELECT * FROM amazon_shorts_images " . $where;
$stmt = $conn->query($sql);

if ($stmt->rowCount() > 0) {
    // Salida de datos de cada fila
    $images_shorts_3_1 = [];
    $images_shorts_3_2 = [];
    $images_shorts_3_3 = [];
    $images_shorts_3_4 = [];
    $posicion = 1;

    while ($row = $stmt->fetch()) {
        $product = [
            "href" => $row["href"],
            "src" => $row["src"],
            "alt" => $row["alt"]
        ];
        // echo($product["href"] . " " . $product["src"] . " " . $product["alt"] . "<br>");

        if ($posicion == 5) {
            $posicion = 1;
        }

        if ($posicion == 1) {
            array_push($images_shorts_3_1, $product);
        } elseif ($posicion == 2) {
            array_push($images_shorts_3_2, $product);
        } elseif ($posicion == 3) {
            array_push($images_shorts_3_3, $product);
        } elseif ($posicion == 4) {
            array_push($images_shorts_3_4, $product);
        }

        $posicion = $posicion + 1;
    }
} else {
    echo "0000 resultados en shorts_man";
}

// Cerrar la conexión
$conn = null;