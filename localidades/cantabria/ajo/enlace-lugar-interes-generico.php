<a
    <?php

    $lugar_interes_main_minuscula = strtolower(str_replace(' ', '-', $lugar_interes_main)); 

    if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
        href="<?= PATH_HREF_RAIZ . '/' . $lugar_interes_main_minuscula ?>" <?php
    } else { ?>
        href=<?= PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD . "/lugares-interes/{$lugar_interes_main_minuscula}/index.php";
    } ?>
    class="btn btn-outline-secondary w-100 text-start px-3 py-2"><?= $lugar_interes_main; ?>
</a>