<?php 
$header = [
  "titulo" => "⚓ Puerto de Santoña",
  "descripcion" => "Puerto pesquero y turístico de Santoña, famoso por su actividad marinera y productos del mar"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Puerto de Santoña</strong> es uno de los puertos más emblemáticos de Cantabria, conocido por su intensa actividad pesquera y por la venta de pescado y marisco fresco.",
    "Es un lugar perfecto para pasear, observar la vida marinera y disfrutar de la gastronomía local en sus restaurantes y bares.",
    "El puerto combina tradición y turismo, ofreciendo un entorno pintoresco con embarcaciones, lonjas y paseos marítimos con vistas al Cantábrico.",
    "Una visita ideal para quienes desean conocer la cultura pesquera, degustar productos frescos y disfrutar del ambiente costero."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-santona-barcos.jpg",
        "alt" => "Barcos pesqueros en el Puerto de Santoña",
        "caption" => "Embarcaciones en el puerto",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/paseo-puerto-santona.jpg",
        "alt" => "Paseo marítimo del Puerto de Santoña",
        "caption" => "Paseo marítimo con vistas al Cantábrico",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/YOUR_VIDEO_ID", // reemplaza con ID real si hay
      "titulo" => "Video del Puerto de Santoña"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/lonja-puerto-santona.jpg",
        "alt" => "Lonja del Puerto de Santoña",
        "caption" => "Lonja de pescado fresco",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/bares-puerto-santona.jpg",
        "alt" => "Bares y restaurantes en el Puerto de Santoña",
        "caption" => "Gastronomía local frente al mar",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/atardecer-puerto-santona.jpg",
        "alt" => "Atardecer en el Puerto de Santoña",
        "caption" => "Puesta de sol sobre el puerto",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Puerto de Santoña",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Santoña - Cantabria"
    ],
    [
      "icono" => "⚓",
      "titulo" => "Actividad principal",
      "descripcion" => "Pesca, embarcaciones y venta de pescado fresco"
    ],
    [
      "icono" => "🍽️",
      "titulo" => "Gastronomía",
      "descripcion" => "Restaurantes especializados en pescado y marisco"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Embarcaciones, lonja, paseo marítimo, bares y miradores"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "⚓ Actividades en el Puerto de Santoña",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Paseos por el puerto y el paseo marítimo" ],
    [ "icono" => "📸", "texto" => "Fotografía de barcos, lonja y paisaje costero" ],
    [ "icono" => "🍴", "texto" => "Degustar pescado y marisco fresco en restaurantes locales" ],
    [ "icono" => "🛥️", "texto" => "Observación de la actividad pesquera y embarcaciones" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puerto-santona",
    "centro" => [43.4660, -3.5205],   // Latitud, Longitud aproximadas del Puerto de Santoña
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4660, -3.5205],
        "popup"  => "<strong>Puerto de Santoña</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 66 00 50",
    "enlace" => "tel:+34942660050" // Oficina de Turismo de Santoña
  ],
  "web"      => [
    "texto" => "www.santona.es",
    "url"   => "https://www.santona.es"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Ana L.",
        "texto"  => "Un puerto con mucho encanto, ideal para pasear y disfrutar del ambiente marinero."
    ],
    [
        "nombre" => "Javier R.",
        "texto"  => "El pescado y marisco fresco de los restaurantes es espectacular."
    ],
    [
        "nombre" => "Marcos T.",
        "texto"  => "Muy pintoresco y con rincones perfectos para fotografiar."
    ],
    [
        "nombre" => "Lucía P.",
        "texto"  => "Me encanta pasear por el puerto y ver la actividad de los barcos pesqueros."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4660&lon=-3.5205&zoom=10"; 
?>
