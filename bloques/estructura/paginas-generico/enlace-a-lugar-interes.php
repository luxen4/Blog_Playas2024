<?php 
if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
    href="/Blog_Playas2026/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $playa_name_minuscula; ?>"<?php

} else { ?>
    href="/Blog_Playas2026/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $playa_name_minuscula; ?>" <?php
}?>

