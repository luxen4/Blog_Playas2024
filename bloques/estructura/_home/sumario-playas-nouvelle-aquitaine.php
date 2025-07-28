<?php $targeta = PATH_RAIZ_LOCALIDADES . '/index.php'; ?>
<?php $publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>

<?php $region = 'Nouvelle Aquitaine'; $region_minuscula = strtolower($region);?>
<h2 id="cantabria" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6"><?= $region; ?></h2>


<?php $localidad = 'Saint Jean de Luz'; ?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Grande Plage'; $carpeta = 'playa-de-la-grande-plage-saint-jean-de-luz'; $archivo_name = 'grande-plage-saint-jean-de-luz';
$presentacion = '🏖️ La Grande Plage de Saint-Jean-de-Luz, situada en el corazón del casco histórico, ofrece aguas tranquilas gracias a su bahía protegida. Es ideal para familias, baños relajantes y paseos junto al paseo marítimo en un entorno con encanto vasco-francés.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>




<?php $localidad = 'Biarritz'; ?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>



<?php
$playa_name = 'La Grande Plage'; $carpeta = 'playa-de-la-grande-plage-biarritz'; $archivo_name = 'grande-plage-biarritz';
$presentacion = '🌊 La Grande Plage en Biarritz es la playa más emblemática de la ciudad, famosa por sus olas para surfear, su amplio paseo marítimo y su animado ambiente durante todo el año.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>




<?php $localidad = 'Capbreton'; ?>
<h3 id="<?= strtolower($localidad); ?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Plage Centrale'; $carpeta = 'playa-de-la-plage-centrale-capbreton'; $archivo_name = 'playa-de-la-plage-centrale-capbreton';
$presentacion = '🏄 La Plage Centrale en Capbreton es una playa urbana muy popular, ideal para surfistas y familias que disfrutan del mar y el ambiente costero en Landes.';
?>
<?php render_playa_card($playa_name, $presentacion, $region_minuscula, $localidad_minuscula, $targeta, $archivo_name);?>









<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>
