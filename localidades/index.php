<div class="row">
    <div id="#" class="col-xl-7 text-center col-lg-12 col-md-12 col-sm-12 col-12">
        <?php include 'localidades/presentacion.php'; ?>    
        <?php require $publicidad; ?>
    </div>

    <div id="#" class="col-xl-5 text-left col-lg-12 col-md-12 col-sm-12 col-12">
        <figure style="text-align: center;">
            <a href="./localidades/<?= $region . '/' . $carpeta; ?>/fichas/<?= $archivo_name; ?>.php" target="_blank">
                <img src="localidades/<?= $region . '/' . $carpeta; ?>/img/<?= $archivo_name; ?>.jpg" alt="Imagen de <?= $localidad_nombre; ?>" class="img-fluid">
            </a>
            <figcaption>Vista de la <?= $localidad_nombre; ?></figcaption>
        </figure>
    </div>
</div>
<hr>