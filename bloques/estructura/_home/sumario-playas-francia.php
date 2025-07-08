<?php
$carpeta = 'grande-plage-saint-jean-de-luz';
$localidad_nombre = 'Grande Plage de Saint-Jean-de-Luz';
$localidad = 'Saint-Jean-de-Luz';
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad));  // "saint-jean-de-luz"
$region_minuscula = 'francia';
$archivo_name = 'grande-plage-saint-jean-de-luz';

$presentacion = 'La Grande Plage de Saint-Jean-de-Luz es la playa urbana más emblemática del País Vasco francés. Con su bahía protegida de aguas tranquilas y su amplia franja de arena dorada, ofrece un entorno ideal para familias, baños relajantes y deportes náuticos. Flanqueada por el paseo marítimo Jacques Thibaud y rodeada de la arquitectura tradicional vasca, esta playa combina servicios de calidad (duchas, socorristas, alquiler de sombrillas) con una experiencia costera auténtica. En los chiringuitos cercanos podrás degustar especialidades localesen base a mariscos y la reputación de su ambiente animado la convierte en un destino imprescindible durante el verano.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_playas.php';

$region='Francia'; $region_minuscula = strtolower($region);?>


<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2025/bloques/estructura/variables_comunes/{$region_minuscula}/defines-francia.php"; ?>


<?php $targeta = PATH_RAIZ_LOCALIDADES. '/index.php'; ?>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<h2 id="<?= $region_minuscula; ?>" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6">
  <?= $region; ?>
</h2>

<details class="group bg-<?= $color_page; ?>-50 border border-<?= $color_page; ?>-300 rounded-md p-4 w-full mx-auto my-4 shadow-sm">
  <summary class="cursor-pointer text-<?= $color_page; ?>-800 font-semibold text-lg flex items-center justify-between">
    <div class="flex items-center gap-2">
      <!-- Icono SEO (lupa o gráfico) -->
      <svg class="w-6 h-6 text-<?= $color_page; ?>-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5a7 7 0 017 7c0 1.657-.672 3.157-1.758 4.242l4.536 4.536a1 1 0 01-1.414 1.414l-4.536-4.536A7 7 0 1111 5z" />
      </svg>
      <span><?= $localidad_nombre; /* 'Grande Plage de Saint-Jean-de-Luz' */ ?></span>
    </div>
    <!-- Flecha -->
    <svg class="w-5 h-5 text-<?= $color_page; ?>-600 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
    </svg>
  </summary>

  <div class="mt-4 text-sm text-<?= $color_page; ?>-900 leading-relaxed">
    <?php include $targeta; ?>
  </div>
</details>



















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