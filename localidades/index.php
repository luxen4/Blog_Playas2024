<div class="row">
    <div id="#" class="col-xl-7 text-center col-lg-12 col-md-12 col-sm-12 col-12">
        <?php include 'localidades/presentacion.php'; ?>    
        <?php //require $publicidad; ?>
    </div>

    <div id="#" class="col-xl-5 text-left col-lg-12 col-md-12 col-sm-12 col-12">
        <figure style="text-align: center;">
            <?php /*<a href="playa-de-<?= $archivo_name . '-' . $region; ?>" target="_blank">*/ ?>
            <a href='localidades/<?= $region_minuscula ?>/<?= $carpeta ?>/fichas/playa-de-<?= $archivo_name ."-".$region_minuscula;  ?>.php' target="_blank">
                <img src="localidades/<?= $region_minuscula . '/' .$localidad_minuscula. '/lugares-interes/playas/' .$carpeta ?>/img/playa-de-<?= $archivo_name .'-' .$region_minuscula ; ?>-1.jpg" alt="Imagen de <?= $playa_name; ?>" class="img-fluid">
            </a>
            <figcaption>Vista de la <?= $playa_name; ?></figcaption>
        </figure>
    </div>
</div>
<hr>