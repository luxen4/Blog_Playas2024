<?php // $articulosMostrados=[]; 
/*
require './../../../../bloques/estructura/anuncios/lista_productos.php';



$articulo='';?>
<!-- información_general -->
    <?= $li_variable; 
    $articulo = $productos[array_rand($productos)];
    array_push($articulosMostrados, $articulo);

    if($anuncios='si'){
        if ($anuncios == 'si') {
            $numeroAleatorio = rand(1, 4); // Genera un número aleatorio entre 1 y 3
            $numeroAleatorio=1;
            // Seleccionar el archivo basado en el número aleatorio
            if ($numeroAleatorio === 1) {
                include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar.php";
            } elseif ($numeroAleatorio === 2) {
                include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar2.php";
            } elseif ($numeroAleatorio === 3) {
                include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar3.php";
            } elseif ($numeroAleatorio === 4) {
                //include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar_estilo.php";
            }
        }
    }

    //print_r($articulosMostrados[0]);

    if (!empty($li_variable2)) {
        echo($li_variable2);
        $articulo = '';
        do {
            $articulo = $productos[array_rand($productos)];
        } while (in_array($articulo, $articulosMostrados)); // Asegúrate de que no esté repetido

        array_push($articulosMostrados, $articulo);
            //array_push($articulosMostrados, $articulo);
            if ($anuncios == 'si') {
                $numeroAleatorio = rand(1, 3); // Genera un número aleatorio entre 1 y 3
                $numeroAleatorio = 1;
                // Seleccionar el archivo basado en el número aleatorio
                if ($numeroAleatorio === 1) {
                    include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar.php";
                } elseif ($numeroAleatorio === 2) {
                    include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar2.php";
                } elseif ($numeroAleatorio === 3) {
                    include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar3.php";
                }
            }
    }?>

    <?php
    if (!empty($li_variable3)) {
        echo($li_variable3);
        $articulo = '';
        do {
            $articulo = $productos[array_rand($productos)];
        } while (in_array($articulo, $articulosMostrados)); // Asegúrate de que no esté repetido

        array_push($articulosMostrados, $articulo);
            //array_push($articulosMostrados, $articulo);
            if ($anuncios == 'si') {

                $numeroAleatorio = rand(1, 2); // O usa mt_rand(1, 2);
                $numeroAleatorio = 1;
                // Seleccionar el archivo basado en el número aleatorio
                if ($numeroAleatorio === 1) {
                    include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar.php";
                } else {
                    include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar2.php";
                }
            } 
    }
    //print_r($articulosMostrados);*/
    ?>