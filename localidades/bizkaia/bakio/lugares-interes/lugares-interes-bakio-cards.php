<!-- $lugares de Interés en Bakio -->

<?php 
  $lugares_interes = [
    [
      'nombre' => 'Playa de Bakio',
      'slug'   => 'playa-de-bakio',
      'imagen' => 'playa-de-bakio-bizkaia-1.jpg',
      'alt'    => 'Playa de Bakio',
      'fuente' => 'mapas.uribe.eu',
      'web_imagen' => 'https://mapas.uribe.eu/es/bakio/resource/r/bakio#1755461765660',
      'desc'   => 'Amplia playa de arena fina, ideal para surfistas y familias, con vistas a las montañas. ',
    ],
    [
      'nombre' => 'San Juan de Gaztelugatxe',
      'slug'   => 'san-juan-de-gaztelugatxe',
      'imagen' => 'san-juan-de-gaztelugatxe-bakio-bizkaia-1.jpg',
      'alt'    => 'San Juan de Gaztelugatxe',
      'fuente' => 'tourspain.es',
      'web_imagen' => 'https://tourspain.es/san-juan-de-gaztelugatxe/',
      'desc'   => 'Pequeña isla con una ermita y escalinata emblemática, famosa por su belleza y cultura. ',
    ],
    [
      'nombre' => 'Monte Serantes',
      'slug'   => 'monte-serantes',
      'imagen' => 'monte-serantes-bakio.jpg',
      'alt'    => 'Monte Serantes',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/monte-serantes-1234567',
      'desc'   => 'Sendero popular para realizar excursiones con vistas panorámicas de la costa y Bakio.',
    ],
    [
      'nombre' => 'Surf en Bakio',
      'slug'   => 'surf-en-bakio',
      'imagen' => 'surf-bakio.jpg',
      'alt'    => 'Surf en Bakio',
      'fuente' => 'surfbakio.com',
      'web_imagen' => 'https://surfbakio.com/',
      'desc'   => 'Bakio es uno de los mejores puntos para practicar surf en Bizkaia, con escuelas y alquileres.',
    ],
  ];
?>
<?php 
$parrafo = "Bakio, en Bizkaia, es un destino costero que destaca por su hermosa playa, el icónico San Juan de Gaztelugatxe y sus rutas de senderismo. Ideal para surfistas y amantes de la naturaleza, ofrece una experiencia única en la costa vasca.";
require PATH_RAIZ_ESTRUCTURA_PAGINAS_LOCALIDAD . '/print-cards-lugares-interes.php'; ?>
