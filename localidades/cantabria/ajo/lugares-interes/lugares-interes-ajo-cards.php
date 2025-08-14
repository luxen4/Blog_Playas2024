<!-- Lugares de Interés en ajo -->

<?php
$lugares_interes = [
  [
    'nombre' => 'Faro de Cabo de Ajo',
    'slug'   => 'faro-de-cabo-de-ajo',
    'imagen' => 'faro-de-cabo-de-ajo.jpg',
    'alt'    => 'Faro de Cabo de Ajo',
    'fuente' => 'farodelcaballo.es',
    'web_imagen' => 'https://farodelcaballo.es/faro-de-ajo-como-llegar/',
    'desc'   => 'El faro más colorido de España, con vistas únicas al Cantábrico.',
  ],
  [
    'nombre' => 'Playa de Cuberris',
    'slug'   => 'playa-de-cuberris',
    'imagen' => 'playa-de-cuberris-ajo-cantabria-1.jpg',
    'alt'    => 'Playa de Cuberris',
    'fuente' => 'www.escapadarural.com',
    'web_imagen' => 'https://www.escapadarural.com/que-hacer/ajo/playa-de-cuberris',
    'desc'   => 'Una playa amplia ideal para surf y familias, rodeada de naturaleza.',
  ],
  [
    'nombre' => 'Playa de Antuerta',
    'slug'   => 'playa-de-antuerta',
    'imagen' => 'playa-de-antuerta-ajo-cantabria-1.jpg',
    'alt'    => 'Playa de Antuerta',
    'fuente' => 'turismodecantabria.com',
    'web_imagen' => 'https://turismodecantabria.com/playas/playa-de-antuerta/',
    'desc'   => 'Playa virgen de arena dorada y entorno natural protegido, ideal para desconectar y disfrutar del mar.',
  ],
  [
    'nombre' => 'Acantilados de Cabo de Ajo',
    'slug'   => 'acantilados-de-cabo-de-ajo',
    'imagen' => 'acantilados-de-cabo-de-ajo.jpg',
    'alt'    => 'Acantilados de Cabo de Ajo',
    'fuente' => 'yendoporlavida.com',
    'web_imagen' => 'https://yendoporlavida.com/ruta-faro-de-ajo-la-ojerada/',
    'desc'   => 'Impresionantes formaciones rocosas con vistas al mar Cantábrico.',
  ],
  [
    'nombre' => 'Ruta de la Costa Oriental',
    'slug'   => 'ruta-de-la-costa-oriental',
    'imagen' => 'ruta-de-la-costa-oriental.jpg',
    'alt'    => 'Ruta de la Costa Oriental',
    'fuente' => 'lossaltapraos.blogspot.com',
    'web_imagen' => 'https://lossaltapraos.blogspot.com/2019/05/costa-de-ajo-circular.html',
    'desc'   => 'Sendero costero ideal para caminatas junto al mar y acantilados.',
  ]
];
?>
<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en <?= LUGAR ?></h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Ajo.</p>
  </div>
  <?php require PATH_RAIZ_ESTRUCTURA_PAGINAS_LOCALIDAD . '/print-cards-lugares-interes.php'; ?>
</section>
