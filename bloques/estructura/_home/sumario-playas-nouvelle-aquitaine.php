<?php $targeta = PATH_RAIZ_LOCALIDADES . '/index.php'; ?>
<h2 id="nouvelle-aquitaine" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6">
  Nouvelle Aquitaine
</h2>
<?php
$carpeta = 'grande-plage';
$localidad_nombre = 'Grande Plage de Saint-Jean-de-Luz';
$localidad = 'Saint Jean de Luz';
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // "saint-jean-de-luz"
$region = 'Nouvelle Aquitaine';
$region_minuscula = strtolower(str_replace(' ', '-', $region));  // "nouvelle-aquitaine"
$archivo_name = 'saint-jean-de-luz-saint-jean-de-luz';

$presentacion = '🏖️ La Grande Plage de Saint-Jean-de-Luz, situada en el corazón del casco histórico, ofrece aguas tranquilas gracias a su bahía protegida. Es ideal para familias, baños relajantes y paseos junto al paseo marítimo en un entorno con encanto vasco-francés.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';
?>


<?php 
$pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS =
       "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";
?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>

<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>
