<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
        <?php include 'localidades/presentacion.php'; ?>    
        <?php //require $publicidad; ?>
    
        <figure style="text-align: center;">
            <?php /*<a href="playa-de-<?= $archivo_name . '-' . $region; ?>" target="_blank">*/ ?>
            <a 
                    <?php if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
                        href="<?= PATH_HREF_RAIZ ?>/<?= $carpeta; ?>"<?php
                    } else { ?>
                        href="<?= $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS ?>/index.php"   <?php 
                    }?>target="_blank">

                <img src=  "localidades/<?= $region_minuscula . '/' .$localidad_minuscula. '/lugares-interes/playas/' .$carpeta ?>/img/playa-de-<?= $archivo_name .'-' .$region_minuscula ; ?>-1.jpg" alt="Imagen de <?= $playa_name; ?>" class="img-fluid">
            </a>
            <figcaption>Vista de la <?= $playa_name; ?></figcaption>
        </figure>
    </div>
</div>
<hr>

         