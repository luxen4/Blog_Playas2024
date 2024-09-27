<!-- información_general -->
<section id="informacion_general">
    <h2 class="section-header text-center"></h2>
    <hr>
    <?= $li_descripcion_detallada; ?>
    <?php
    $articulo = $productos[array_rand($productos)];

    if($anuncios='si'){
        //include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
    }
       
    ?>

    <?php
    if (isset($li_descripcion_detallada2)) {
        $es_segundo_carrusel = ''; 
        echo($li_descripcion_detallada2);
        $articulo = $productos[array_rand($productos)];
        if($anuncios='si'){
            //include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
        }
    }
    ?>

    <?php
    if (isset($li_descripcion_detallada3)) {
        echo($li_descripcion_detallada3);
        $articulo = $productos[array_rand($productos)];
        if($anuncios='si'){
            //include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
        }
    }
    ?>
</section>





<style>
    #informacion_general h3{
    text-align: left;
    }
    #informacion_general li{
        text-align: left;
    }

    #informacion_general p{
        text-align: left;
    }
</style>