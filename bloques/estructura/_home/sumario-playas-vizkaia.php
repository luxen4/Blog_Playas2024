<?php
$carpeta = 'playa-de-la-arena';
$localidad_nombre = 'Playa de La Arena';
$localidad = 'Muskiz';
$localidad_minuscula = strtolower($localidad);  // "muskiz"
$region = 'Vizkaia';
$region_minuscula = strtolower(str_replace(' ', '-', $region));  // "vizkaia"
$archivo_name = 'muskiz-vizkaia';

$presentacion = 'La Playa de La Arena, situada entre Muskiz (vizkaia) y el límite con Cantabria, es una extensa playa de arena fina con fuerte tradición surfera. Ideal para familias, cuenta con todos los servicios necesarios, accesos cómodos y está rodeada de rutas costeras y espacios naturales.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';
?>

<?php $targeta = PATH_RAIZ_LOCALIDADES . '/index.php'; ?>

<h2 id="vizkaia" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6">
  vizkaia
</h2>

<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>




<?php
$carpeta = 'playa-de-astondoko';
$localidad_nombre = 'Playa de Astondoko';
$localidad = 'Gorliz';
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // "gorliz"
$region = 'Vizkaia';  // Usa "Bizkaia" si esa es tu convención oficial
$region_minuscula = strtolower($region);  // "vizkaia"
$archivo_name = 'astondoko-gorliz-vizkaia';

$presentacion = '🌿 La Playa de Astondoko, también conocida como Astondo o Playa de Astondoko, es una playa natural situada junto a Gorliz, Vizkaia. Destaca por su entorno salvaje, sus vistas espectaculares y la tranquilidad que ofrece. Es ideal para pasear, desconectar y explorar la costa vasca más auténtica.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";
?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>






<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>
