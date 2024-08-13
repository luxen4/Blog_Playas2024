AAAAAAAAAA<?php
require './../../../../products_amazon/conexion.php'; // Así funciona para localhost

$sql = "SELECT * FROM " . $table . " " . $where;
    $stmt = $conn->query($sql);

    if ($stmt->rowCount() > 0) {
        $images = [];

        /*
        // Initialize arrays for each image group
        for ($i = 1; $i <= 4; $i++) {
            $variable_name = "{$category}_{$group}_{$i}";
            
            $$variable_name = [];
            var_dump($$variable_name);
        }*/

        /*
*/


        $posicion = 1;

        while ($row = $stmt->fetch()) {
            $product = [
                "href" => $row["href"],
                "src" => $row["src"],
                "alt" => $row["alt"]
            ];

            //echo(" " . $product["href"] . " " . $product["src"] . " " . $product["alt"] . "<br>");?><br><?php

            if ($posicion == 5) {
                $posicion = 1;
            }

            // Dynamically determine the key to push the product into
            $key = "{$category}_{$group}_{$posicion}";
            //echo("auxiliar " . $key);
            //array_push($images[$key], $product);

            
            if ($posicion == 1) {
                array_push($images_shirts_1_1, $product);
            } elseif ($posicion == 2) {
                array_push($images_shirts_1_2, $product);
            } elseif ($posicion == 3) {
                array_push($images_shirts_1_3, $product);
            } elseif ($posicion == 4) {
                array_push($images_shirts_1_4, $product);
            }
            

            $posicion++;



     

        }

        // Output the images as JavaScript constants
        foreach ($images as $key => $value) {
             echo "const images_{$key} = " . json_encode($value) . ";\n";
        }
    } else {
        echo "0 resultados en {$category}";
    }

// Cerrar la conexión
$conn = null; ?>