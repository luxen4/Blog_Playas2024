<?php

// Parámetros de la conexión
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tu usuario de MySQL tiene una contraseña
$dbname = "blogplayas2024_db";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM amazon_shirts_images " . $where;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    $images_shirts_lateral_1_1 = [];

    while ($row = $result->fetch_assoc()) {

        $product = [
            "href" => $row["href"],
            "src" => $row["src"],
            "alt" => $row["alt"]
        ];
            array_push($images_shirts_lateral_1_1, $product);
    }
} else {
    echo "0 resultados";
}

$conn->close();
