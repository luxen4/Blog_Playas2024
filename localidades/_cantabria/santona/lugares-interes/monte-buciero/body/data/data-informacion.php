<?php 
$header = [
  "titulo" => "⛰️ Monte Buciero en Santoña",
  "descripcion" => "Parque natural con rutas de senderismo y vistas panorámicas de Santoña y el mar Cantábrico"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Monte Buciero</strong> en Santoña es un enclave natural protegido que ofrece rutas de senderismo con espectaculares vistas del Cantábrico y de la villa de Santoña.",
    "Combina acantilados, bosques y playas, ideal para amantes de la naturaleza, la fotografía y la observación de aves.",
    "Sus caminos permiten descubrir la fauna y flora autóctona, así como restos históricos, como antiguas fortificaciones y caminos militares.",
    "Una excursión perfecta para desconectar, practicar deporte al aire libre y disfrutar de panorámicas impresionantes sobre la costa."
  ],
  "imagenes" => [
    [
        "src" => "https://turtletrack.net/wp-content/uploads/2022/07/DSC05634-Editar_1.jpg",
        "alt" => "Vistas panorámicas desde el Monte Buciero en Santoña",
        "caption" => "Panorámica desde el Monte Buciero",
        "fuente" => "https://turtletrack.net/rutas/monte-buciero/",
        "fuente_texto" => "turtletrack.net"
    ],
    [
        "src" => "https://turtletrack.net/wp-content/uploads/2022/07/DSC05651-Editar_1.jpg",
        "alt" => "Sendero de trekking en el Monte Buciero de Santoña",
        "caption" => "Ruta de senderismo",
        "fuente" => "https://turtletrack.net/rutas/monte-buciero/",
        "fuente_texto" => "turtletrack.net"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/Qr2JjVhnOqk", // reemplaza con ID real si existe
      "titulo" => "Video del Monte Buciero en Santoña"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://imanesdeviaje.com/wp-content/uploads/2020/06/acantilados-monte-buciero.jpg",
        "alt" => "Acantilados del Monte Buciero en Santoña",
        "caption" => "Acantilados sobre el Cantábrico",
        "fuente" => "https://imanesdeviaje.com/faro-del-caballo-santona/",
        "fuente_texto" => "imanesdeviaje.com"
    ],
    [
        "src" => "https://gataconbotas.com/wp-content/uploads/2020/09/RB_200828_monte_buciero_portada-1.jpg",
        "alt" => "Flora autóctona del Monte Buciero en Santoña",
        "caption" => "Flora autóctona",
        "fuente" => "https://gataconbotas.com/monte-buciero-y-faro-del-caballo/",
        "fuente_texto" => "gataconbotas.com"
    ],
    [
        "src" => "https://s1.wklcdn.com/image_28/861980/5080178/2616505.700x525.jpg",
        "alt" => "Vista de la playa desde el Monte Buciero en Santoña",
        "caption" => "Vista panorámica de la playa desde el Monte Buciero",
        "fuente" => "https://ca.wikiloc.com/rutes-senderisme/circular-monte-buciero-i-santona-5080176",
        "fuente_texto" => "wikiloc.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Monte Buciero",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Santoña - Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Rutas de senderismo entre 3 y 10 km"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Dificultad",
      "descripcion" => "Baja - Moderada, apta para la mayoría de caminantes"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Acantilados, miradores, restos históricos, playas y fauna local"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏞️ Actividades en el Monte Buciero",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Senderismo y rutas circulares" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes, acantilados y fauna" ],
    [ "icono" => "🦅", "texto" => "Observación de aves marinas y flora autóctona" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de atardeceres sobre Santoña y el Cantábrico" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-monte-buciero-santona",
    "centro" => [43.4625, -3.5160],   // Latitud, Longitud aproximadas del Monte Buciero en Santoña
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4625, -3.5160],
        "popup"  => "<strong>Monte Buciero - Santoña</strong>"
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
        "nombre" => "Lucía H.",
        "texto"  => "Senderos muy bonitos y vistas impresionantes del mar Cantábrico."
    ],
    [
        "nombre" => "Pablo M.",
        "texto"  => "Ideal para caminar y desconectar, con rincones increíbles para fotografiar."
    ],
    [
        "nombre" => "Marta F.",
        "texto"  => "Perfecto para un día de excursión en familia o con amigos."
    ],
    [
        "nombre" => "Diego S.",
        "texto"  => "Rutas variadas y accesibles, con paisajes muy bonitos."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4625&lon=-3.5160&zoom=10"; 
?>
