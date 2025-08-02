<?php $targeta = PATH_RAIZ_LOCALIDADES.'/index.php';?>
<?php $publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>


<?php $region = 'Cantabria'; $region_minuscula = strtolower($region);?>
<h2 id="cantabria" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6"><?= $region; ?></h2>


<?php $localidad = 'Ajo';    $localidad_minuscula = strtolower($localidad);?>
<h3 id="<?= $localidad_minuscula?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<div class="container my-4">
  <div class="row">

    <?php 
    $playa_name = 'Playa de Cuberris'; 
    $carpeta = strtolower(str_replace(' ', '-', $playa_name)); 
    $archivo_name = 'cuberris-ajo'; 
    $presentacion = 'La '.$playa_name.', situada en '.$localidad.', '.$region.', 
    es una extensa playa de arena dorada abierta al mar Cantábrico. Popular entre surfistas y bañistas, 
    combina un entorno natural con servicios básicos de temporada como duchas y vigilancia. Rodeada de acantilados y con fácil acceso en coche y a pie, 
    Cuberris ofrece un equilibrio perfecto entre comodidad y naturaleza para quienes desean disfrutar de la costa cántabra en su estado más puro.';
    ?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>

    <?php 
    $playa_name = 'Playa de Antuerta';  
    $carpeta = strtolower(str_replace(' ', '-', $playa_name)); 
    $archivo_name = 'antuerta-ajo';
    $presentacion = 'La Playa de Antuerta, ubicada en Ajo, Cantabria, 
    es una playa salvaje y tranquila, ideal para los amantes de la naturaleza y los paisajes vírgenes. 
    Con su entorno rocoso y la ausencia de grandes construcciones, es perfecta para quienes buscan desconexión, paseos costeros y la esencia más natural de la costa cántabra. 
    Aunque carece de servicios masivos, su belleza natural compensa cualquier carencia de infraestructuras.';
    ?>
    <?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>

    <div class="col-12 col-md-6 mb-4">
      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
    </div>

  </div>
</div>


<?php $localidad = 'Castro-Urdiales';    $localidad_minuscula = strtolower($localidad);?>
<h3 id="<?= $localidad_minuscula?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Playa de Ostende'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'ostende-castro-urdiales';
$presentacion = 'La Playa de Ostende es una de las joyas de la costa de Santander, situada en el municipio de Castro Urdiales. Con su amplia extensión de arena dorada y sus aguas tranquilas, es un lugar ideal para disfrutar del sol y de diversas actividades acuáticas. La playa está rodeada de un hermoso entorno natural, con acantilados y zonas verdes que invitan a pasear y relajarse. Además, Ostende es famosa por sus servicios de calidad, incluyendo chiringuitos y restaurantes que ofrecen deliciosos platos de la gastronomía local, destacando especialmente los mariscos y pescados frescos. Con un ambiente familiar y acogedor, la Playa de Ostende es perfecta para quienes buscan un día de descanso junto al mar, en un entorno pintoresco y lleno de encanto.';
?>
<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME. '/body/card-playa.php'; ?>



<?php $localidad = 'Sonabia';    $localidad_minuscula = strtolower($localidad);?>
<h3 id="<?= $localidad_minuscula?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>

<?php
$playa_name = 'Playa de Sonabia'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'sonabia-sonabia';
$presentacion = 'La Playa de Sonabia, situada en el extremo oriental de Cantabria junto al límite con el País Vasco, es una playa virgen de arena fina y dorada rodeada de acantilados y zonas verdes. Perfecta para quienes buscan tranquilidad y un paisaje natural impresionante, ofrece excelentes oportunidades para el baño en aguas cristalinas y para el senderismo por los acantilados cercanos. Con accesos peatonales y aparcamiento limitado, su encanto radica en su entorno prácticamente intacto y en las vistas al Mar Cantábrico.';
?>

<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}"; ?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME. '/body/card-playa.php'; ?>



<?php $localidad = 'Santoña';    $localidad_minuscula = 'santona';?>
<h3 id="<?= $localidad_minuscula?>" class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline"><?= $localidad; ?></h3>




<?php
$playa_name = 'Playa de Berria'; $carpeta = strtolower(str_replace(' ', '-', $playa_name)); $archivo_name = 'berria-santona';
$presentacion = '🌊 La Playa de Berria, ubicada en Santoña (Cantabria), es una extensa franja de arena dorada entre el monte Brusco y el monte Buciero. Con más de 2 km de longitud, es ideal para el surf, el baño y largos paseos. Rodeada de ecosistemas protegidos como las marismas de Santoña, ofrece una belleza natural incomparable con servicios completos.';
?>
<?php $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/Blog_Playas2025/localidades/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$carpeta}";?>
<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>





<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>


<?php /*
$carpeta = 'playadesomoloredo';
$playa_name = 'Playa de Somo';
$localidad = 'Playa de Somo';
$archivo_name = 'somo-loredo-somo';
$presentacion = 'Somo es una popular localidad costera situada en Cantabria, al norte de España. Conocida por su extensa playa de arena dorada, la Playa de Somo es un destino destacado para los amantes del surf y las actividades acuáticas. Esta playa ofrece un ambiente vibrante y una amplia gama de servicios, incluyendo restaurantes, bares y tiendas. Además de su atractivo costero, Somo cuenta con un entorno natural impresionante, con vistas al Mar Cantábrico y a la ciudad de Santander. Es el lugar perfecto para disfrutar de la playa, el sol y una rica gastronomía basada en productos frescos del mar.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';
include $targeta; */
?>

<?php 
/*
$carpeta = 'playadenoja';
$playa_name = 'Playa de Noja';
$localidad = 'Playa de Noja';
$archivo_name = 'noja';
$presentacion = 'Noja es un encantador municipio costero situado en la región de Cantabria, al norte de España. Conocido por sus hermosas playas de arena fina, como Playa de Ris y Playa de Trengandín, Noja es un popular destino turístico, especialmente en verano. Además de su atractivo natural, la localidad cuenta con un rico patrimonio cultural, que incluye iglesias históricas y palacetes, así como una oferta gastronómica que destaca por los mariscos y pescados frescos. 
                Es un lugar ideal para disfrutar de la naturaleza, el mar, y la tranquilidad en un entorno pintoresco.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php';
include $targeta; */?>

<?php /*
$carpeta = 'playadeberria';
$playa_name = 'Playa de Berria';
$localidad = 'Playa de Berria';
$archivo_name = 'berria-santona';
$presentacion = 'La Playa de Berria, ubicada en Santona, Cantabria, es un hermoso tramo de arena dorada que se extiende por casi 2 kilómetros entre el Monte Buciero y el estuario de Treto. Con sus aguas cristalinas y su entorno natural protegido, es un destino perfecto para quienes buscan disfrutar del surf, paseos relajantes, o simplemente conectar con la naturaleza.<br>Esta playa, de gran valor ecológico, es un paraíso tanto para los amantes del mar como para aquellos que buscan un rincón tranquilo en la costa cantábrica.';
include $targeta; */?>


<?php /*
$carpeta = 'playadelaredo';
$playa_name = 'Playa de Laredo';
$localidad = 'Playa de Laredo';
$archivo_name = 'laredo';
$presentacion = 'La Playa de Laredo, también conocida como La Salvé, es una de las joyas de la costa cántabra. Con sus más de 4 kilómetros de arena fina y dorada, es el destino perfecto para disfrutar del sol, el mar y actividades al aire libre. Esta amplia playa ofrece un entorno ideal tanto para familias como para amantes de los deportes acuáticos, con su mar tranquilo y un paseo marítimo lleno de vida.<br> Ven y descubre por qué la Playa de Laredo es uno de los destinos más apreciados del norte de España.';
include $targeta; */?>

<?php /*
$carpeta = 'playadeisla';
$playa_name = 'Playa de Isla';
$localidad = 'Playa de Isla';
$archivo_name = 'isla';
$presentacion = 'La Playa de Isla, ubicada en la encantadora localidad de Isla en Cantabria, es un paraíso natural que combina belleza y tranquilidad. Con su extensa franja de arena dorada y aguas cristalinas, es el lugar ideal para relajarse y disfrutar del sol. Su entorno virgen, rodeado de dunas y vegetación, ofrece un refugio perfecto para quienes buscan escapar del bullicio. Ideal tanto para familias como para los amantes de la naturaleza, la Playa de Isla es un destino que promete unas vacaciones inolvidables.';
include $targeta; */?>


<?php /*
$carpeta = 'playadesuances';
$playa_name = 'Playa de Suances';
$localidad = 'Playa de Suances';
$archivo_name = 'suances';
$presentacion = 'La Playa de Suances, situada en el corazón de Cantabria, es un rincón costero que combina la belleza natural con un ambiente acogedor.<br> Conocida por su arena dorada y sus aguas limpias, esta playa es un destino perfecto para disfrutar de un día en familia o practicar deportes acuáticos. Rodeada de impresionantes paisajes y con un paseo marítimo lleno de vida, Suances ofrece una experiencia costera única, donde la tranquilidad y la diversión se encuentran a partes iguales.';
include 'localidades/index.php'; */?>

<?php  /*
$carpeta = 'playadesardinero';
$playa_name = 'Playa del Sardinero, Santander';
$localidad = 'Playa del Sardinero, Santander';
$archivo_name = 'playa-de-sardinero';
$presentacion = 'La Playa de Santander, ubicada en la ciudad del mismo nombre en Cantabria, es una de las playas urbanas más emblemáticas del norte de España. Con su extensa franja de arena dorada y aguas tranquilas, es el lugar ideal para disfrutar de un día de sol y mar. Además de su belleza natural, ofrece un vibrante paseo marítimo con una variedad de restaurantes, bares y tiendas. Perfecta para familias, bañistas y quienes buscan disfrutar del surf, la Playa de Santander combina el encanto de una playa clásica con la comodidad de la proximidad urbana.';
include 'localidades/index.php'; */?>

<?php
/*
$carpeta = 'castrourdiales';
$playa_name = 'Castro Urdiales';
$localidad = 'Castro Urdiales';
$archivo_name = 'playa-de-castrourdiales';
$presentacion = 'La realidad histórica es que Castro Urdiales tiene una fundación romana documentada en el año 74 a.C.,
                  cuando fue establecida como "Flaviobriga" por el emperador Vespasiano. Esta ciudad romana se convirtió
                  en un importante puerto y centro comercial debido a su estratégica ubicación costera.'; 
include 'localidades/index.php';*/?>




