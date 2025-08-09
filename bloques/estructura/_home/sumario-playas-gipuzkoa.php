<?php $targeta = PATH_RAIZ_LOCALIDADES.'/index.php';?>
<?php $publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>


<?php $region = 'Gipuzkoa'; $region_minuscula = strtolower($region);?>
<h2 id="gipuzkoa" class="text-2xl md:text-3xl font-bold text-center text-<?= COLOR_PAGE; ?>-800 mb-6"><?= $region; ?></h2>

<?php $localidad = 'Deba';    $localidad_minuscula = strtolower($localidad);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>




<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de Santiago'; 
    $localidad_minuscula = strtolower(str_replace(' ', '-', $playa_name)); 
    $archivo_name = 'santiago-ajo'; 
    $presentacion = 'La Playa de Santiago, ubicada en Deba, País Vasco, es una playa de arena fina y aguas limpias, ideal para familias y amantes del surf. Con accesos cómodos y servicios en temporada, 
    esta playa ofrece un entorno natural privilegiado con vistas al mar Cantábrico y senderos costeros para explorar.';
    ?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>
  </div>
</div>




<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>