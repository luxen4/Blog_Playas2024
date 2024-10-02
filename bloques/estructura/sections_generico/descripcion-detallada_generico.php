<?php $articulosMostrados=[]; ?>

<!-- información_general -->
<section id="informacion_general">
    <h2 class="section-header text-center"></h2>
    <?= $li_descripcion_detallada; 
    $articulo = $productos[array_rand($productos)];
    array_push($articulosMostrados, $articulo);

    if($anuncios='si'){//include "./../../../../bloques/estructura/carrusel_auxiliar.php";
}
       
    ?>
<?php
if (isset($li_descripcion_detallada2)) {
    $es_segundo_carrusel = ''; 
    echo($li_descripcion_detallada2);


    do {
        // Seleccionar un artículo aleatorio
        $articulo = $productos[array_rand($productos)];
        
        // Comprobar si el artículo ya existe en $articulosMostrados
        if (!in_array($articulo, $articulosMostrados)) {
            if ($anuncios == 'si') {

                $numeroAleatorio = rand(1, 2); // O usa mt_rand(1, 2);

                // Seleccionar el archivo basado en el número aleatorio
                if ($numeroAleatorio === 1) {
                    //include "./../../../../bloques/estructura/carrusel_auxiliar.php";
                } else {
                    //include "./../../../../bloques/estructura/carrusel_auxiliar2.php";
                }
            }
        }
        
    } while (in_array($articulo, $articulosMostrados)); // Continuar hasta que se encuentre un artículo nuevo

}?>

    <?php
    if (isset($li_descripcion_detallada3)) {
        echo($li_descripcion_detallada3);
        do {
            // Seleccionar un artículo aleatorio
            $articulo = $productos[array_rand($productos)];
            
            // Comprobar si el artículo ya existe en $articulosMostrados
            if (!in_array($articulo, $articulosMostrados)) {
                if ($anuncios == 'si') {
                    //include "./../../../../bloques/estructura/carrusel_auxiliar.php";
                }
            }
        } while (in_array($articulo, $articulosMostrados)); // Continuar hasta que se encuentre un artículo nuevo
    }
    ?>
</section>