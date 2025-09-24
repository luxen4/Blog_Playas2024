<?php 
$header = [
  "titulo" => "🏰 Castillo de Santa Ana",
  "descripcion" => "Castillo histórico en Castro-Urdiales con vistas al puerto y la costa cantábrica"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Castillo de Santa Ana</strong>, situado en <span class='font-semibold'>Castro-Urdiales</span>, 
    es una fortaleza emblemática que domina la villa y ofrece vistas panorámicas del puerto y la costa cántabra.",

    "Construido en época medieval y restaurado parcialmente, el castillo combina historia, arquitectura defensiva y un entorno natural privilegiado.",

    "Ideal para quienes disfrutan de la <strong>historia</strong>, la <strong>fotografía</strong> y el <strong>turismo cultural</strong> en espacios históricos.",

    "Un lugar imprescindible para conocer la tradición y el patrimonio de Castro-Urdiales, además de disfrutar de su localización junto al mar."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/castillo-santa-ana-castro-urdiales-1.jpg",
        "alt" => "Vista exterior del Castillo de Santa Ana en Castro-Urdiales",
        "caption" => "Castillo de Santa Ana",
        "fuente" => "https://www.turismocastro-urdiales.com/castillo-santa-ana",
        "fuente_texto" => "turismocastro-urdiales.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/castillo-santa-ana-castro-urdiales-2.jpg",
        "alt" => "Detalle de murallas y torre del Castillo de Santa Ana",
        "caption" => "Murallas y torre del castillo",
        "fuente" => "",
        "fuente_texto" => ""
    ],
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/castillo-santa-ana-castro-urdiales-1.jpg",
        "alt" => "Vista exterior del Castillo de Santa Ana en Castro-Urdiales",
        "caption" => "Castillo de Santa Ana",
        "fuente" => "https://www.turismocastro-urdiales.com/castillo-santa-ana",
        "fuente_texto" => "turismocastro-urdiales.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/castillo-santa-ana-castro-urdiales-2.jpg",
        "alt" => "Detalle de murallas y torre del Castillo de Santa Ana",
        "caption" => "Murallas y torre del castillo",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/castillo-santa-ana-castro-urdiales-3.jpg",
        "alt" => "Panorámica del Castillo de Santa Ana sobre el puerto de Castro-Urdiales",
        "caption" => "Castillo sobre el puerto",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información del Castillo",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Castro-Urdiales, Cantabria, con vistas al puerto y la costa"
    ],
    [
      "icono" => "🏰",
      "titulo" => "Época",
      "descripcion" => "Siglo XIV-XV, fortaleza medieval"
    ],
    [
      "icono" => "🛡️",
      "titulo" => "Estado",
      "descripcion" => "Restaurado parcialmente, visitas guiadas disponibles"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Murallas, torre defensiva, historia local y panorámicas del puerto"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏰 Actividades en el Castillo de Santa Ana",
  "items"  => [
    [ "icono" => "📜", "texto" => "Recorridos guiados por la historia del castillo" ],
    [ "icono" => "🏛️", "texto" => "Aprender sobre la arquitectura defensiva y la época medieval" ],
    [ "icono" => "📸", "texto" => "Fotografía del castillo, el puerto y las vistas panorámicas" ],
    [ "icono" => "🕯️", "texto" => "Visitas culturales y exposiciones temporales" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Actividades y visitas aptas para familias" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de los atardeceres sobre el puerto y la costa" ]
  ]
];
?>

<?php
// Configuración del mapa del Castillo de Santa Ana en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-castillo-santa-ana",
    "centro" => [43.3840, -3.2150],   // Latitud, Longitud aproximada del Castillo
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3840, -3.2150],  // Latitud, Longitud aproximada del Castillo
        "popup"  => "<strong>Castillo de Santa Ana - Castro-Urdiales</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 87 00 20", 
    "enlace" => "tel:+34942870020" // Teléfono de la oficina de turismo o recepción del castillo
  ],
  "web"      => [
    "texto" => "www.castillosantaana.es",
    "url"   => "https://www.castillosantaana.es"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Lucía M.",
        "texto"  => "Una visita impresionante, el castillo está muy bien conservado y las vistas al puerto son espectaculares."
    ],
    [
        "nombre" => "Ander P.",
        "texto"  => "Aprendimos mucho sobre la historia local y la arquitectura medieval del castillo, muy recomendable."
    ],
    [
        "nombre" => "Sofía R.",
        "texto"  => "Perfecto para una excursión familiar, los niños disfrutaron explorando los recintos y las torres."
    ],
    [
        "nombre" => "Tomás G.",
        "texto"  => "Los atardeceres desde el castillo son mágicos, un lugar imprescindible en Castro-Urdiales."
    ]
];
?>


<?php // $iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; ?>

