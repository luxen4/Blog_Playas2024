
<h2 id="cantabria" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6">
  Francia
</h2>

<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>


<?php
$carpeta = 'playa-de-la-grande-plage';
$localidad_nombre = 'La Grande Plage';
$localidad = 'Saint-Jean-de-Luz';
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // "saint-jean-de-luz"
$region = 'Nouvelle-Aquitaine';  // Región de Francia
$region_minuscula = strtolower(str_replace(' ', '-', $region));  // "nouvelle-aquitaine"
$archivo_name = 'la-grande-plage-saint-jean-de-luz';

$presentacion = '🏖️ La Grande Plage est la plage emblématique de Saint-Jean-de-Luz, connue pour son sable fin, son ambiance familiale et ses activités nautiques. Idéale pour profiter de la côte basque française en toute tranquillité.';

$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";
?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>


<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>
















<?php /*

<h2 id="francia">Francia</h2>
<?php $targeta = 'localidades/index.php' ?>
<details>
    <summary>Desplegar</summary>

    <?php $region = 'francia';
    $carpeta = 'playadehendaya';
    $localidad_nombre = 'Playa de Hendaya';
    $localidad = 'Playa de Hendaya';
    $archivo_name = 'hendaya';
    $presentacion = 'La Playa de Hendaya, situada en el sur de Francia, en la región de los Pirineos Atlánticos, es una joya costera que ofrece un entorno espectacular y vibrante. Con su extensa franja de arena dorada y aguas tranquilas, es el destino ideal para disfrutar de actividades al aire libre, desde relajantes días de sol hasta emocionantes deportes acuáticos. La playa cuenta con excelentes instalaciones, incluyendo restaurantes, bares y áreas para familias, lo que la convierte en un lugar popular tanto para locales como para turistas. Además, su cercanía a la frontera con España añade un encanto único, haciendo de Hendaya un lugar perfecto para explorar la rica cultura y belleza natural de la región vasca.';
    include $targeta; ?>

    <?php
    $carpeta = 'playadesanjuandeluz';
    $localidad_nombre = 'Playa de San Juan de Luz';
    $localidad = 'Playa de San Juan de Luz';

    $archivo_name = 'saint-jean-de-luz';
    $presentacion = 'La Playa de San Juan de Luz, situada en la encantadora localidad costera del País Vasco francés, es un auténtico tesoro para quienes buscan disfrutar del mar en un entorno pintoresco. Con su arena dorada y aguas tranquilas, esta playa es ideal tanto para relajarse como para practicar deportes acuáticos. Además, su proximidad al casco histórico de la ciudad permite a los visitantes explorar las callejuelas llenas de historia, degustar la gastronomía local y disfrutar de la hospitalidad vasca en un entorno único y acogedor.';
    include $targeta; ?>

    <?php
    $carpeta = 'playadebiarritz';
    $localidad_nombre = 'Playa de Biarritz';
    $localidad = 'Playa de Biarritz';
    $archivo_name = 'biarritz';
    $presentacion = 'La playa de Biarritz, situada en la glamorosa costa atlántica de Francia, es un paraíso para los amantes del sol y el surf. Con sus olas de renombre mundial, este destino es ideal tanto para surfistas como para aquellos que buscan relajarse en su extensa franja de arena dorada. Rodeada de elegantes edificios, cafés y tiendas de lujo, la playa de Biarritz ofrece un ambiente sofisticado y vibrante, donde la belleza natural se fusiona con el encanto cultural de esta icónica ciudad balnearia.';
    include $targeta; ?>
</details>
*/ ?>