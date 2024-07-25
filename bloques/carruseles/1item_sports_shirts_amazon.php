<?php

// Parámetros de la conexión
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tu usuario de MySQL tiene una contraseña
$dbname = "blogplayas2024_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($where)){
    $sql = "SELECT * FROM " .$table.  " " .$where;
}else{
  $sql = "SELECT * FROM " .$table;  
}



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    $images_sports_shirts_1_1 = [];
    $images_sports_shirts_1_2 = [];
    $images_sports_shirts_1_3 = [];
    $images_sports_shirts_1_4 = [];
    $images_sports_shirts_1_5 = [];
    $posicion = 1;

    while ($row = $result->fetch_assoc()) {

        $product = [
            "href" => $row["href"],
            "src" => $row["src"],
            "alt" => $row["alt"]
        ];



        if ($posicion == 5) {
            $posicion = 1;
        }

        if ($posicion == 1) { 
            array_push($images_sports_shirts_1_1, $product);
        } elseif ($posicion == 2) {        
            array_push($images_sports_shirts_1_2, $product);
        } elseif ($posicion == 3) {
            array_push($images_sports_shirts_1_3, $product);
        } elseif ($posicion == 4) { 
            array_push($images_sports_shirts_1_4, $product);
        } elseif ($posicion == 5) { 
        array_push($images_sports_shirts_1_5, $product);
    }

        $posicion = $posicion + 1;
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>