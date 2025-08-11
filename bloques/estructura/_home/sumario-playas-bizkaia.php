<?php $targeta = PATH_RAIZ_LOCALIDADES.'/index.php';?>
<?php $publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>


<?php $region = 'Bizkaia'; $region_minuscula = strtolower($region);?>
<h2 id="Bizkaia" class="text-2xl md:text-3xl font-bold text-center text-<?= COLOR_PAGE; ?>-800 mb-6"><?= $region; ?></h2>

<?php $localidad = 'Bakio';    $localidad_minuscula = strtolower($localidad);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>

<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de Bakio'; $playa_name_minuscula=strtolower(str_replace(' ', '-', $playa_name));
    $archivo_name = 'bakio-bakio'; 
    $presentacion = 'La '.$playa_name.', situada en '.$localidad.', '.$region.', 
    es una playa amplia y muy conocida de la costa vasca, con arena dorada y un oleaje que atrae a numerosos surfistas durante todo el año. 
    Rodeada de montañas y paisajes verdes, cuenta con un paseo marítimo, bares, restaurantes y servicios de temporada como duchas y socorristas. 
    Es un punto ideal para quienes buscan una combinación de naturaleza, ocio y deportes acuáticos.';
        ?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>

  </div>
</div>







<?php $localidad = 'Gorliz'; $localidad_minuscula = strtolower($localidad);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>

<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de Astondo'; $playa_name_minuscula=strtolower(str_replace(' ', '-', $playa_name));
    $archivo_name = 'astondo-gorliz'; 
    $presentacion = '🌿 La Playa de Astondoko, es una playa natural situada junto a Gorliz, bizkaia. Destaca por su entorno salvaje, sus vistas espectaculares y la tranquilidad que ofrece. Es ideal para pasear, desconectar y explorar la costa vasca más auténtica.';
        ?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>

  </div>
</div>



<?php $localidad = 'Ibarrangelu'; $localidad_minuscula = strtolower($localidad);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>



<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de Laga'; $playa_name_minuscula=strtolower(str_replace(' ', '-', $playa_name));
    $archivo_name = 'laga-ibarrangelu'; 
    $presentacion = '🌿 La Playa de Laya, ubicada en Ibarrangelu, Bizkaia, es una playa virgen y tranquila dentro de la Reserva de la Biosfera de Urdaibai. Destaca por su entorno natural protegido, aguas limpias y olas apreciadas por surfistas. Con acceso sencillo y sin masificaciones, Laya es perfecta para disfrutar de la costa vasca en un entorno salvaje y relajante.';
        ?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>

  </div>
</div>



<?php $localidad = 'Muskiz'; $localidad_minuscula = strtolower($localidad);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>

<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de La Arena'; $playa_name_minuscula=strtolower(str_replace(' ', '-', $playa_name));
    $archivo_name = 'la-arena-muskiz'; 
    $presentacion = '🌿 Playa de La Arena'; $localidad_minuscula = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'la-arena-muskiz';
    $presentacion = 'La Playa de La Arena, situada entre Muskiz (bizkaia) y el límite con Cantabria, es una extensa playa de arena fina con fuerte tradición surfera. Ideal para familias, cuenta con todos los servicios necesarios, accesos cómodos y está rodeada de rutas costeras y espacios naturales.';
        ?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>

  </div>
</div>



<?php $localidad = 'Sopelana'; $localidad_minuscula = strtolower($localidad);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>


<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de Arrietara'; $playa_name_minuscula=strtolower(str_replace(' ', '-', $playa_name));
    $archivo_name = 'arrietara-sopelana'; 
    $presentacion = '🌿 La Playa de Arrietara, situada en Sopelana (Bizkaia), es una playa popular entre surfistas y familias, con arena fina, buen acceso y servicios. Está rodeada de espacios naturales ideales para pasear y disfrutar de la costa vasca.';?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>

  </div>
</div>



<?php $localidad = 'Plentzia'; $localidad_minuscula = strtolower($localidad);?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; ?>


<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de Plentzia'; $playa_name_minuscula=strtolower(str_replace(' ', '-', $playa_name));
    $archivo_name = 'plentzia-bizkaia'; 
    $presentacion = '🌿 La Playa de Plentzia, situada en bizkaia, es una extensa y tranquila playa de arena fina, perfecta para familias y paseos. Cuenta con servicios completos, fácil acceso y está protegida del oleaje fuerte, ideal para nadar y disfrutar del paisaje natural de la costa vasca.';?>
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
