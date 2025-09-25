<?php 
$header = [
  "titulo" => "⛰️ Monte Candina en Sonabia",
  "descripcion" => "Monte con rutas de senderismo y miradores con vistas panorámicas del Cantábrico y la costa cántabra"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Monte Candina</strong> en Sonabia ofrece rutas de senderismo con vistas impresionantes al mar Cantábrico y a la playa de Valdearenas.",
    "Es un espacio natural ideal para disfrutar de la naturaleza, la fotografía y la observación de aves y flora autóctona.",
    "Los senderos permiten recorrer bosques y acantilados, descubriendo miradores naturales que regalan panorámicas espectaculares.",
    "Una excursión perfecta para desconectar, practicar deporte al aire libre y disfrutar de la costa cántabra desde altura."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/monte-candina-vista.jpg",
        "alt" => "Vista panorámica desde Monte Candina en Sonabia",
        "caption" => "Panorámica desde Monte Candina",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-monte-candina.jpg",
        "alt" => "Sendero de Monte Candina en Sonabia",
        "caption" => "Ruta de senderismo",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/YOUR_VIDEO_ID", // reemplaza con ID real si hay
      "titulo" => "Video de Monte Candina"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-monte-candina.jpg",
        "alt" => "Acantilados desde Monte Candina",
        "caption" => "Acantilados y mar Cantábrico",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/flora-monte-candina.jpg",
        "alt" => "Flora autóctona en Monte Candina",
        "caption" => "Flora autóctona",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puesta-sol-monte-candina.jpg",
        "alt" => "Puesta de sol desde Monte Candina",
        "caption" => "Atardecer sobre la costa",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Monte Candina",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Sonabia - Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Distancia",
      "descripcion" => "Senderos de 2 a 6 km según ruta"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Dificultad",
      "descripcion" => "Baja a moderada, accesible para caminantes con experiencia media"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Miradores, acantilados, playa Valdearenas, flora y fauna local"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏞️ Actividades en Monte Candina",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Senderismo y rutas circulares" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes, mar y acantilados" ],
    [ "icono" => "🌅", "texto" => "Contemplar amaneceres y atardeceres sobre la costa" ],
    [ "icono" => "🦅", "texto" => "Observación de aves marinas y flora autóctona" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-monte-candina",
    "centro" => [43.4515, -3.5225],   // Latitud, Longitud aproximadas de Monte Candina
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4515, -3.5225],
        "popup"  => "<strong>Monte Candina - Sonabia</strong>"
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
        "nombre" => "Sergio R.",
        "texto"  => "Mirador impresionante con vistas a la playa de Valdearenas."
    ],
    [
        "nombre" => "Isabel C.",
        "texto"  => "Ruta accesible y paisajes de ensueño."
    ],
    [
        "nombre" => "Antonio M.",
        "texto"  => "Senderos bien señalizados y vistas espectaculares desde la cima."
    ],
    [
        "nombre" => "Laura G.",
        "texto"  => "Ideal para excursiones de medio día en familia o con amigos."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4515&lon=-3.5225&zoom=10"; 
?>
