<?php require $require;
//echo($table);

$sql = "SELECT * FROM " . $table . " " . $where;
$stmt = $conn->query($sql);

// Crear variables dinámicas
if ($stmt->rowCount() > 0) {
    // echo($var_base);
    for ($i = 1; $i <= 4; $i++) {
        ${$var_base . $i} = [];
    }

    $posicion = 1;

    while ($row = $stmt->fetch()) {
        $product = ["href" => $row["href"], "src" => $row["src"], "alt" => $row["alt"]]; 
       // echo ($product["href"] . " " . $product["src"] . " " . $product["alt"] . "<br>");

        ${$var_base . $posicion}[] = $product;
        $posicion = ($posicion % 4) + 1; // Ciclo entre 1 y 4
    }
} else {
    echo "0 resultados en image shirts";
}

$conn = null;   // Cerrar la conexión
?>