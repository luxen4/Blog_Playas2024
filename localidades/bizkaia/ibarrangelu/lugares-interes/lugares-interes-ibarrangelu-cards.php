<!-- $lugares de Interés en Ibarrangelu -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de Laga',
      'slug'   => 'playa-de-laga',
      'imagen' => 'playa-de-laga-ibarrangelu-bizkaia-1.jpg',
      'alt'    => 'Playa de Laga en Ibarrangelu',
      'fuente' => 'bizkaia.eus',
      'web_imagen' => 'https://www.bizkaia.eus/playa-de-laga',
      'desc'   => 'Playa virgen ideal para surf y disfrutar de la naturaleza en el corazón de la Reserva de Urdaibai.',
    ],
    [
      'nombre' => 'Cabo Ogoño',
      'slug'   => 'cabo-ogono',
      'imagen' => 'cabo-ogono-ibarrangelu-bizkaia-1.jpg',
      'alt'    => 'Cabo Ogoño en Ibarrangelu',
      'fuente' => 'urdaibai.org',
      'web_imagen' => 'https://www.urdaibai.org/cabo-ogono',
      'desc'   => 'Mirador natural con impresionantes vistas al mar Cantábrico y la costa vasca.',
    ],
    [
      'nombre' => 'Ruta Senderista Laga-Ogoño',
      'slug'   => 'ruta-senderista-laga-ogono',
      'imagen' => 'ruta-laga-ogono-ibarrangelu-bizkaia-1.jpg',
      'alt'    => 'Ruta senderista entre Laga y Ogoño',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/laga-ogono',
      'desc'   => 'Paseo costero con panorámicas naturales y biodiversidad protegida.',
    ],
    [
      'nombre' => 'Centro de Interpretación de la Reserva de Urdaibai',
      'slug'   => 'centro-interpretacion-urdaibai',
      'imagen' => 'centro-interpretacion-ibarrangelu-bizkaia-1.jpg.jpg',
      'alt'    => 'Centro de Interpretación de la Reserva de Urdaibai',
      'fuente' => 'urdaibai.org',
      'web_imagen' => 'https://www.urdaibai.org/centro-interpretacion',
      'desc'   => 'Espacio educativo para conocer la fauna, flora y patrimonio natural de Urdaibai.',
    ],
  ];
?>
<?php 
$parrafo = "Ibarrangelu, en Bizkaia, es un destino que destaca por su belleza natural y sus impresionantes paisajes costeros. Desde la Playa de Laga hasta el Cabo Ogoño, cada lugar ofrece una experiencia única para los amantes de la naturaleza y el senderismo.";
require PATH_RAIZ_ESTRUCTURA_PAGINAS_LOCALIDAD . '/print-cards-lugares-interes.php'; ?>
