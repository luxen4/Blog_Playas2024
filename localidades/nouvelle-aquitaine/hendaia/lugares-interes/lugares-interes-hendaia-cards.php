<!-- $lugares de Interés en Hendaia -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa Ondarraitz',
      'slug'   => 'playa-de-ondarraitz',
      'imagen' => 'playa-de-ondarraitz-hendaia-nouvelle-aquitaine-1.jpg',
      'alt'    => 'Playa de Ondarraitz en Hendaia',
      'fuente' => 'hendaye-tourisme.fr',
      'web_imagen' => 'https://www.hendaye-tourisme.fr/plage-ondarraitz',
      'desc'   => 'Extensa playa de arena fina, perfecta para paseos, surf y actividades familiares en la costa vasco-francesa.',
    ],
    [
      'nombre' => 'Castillo Abbadia',
      'slug'   => 'castillo-abbadia',
      'imagen' => 'castillo-abbadia-hendaya-nouvelle-aquitaine-1.jpg',
      'alt'    => 'Castillo de Abbadia en Hendaia',
      'fuente' => 'abbadia.fr',
      'web_imagen' => 'https://www.abbadia.fr',
      'desc'   => 'Castillo neogótico rodeado de jardines, con impresionantes vistas al océano y rica historia científica.',
    ],
    [
      'nombre' => 'Puerto Deportivo de Hendaia',
      'slug'   => 'puerto-deportivo',
      'imagen' => 'puerto-deportivo-hendaia-nouvelle-aquitaine-1.jpg',
      'alt'    => 'Puerto deportivo de Hendaia',
      'fuente' => 'hendaye-tourisme.fr',
      'web_imagen' => 'https://www.hendaye-tourisme.fr/puerto',
      'desc'   => 'Puerto moderno con ambiente animado, ideal para pasear y disfrutar de la gastronomía local.',
    ],
    [
      'nombre' => 'Corniche Basque',
      'slug'   => 'corniche-basque',
      'imagen' => 'corniche-basque-hendaia-nouvelle-aquitaine-1.jpg',
      'alt'    => 'Corniche Basque en Hendaia',
      'fuente' => 'tourisme64.com',
      'web_imagen' => 'https://www.tourisme64.com/corniche-basque',
      'desc'   => 'Carretera costera panorámica que conecta Hendaia con San Juan de Luz, con acantilados y vistas espectaculares.',
    ],
  ];
?>
<?php $parrafo = 'Descubre los rincones más emblemáticos de Biarritz, joya de la costa atlántica francesa.'; ?>
<?php require PATH_RAIZ_ESTRUCTURA_PAGINAS_LOCALIDAD . '/print-cards-lugares-interes.php'; ?>
