<!-- $lugares de Interés en Muskiz -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de La Arena',
      'slug'   => 'playa-de-la-arena',
      'imagen' => 'playa-de-la-arena.jpg',
      'alt'    => 'Playa de La Arena en Muskiz',
      'fuente' => 'bizkaia.eus',
      'web_imagen' => 'https://www.bizkaia.eus/playa-de-la-arena',
      'desc'   => 'Amplia playa de arena fina con servicios para familias y deportes acuáticos.',
    ],
    [
      'nombre' => 'Torre de Muskiz',
      'slug'   => 'torre-de-muskiz',
      'imagen' => 'torre-de-muskiz.jpg',
      'alt'    => 'Torre histórica de Muskiz',
      'fuente' => 'muskiz.eus',
      'web_imagen' => 'https://www.muskiz.eus/torre',
      'desc'   => 'Antigua torre medieval emblemática con historia y visitas guiadas.',
    ],
    [
      'nombre' => 'Ruta Senderista Muskiz - Punta Lucero',
      'slug'   => 'ruta-senderista-muskiz-punta-lucero',
      'imagen' => 'ruta-muskiz-punta-lucero.jpg',
      'alt'    => 'Ruta senderista en Muskiz hasta Punta Lucero',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/muskiz-punta-lucero',
      'desc'   => 'Ruta natural con vistas al mar y a la costa vizcaína, ideal para caminantes.',
    ],
    [
      'nombre' => 'Parque Ecológico de Muskiz',
      'slug'   => 'parque-ecologico-muskiz',
      'imagen' => 'parque-ecologico.jpg',
      'alt'    => 'Parque Ecológico de Muskiz',
      'fuente' => 'muskiz.eus',
      'web_imagen' => 'https://www.muskiz.eus/parque-ecologico',
      'desc'   => 'Espacio natural protegido con senderos y zonas de picnic para toda la familia.',
    ],
  ];
?>
<?php 
$parrafo = "Muskiz, en Bizkaia, es un destino que combina historia, naturaleza y playas. Desde la Playa de La Arena hasta la Torre de Muskiz, cada lugar ofrece una experiencia única para los visitantes. Ideal para familias y amantes del senderismo, Muskiz es perfecto para disfrutar de la costa vasca.";
require PATH_RAIZ_ESTRUCTURA_PAGINAS_LOCALIDAD . '/print-cards-lugares-interes.php'; ?>
