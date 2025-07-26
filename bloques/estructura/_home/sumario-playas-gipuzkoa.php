




<?php
$carpeta = 'playa-de-santiago';
$localidad_nombre = 'Playa de Santiago';
$localidad = 'Deba';
$localidad_minuscula = strtolower($localidad);  // "deba"
$region = 'gipuzkoa';
$region_minuscula = strtolower(str_replace(' ', '-', $region));  // "país-vasco"
$archivo_name = 'santiago-deba';

$presentacion = 'La Playa de Santiago, ubicada en Deba, País Vasco, es una playa de arena fina y aguas limpias, ideal para familias y amantes del surf. Con accesos cómodos y servicios en temporada, esta playa ofrece un entorno natural privilegiado con vistas al mar Cantábrico y senderos costeros para explorar.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';
?>



<?php $targeta = PATH_RAIZ_LOCALIDADES.'/index.php';?>

<h2 id="cantabria" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6">
  Gipuzkoa
</h2>
<?php $localidad = 'Deba';    $localidad_minuscula = strtolower($localidad);?>
<h3 id="<?= $localidad_minuscula?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>


<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME. '/body/card-playa.php'; ?>


<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>