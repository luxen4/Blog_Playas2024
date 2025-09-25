<div class="card-body p-4">
    <h5 class="card-title text-lg font-semibold text-red-800"><?php echo $lugar['nombre']; ?></h5>
    <p class="card-text text-muted small mb-3"><?php echo $lugar['desc']; ?></p>
    <a
        <?php /* Para amigables URLs */
        if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
            href="/Blog_Playas2025/lugares-interes/<?php echo $lugar['slug'] . '-' . $localidad_minuscula; ?>" <?php
        } else { ?>
            href=<?php echo PATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD . "/lugares-interes/{$lugar['slug']}/index.php";
        } ?>
        class="btn btn-success btn-sm px-3 py-2 shadow-sm">Explorar &rarr;
    </a>
</div>