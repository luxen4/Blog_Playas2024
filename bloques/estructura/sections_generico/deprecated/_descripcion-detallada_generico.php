<?php 
 // Seleccionar un artículo aleatorio    
 // Comprobar si el artículo ya existe en $articulosMostrados
function mostrar($productos, $articulosMostrados, $anuncios ){
    do {
        $articulo = $productos[array_rand($productos)];                                  
        if (!in_array($articulo, $articulosMostrados)) {
            if ($anuncios == 'si') {
                //include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar.php";
            }
        }
    } while (in_array($articulo, $articulosMostrados)); // Continuar hasta que se encuentre un artículo nuevo
}


$articulosMostrados=[]; 
//require './../../../../bloques/estructura/anuncios/lista_productos.php';
// Leer aqui el csv
require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_chaquetas_hombre.php'; 
?>

<!-- información_general -->
<section id="informacion_general">
    <h2 class="section-header text-center"></h2>
    <?= $li_descripcion_detallada; 
    $articulo = $productos[array_rand($productos)];
    array_push($articulosMostrados, $articulo);

    if($anuncios='si'){
        //include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar.php";
                            // Leer aqui el csv
                            require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_botas_hombre.php'; 
    }
      
    ?>
<?php

require 'descripcion_Detallada2.php';



    if (isset($li_descripcion_detallada3)) {
        echo($li_descripcion_detallada3);
        //mostrar($productos, $articulosMostrados, $anuncios);
        do {
            // Seleccionar un artículo aleatorio
            $articulo = $productos[array_rand($productos)];
            
            // Comprobar si el artículo ya existe en $articulosMostrados
            if (!in_array($articulo, $articulosMostrados)) {
                //array_push($articulosMostrados, $articulo);
                if ($anuncios == 'si') {

                    // Si lee de base de datos come más recursos
                    //include "./../../../../bloques/estructura/carruseles/carrusel_auxiliar.php";

                    // Leer aqui el csv
                    require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php'; 

                }
            }
        } while (in_array($articulo, $articulosMostrados)); // Continuar hasta que se encuentre un artículo nuevo*/
    }
    array_push($articulosMostrados, $articulo);
    ?>
</section>