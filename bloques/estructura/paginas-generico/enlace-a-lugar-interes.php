<?php 
if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
    href="<?= PATH_HREF_RAIZ ?>/lugares-interes/<?= $playa_name_minuscula.'-'.$localidad_minuscula; ?>"<?php
} else { ?>
    href="<?= $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS ?>/index.php" <?php
}?>