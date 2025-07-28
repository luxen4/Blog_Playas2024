<?php
function render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name, ) {
    // Crear la carpeta a partir del nombre de la playa
    $carpeta = strtolower(str_replace(' ', '-', $playa_name));

      //$carpeta = strtolower(str_replace(' ', '-', $carpeta));

    // Construir la ruta
    $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";

    // Hacer disponibles las variables para el card
    require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php';
}
?>




<?php $targeta = PATH_RAIZ_LOCALIDADES.'/index.php';?>
<?php $publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>


<?php $region = 'Bizkaia'; $region_minuscula = strtolower($region);?>
<h2 id="cantabria" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6"><?= $region; ?></h2>


<?php $localidad = 'Bakio'; $localidad_minuscula = strtolower($localidad);?>


<h3 id="<?= $localidad_minuscula; ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Playa de Bakio'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'bakio-bakio';
$presentacion = 'La '.$playa_name.', situada en '.$localidad.', '.$region.', 
es una playa amplia y muy conocida de la costa vasca, con arena dorada y un oleaje que atrae a numerosos surfistas durante todo el año. 
Rodeada de montañas y paisajes verdes, cuenta con un paseo marítimo, bares, restaurantes y servicios de temporada como duchas y socorristas. 
Es un punto ideal para quienes buscan una combinación de naturaleza, ocio y deportes acuáticos.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>



<?php $localidad = 'Gorliz'; ?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Playa de Astondo'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'astondo-gorliz';
$presentacion = '🌿 La Playa de Astondoko, es una playa natural situada junto a Gorliz, bizkaia. Destaca por su entorno salvaje, sus vistas espectaculares y la tranquilidad que ofrece. Es ideal para pasear, desconectar y explorar la costa vasca más auténtica.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>



<?php $localidad = 'Ibarrangelu'; ?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Playa de Laga'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'laga-ibarrangelu';
$presentacion = 'La Playa de Laya, ubicada en Ibarrangelu, Bizkaia, es una playa virgen y tranquila dentro de la Reserva de la Biosfera de Urdaibai. Destaca por su entorno natural protegido, aguas limpias y olas apreciadas por surfistas. Con acceso sencillo y sin masificaciones, Laya es perfecta para disfrutar de la costa vasca en un entorno salvaje y relajante.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>


<?php $localidad = 'Muskiz'; ?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Playa de La Arena'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'la-arena-muskiz';
$presentacion = 'La Playa de La Arena, situada entre Muskiz (bizkaia) y el límite con Cantabria, es una extensa playa de arena fina con fuerte tradición surfera. Ideal para familias, cuenta con todos los servicios necesarios, accesos cómodos y está rodeada de rutas costeras y espacios naturales.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>


<?php $localidad = 'Sopelana';?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Playa de Arrietara'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'arrietara-sopelana';
$presentacion = 'La Playa de Arrietara, situada en Sopelana (Bizkaia), es una playa popular entre surfistas y familias, con arena fina, buen acceso y servicios. Está rodeada de espacios naturales ideales para pasear y disfrutar de la costa vasca.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>


<?php $localidad = 'Plentzia';?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>


<?php
$playa_name = 'Playa de Plentzia'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'plentzia-plentzia';
$presentacion = 'La Playa de Plentzia, situada en bizkaia, es una extensa y tranquila playa de arena fina, perfecta para familias y paseos. Cuenta con servicios completos, fácil acceso y está protegida del oleaje fuerte, ideal para nadar y disfrutar del paisaje natural de la costa vasca.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>




<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>
