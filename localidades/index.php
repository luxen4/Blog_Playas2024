<div class="row">
    <div id="#" class="col-xl-7 text-center col-lg-12 col-md-12 col-sm-12 col-12">
        <?php include 'localidades/presentacion.php'; ?>    
        <?php require $publicidad; ?>
    </div>

    <div id="#" class="col-xl-5 text-left col-lg-12 col-md-12 col-sm-12 col-12">
        <figure style="text-align: center;">
            <?php /*<a href="playa-de-<?= $archivo_name . '-' . $region; ?>" target="_blank">*/ ?>
            <a href='localidades/<?= $region ?>/<?= $carpeta ?>/fichas/playa-de-<?= $archivo_name ."-".$region;  ?>.php' target="_blank">
                <img src="localidades/<?= $region . '/' . $carpeta; ?>/img/playa-de-<?= $archivo_name .'-' .$region ; ?>.jpg" alt="Imagen de <?= $localidad_nombre; ?>" class="img-fluid">
            </a>
            <figcaption>Vista de la <?= $localidad_nombre; ?></figcaption>
        </figure>
    </div>
</div>
<hr>