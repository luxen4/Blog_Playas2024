<?php
    if (isset($li_descripcion_detallada2)) {
        $es_segundo_carrusel = ''; 
        echo($li_descripcion_detallada2);
        

        do {
            
            $articulo = $productos[array_rand($productos)];                                 // Seleccionar un artículo aleatorio
                                                                                            // Comprobar si el artículo ya existe en $articulosMostrados
            if (!in_array($articulo, $articulosMostrados)) {
                //array_push($articulosMostrados, $articulo);
                if ($anuncios == 'si') {
                    $numeroAleatorio = rand(1, 2); // O usa mt_rand(1, 2);
                    $numeroAleatorio = 1;
                    // Seleccionar el archivo basado en el número aleatorio
                    if ($numeroAleatorio === 1) {
                        //include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar.php";
                        
                    // Leer aqui el csv
                    //require './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba.php';  
                    //require './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba.php'; 

                    } else {
                        //include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar2.php";
                    }
                }
            }
            
        } while (in_array($articulo, $articulosMostrados)); // Continuar hasta que se encuentre un artículo nuevo
        array_push($articulosMostrados, $articulo);
    }
?>