<?php
require './../../../../products_amazon/conexion.php'; // Así funciona para localhost

$sql = "SELECT * FROM amazon_shirts_images " . $where;
$stmt = $conn->query($sql);

if ($stmt->rowCount() > 0) {
    // Salida de datos de cada fila
    $images_shirts_lateral_1_1 = [];

    while ($row = $stmt->fetch()) {
        $product = [
            "href" => $row["href"],
            "src" => $row["src"],
            "alt" => $row["alt"]
        ];
        // echo($product["href"] . " " . $product["src"] . " " . $product["alt"] . "<br>");

        array_push($images_shirts_lateral_1_1, $product);
    }
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conn = null;


