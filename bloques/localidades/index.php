<div class="row">

    <div id="#" class="col-xl-7 text-center col-lg-6 col-md-10 col-sm-10 col-12">
        <?php include 'bloques/localidades/presentacion.php'; ?>
        <?php
        if ($_SERVER['SERVER_NAME'] == 'localhost') { ?>
            <a href="<?php $_SERVER['SERVER_NAME']; ?> /Blog_Playas2024/bloques/localidades/<?= $region . '/' . $carpeta; ?>/fichas/<?= $archivo_name; ?>.php" target="_blank">Más info</a>
        <?php
        } else { ?>
            <a href="./bloques/localidades/<?= $region . '/' . $carpeta; ?>/fichas/<?= $archivo_name; ?>.php" target="_blank">Más info</a>
        <?php } ?>

    </div>

    <div id="#" class="col-xl-5 text-center col-lg-6 col-md-12 col-sm-12 col-12">
        <figure>
            <a href="./bloques/localidades/<?= $region . '/' . $carpeta; ?>/fichas/<?= $archivo_name; ?>.php" target="_blank">
                <img src="./bloques/localidades/<?= $region . '/' . $carpeta; ?>/<?= $archivo_name; ?>.jpg" alt="Imagen de <?= $localidad_nombre; ?>" class="img-fluid">
            </a>
            <figcaption>Vista de la <?= $localidad_nombre; ?></figcaption>
        </figure>
    </div>

</div>
<hr>