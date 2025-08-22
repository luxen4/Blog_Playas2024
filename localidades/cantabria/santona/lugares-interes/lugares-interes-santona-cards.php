<!-- $lugares de Interés en Santoña -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de Berria',
      'slug'   => 'playa-de-berria',
      'imagen' => 'playa-de-berria-santona-cantabria-1.jpg',
      'alt'    => 'Playa de Berria',
      'fuente' => 'turismodecantabria.com',
      'web_imagen' => 'https://turismodecantabria.com/disfrutala/playas/51-playa-de-berria',
      'desc'   => 'Amplia playa de arena fina, muy popular entre surfistas y amantes del mar.',
    ],
    [
      'nombre' => 'Monte Buciero',
      'slug'   => 'monte-buciero',
      'imagen' => 'monte-buciero-santona-cantabria-1.jpg',
      'alt'    => 'Monte Buciero',
      'fuente' => 'cantabriarural.com',
      'web_imagen' => 'https://www.cantabriarural.com/lugares-de-interes/ruta-del-monte-buciero.html',
      'desc'   => 'Parque natural con rutas de senderismo, vistas espectaculares y naturaleza salvaje.',
    ],
    [
      'nombre' => 'Faro del Caballo',
      'slug'   => 'faro-del-caballo',
      'imagen' => 'faro-del-caballo-santona-cantabria-1.jpg',
      'alt'    => 'Faro del Caballo',
      'fuente' => 'apartamentoscostaesmeralda.com',
      'web_imagen' => 'https://apartamentoscostaesmeralda.com/el-faro-de-santona/',
      'desc'   => 'Faro histórico al que se accede por más de 700 escalones tallados en la roca.',
    ],
    [
      'nombre' => 'Puerto de Santoña',
      'slug'   => 'puerto-de-santona',
      'imagen' => 'puerto-de-santona-santona-cantabria-1.jpg',
      'alt'    => 'Puerto de Santoña',
      'fuente' => 'anden-27.blogspot.com',
      'web_imagen' => 'https://anden-27.blogspot.com/2017/04/escapada-santona.html',
      'desc'   => 'Corazón pesquero y comercial de la villa, famoso por sus anchoas.',
    ],
  ];
?>
<?php 
$parrafo = "Santoña, en Cantabria, es un destino que destaca por su rica historia, sus playas y su entorno natural. Desde la Playa de Berria hasta el Faro del Caballo, cada lugar ofrece una experiencia única para los visitantes. Disfruta de su gastronomía, especialmente las famosas anchoas, y de sus paisajes costeros.";
require PATH_RAIZ_ESTRUCTURA_PAGINAS_LOCALIDAD . '/print-cards-lugares-interes.php'; ?>
