
<?php
$carpeta = 'playa-de-ostende';
$localidad_nombre = 'Playa de Ostende';
$localidad = 'Playa de Ostende'; 
$localidad = 'Castro-Urdiales'; $localidad_minuscula = strtolower($localidad); 
$region_minuscula = 'cantabria';
$archivo_name = 'ostende-castro-urdiales';

$presentacion = 'La Playa de Ostende es una de las joyas de la costa de Santander, situada en el municipio de Castro Urdiales. Con su amplia extensión de arena dorada y sus aguas tranquilas, es un lugar ideal para disfrutar del sol y de diversas actividades acuáticas. La playa está rodeada de un hermoso entorno natural, con acantilados y zonas verdes que invitan a pasear y relajarse. Además, Ostende es famosa por sus servicios de calidad, incluyendo chiringuitos y restaurantes que ofrecen deliciosos platos de la gastronomía local, destacando especialmente los mariscos y pescados frescos. Con un ambiente familiar y acogedor, la Playa de Ostende es perfecta para quienes buscan un día de descanso junto al mar, en un entorno pintoresco y lleno de encanto.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$region = 'cantabria'; 
$targeta = './localidades/index.php';?>


<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<h2 id="cantabria" class="text-2xl md:text-3xl font-bold text-center text-<?= $color_page; ?>-800 mb-6">
  Cantabria
</h2>
<details class="group bg-<?= $color_page; ?>-50 border border-<?= $color_page; ?>-300 rounded-md p-4 w-full mx-auto my-4 shadow-sm">
  <summary class="cursor-pointer text-<?= $color_page; ?>-800 font-semibold text-lg flex items-center justify-between">
    <div class="flex items-center gap-2">
      <!-- Icono SEO (lupa o gráfico) -->
      <svg class="w-6 h-6 text-<?= $color_page; ?>-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5a7 7 0 017 7c0 1.657-.672 3.157-1.758 4.242l4.536 4.536a1 1 0 01-1.414 1.414l-4.536-4.536A7 7 0 1111 5z" />
      </svg>
      <span><?= $localidad_nombre; ?></span>
    </div>
    <!-- Flecha -->
    <svg class="w-5 h-5 text-<?= $color_page; ?>-600 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
    </svg>
  </summary>

  <div class="mt-4 text-sm text-<?= $color_page; ?>-900 leading-relaxed">

<?php

include $targeta; ?>




<?php /*
$carpeta = 'playadesomoloredo';
$localidad_nombre = 'Playa de Somo';
$localidad = 'Playa de Somo';
$archivo_name = 'somo-loredo-somo';
$presentacion = 'Somo es una popular localidad costera situada en Cantabria, al norte de España. Conocida por su extensa playa de arena dorada, la Playa de Somo es un destino destacado para los amantes del surf y las actividades acuáticas. Esta playa ofrece un ambiente vibrante y una amplia gama de servicios, incluyendo restaurantes, bares y tiendas. Además de su atractivo costero, Somo cuenta con un entorno natural impresionante, con vistas al Mar Cantábrico y a la ciudad de Santander. Es el lugar perfecto para disfrutar de la playa, el sol y una rica gastronomía basada en productos frescos del mar.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';
include $targeta; */
?>

<?php 
/*
$carpeta = 'playadenoja';
$localidad_nombre = 'Playa de Noja';
$localidad = 'Playa de Noja';
$archivo_name = 'noja';
$presentacion = 'Noja es un encantador municipio costero situado en la región de Cantabria, al norte de España. Conocido por sus hermosas playas de arena fina, como Playa de Ris y Playa de Trengandín, Noja es un popular destino turístico, especialmente en verano. Además de su atractivo natural, la localidad cuenta con un rico patrimonio cultural, que incluye iglesias históricas y palacetes, así como una oferta gastronómica que destaca por los mariscos y pescados frescos. 
                Es un lugar ideal para disfrutar de la naturaleza, el mar, y la tranquilidad en un entorno pintoresco.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php';
include $targeta; */?>

<?php /*
$carpeta = 'playadeberria';
$localidad_nombre = 'Playa de Berria';
$localidad = 'Playa de Berria';
$archivo_name = 'berria-santona';
$presentacion = 'La Playa de Berria, ubicada en Santoña, Cantabria, es un hermoso tramo de arena dorada que se extiende por casi 2 kilómetros entre el Monte Buciero y el estuario de Treto. Con sus aguas cristalinas y su entorno natural protegido, es un destino perfecto para quienes buscan disfrutar del surf, paseos relajantes, o simplemente conectar con la naturaleza.<br>Esta playa, de gran valor ecológico, es un paraíso tanto para los amantes del mar como para aquellos que buscan un rincón tranquilo en la costa cantábrica.';
include $targeta; */?>


<?php /*
$carpeta = 'playadelaredo';
$localidad_nombre = 'Playa de Laredo';
$localidad = 'Playa de Laredo';
$archivo_name = 'laredo';
$presentacion = 'La Playa de Laredo, también conocida como La Salvé, es una de las joyas de la costa cántabra. Con sus más de 4 kilómetros de arena fina y dorada, es el destino perfecto para disfrutar del sol, el mar y actividades al aire libre. Esta amplia playa ofrece un entorno ideal tanto para familias como para amantes de los deportes acuáticos, con su mar tranquilo y un paseo marítimo lleno de vida.<br> Ven y descubre por qué la Playa de Laredo es uno de los destinos más apreciados del norte de España.';
include $targeta; */?>

<?php /*
$carpeta = 'playadeisla';
$localidad_nombre = 'Playa de Isla';
$localidad = 'Playa de Isla';
$archivo_name = 'isla';
$presentacion = 'La Playa de Isla, ubicada en la encantadora localidad de Isla en Cantabria, es un paraíso natural que combina belleza y tranquilidad. Con su extensa franja de arena dorada y aguas cristalinas, es el lugar ideal para relajarse y disfrutar del sol. Su entorno virgen, rodeado de dunas y vegetación, ofrece un refugio perfecto para quienes buscan escapar del bullicio. Ideal tanto para familias como para los amantes de la naturaleza, la Playa de Isla es un destino que promete unas vacaciones inolvidables.';
include $targeta; */?>


<?php /*
$carpeta = 'playadesuances';
$localidad_nombre = 'Playa de Suances';
$localidad = 'Playa de Suances';
$archivo_name = 'suances';
$presentacion = 'La Playa de Suances, situada en el corazón de Cantabria, es un rincón costero que combina la belleza natural con un ambiente acogedor.<br> Conocida por su arena dorada y sus aguas limpias, esta playa es un destino perfecto para disfrutar de un día en familia o practicar deportes acuáticos. Rodeada de impresionantes paisajes y con un paseo marítimo lleno de vida, Suances ofrece una experiencia costera única, donde la tranquilidad y la diversión se encuentran a partes iguales.';
include 'localidades/index.php'; */?>

<?php  /*
$carpeta = 'playadesardinero';
$localidad_nombre = 'Playa del Sardinero, Santander';
$localidad = 'Playa del Sardinero, Santander';
$archivo_name = 'playa-de-sardinero';
$presentacion = 'La Playa de Santander, ubicada en la ciudad del mismo nombre en Cantabria, es una de las playas urbanas más emblemáticas del norte de España. Con su extensa franja de arena dorada y aguas tranquilas, es el lugar ideal para disfrutar de un día de sol y mar. Además de su belleza natural, ofrece un vibrante paseo marítimo con una variedad de restaurantes, bares y tiendas. Perfecta para familias, bañistas y quienes buscan disfrutar del surf, la Playa de Santander combina el encanto de una playa clásica con la comodidad de la proximidad urbana.';
include 'localidades/index.php'; */?>

<?php
/*
$carpeta = 'castrourdiales';
$localidad_nombre = 'Castro Urdiales';
$localidad = 'Castro Urdiales';
$archivo_name = 'playa-de-castrourdiales';
$presentacion = 'La realidad histórica es que Castro Urdiales tiene una fundación romana documentada en el año 74 a.C.,
                  cuando fue establecida como "Flaviobriga" por el emperador Vespasiano. Esta ciudad romana se convirtió
                  en un importante puerto y centro comercial debido a su estratégica ubicación costera.'; 
include 'localidades/index.php';*/?>


  </div>

</details>


<div class="row">
    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">  
        <?php require $publicidad; ?>
    </div>
</div>