<?php $targeta = PATH_RAIZ_LOCALIDADES . '/index.php'; ?>
<h2 id="cantabria" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6">
  Bizkaia
</h2>

<?php
$carpeta = 'playa-de-bakio';
$localidad_nombre = 'Playa de Bakio';
$localidad = 'Bakio';
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // "bakio"
$region = 'Bizkaia';  // Usa "Bizkaia" si esa es tu convención oficial
$region_minuscula = strtolower($region);  // "bizkaia"
$archivo_name = 'bakio-bakio';

$presentacion = '🏖️ La Playa de Bakio es una de las playas más emblemáticas de Bizkaia. Con su amplia extensión de arena fina y su fuerte oleaje, es un destino popular para surfistas y amantes de la naturaleza. Ideal para disfrutar del paisaje y practicar deportes acuáticos en la costa vasca.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>






<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";
?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>




<?php
$carpeta = 'playa-de-astondo';
$localidad_nombre = 'Playa de Astondo';
$localidad = 'Gorliz';
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // "gorliz"
$region = 'Bizkaia';  // Usa "Bizkaia" si esa es tu convención oficial
$region_minuscula = strtolower($region);  // "bizkaia"
$archivo_name = 'astondo-gorliz';

$presentacion = '🌿 La Playa de Astondoko, es una playa natural situada junto a Gorliz, bizkaia. Destaca por su entorno salvaje, sus vistas espectaculares y la tranquilidad que ofrece. Es ideal para pasear, desconectar y explorar la costa vasca más auténtica.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";
?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>



<?php
$carpeta = 'playa-de-laga';
$localidad_nombre = 'Playa de Laga';
$localidad = 'Ibarrangelu';
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // "ibarrangelu"
$region = 'Bizkaia';  // Usa la convención oficial para la provincia
$region_minuscula = strtolower($region);  // "bizkaia"
$archivo_name = 'laga-ibarrangelu';

$presentacion = '🏖️ La Playa de Laga es una de las playas más emblemáticas de Bizkaia, situada en Ibarrangelu. Se caracteriza por su extensa arena fina, aguas limpias y un entorno natural protegido dentro de la Reserva de la Biosfera de Urdaibai. Ideal para familias, surfistas y amantes de la naturaleza.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$path_hrefs_playa = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";
?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>



<?php
$carpeta = 'playa-de-la-arena';
$localidad_nombre = 'Playa de La Arena';
$localidad = 'Muskiz';
$localidad_minuscula = strtolower($localidad);  // "muskiz"
$region = 'bizkaia';
$region_minuscula = strtolower(str_replace(' ', '-', $region));  // "bizkaia"
$archivo_name = 'la-arena-muskiz';

$presentacion = 'La Playa de La Arena, situada entre Muskiz (bizkaia) y el límite con Cantabria, es una extensa playa de arena fina con fuerte tradición surfera. Ideal para familias, cuenta con todos los servicios necesarios, accesos cómodos y está rodeada de rutas costeras y espacios naturales.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';
?>







<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>



<?php
$carpeta = 'playa-de-plentzia';
$localidad_nombre = 'Playa de Plentzia';
$localidad = 'Plentzia';
$localidad_minuscula = strtolower($localidad);  // "plentzia"
$region = 'bizkaia';
$region_minuscula = strtolower(str_replace(' ', '-', $region));  // "bizkaia"
$archivo_name = 'plentzia-plentzia';

$presentacion = 'La Playa de Plentzia, situada en bizkaia, es una extensa y tranquila playa de arena fina, perfecta para familias y paseos. Cuenta con servicios completos, fácil acceso y está protegida del oleaje fuerte, ideal para nadar y disfrutar del paisaje natural de la costa vasca.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';
?>





<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>








<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>
