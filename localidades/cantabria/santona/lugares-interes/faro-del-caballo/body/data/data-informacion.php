<?php 
$header = [
  "titulo" => "🌊 Faro del Caballo en Santoña",
  "descripcion" => "Faro emblemático en los acantilados del Monte Buciero, con vistas al mar Cantábrico"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Faro del Caballo</strong> se encuentra en el extremo del Monte Buciero en Santoña, sobre impresionantes acantilados que dominan el Cantábrico.",
    "Se trata de un lugar ideal para disfrutar de vistas panorámicas, senderismo y fotografía, accesible a través de rutas que recorren el monte y sus miradores naturales.",
    "El faro es un punto de referencia histórico y turístico, perfecto para excursiones de día y para contemplar la costa cántabra desde altura.",
    "Una visita imprescindible para los amantes de la naturaleza, el mar y la tranquilidad."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/faro-del-caballo-santona-vista.jpg",
        "alt" => "Vista del Faro del Caballo en Santoña",
        "caption" => "Faro del Caballo sobre los acantilados",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-faro-del-caballo.jpg",
        "alt" => "Sendero hacia el Faro del Caballo",
        "caption" => "Ruta de acceso al faro",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/YOUR_VIDEO_ID", // reemplaza con ID real si hay
      "titulo" => "Video del Faro del Caballo"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-faro-del-caballo.jpg",
        "alt" => "Acantilados junto al Faro del Caballo",
        "caption" => "Acantilados y mar Cantábrico",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/faro-del-caballo-cerca.jpg",
        "alt" => "Faro del Caballo de cerca",
        "caption" => "Detalle del faro",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puesta-sol-faro-del-caballo.jpg",
        "alt" => "Atardecer en el Faro del Caballo",
        "caption" => "Puesta de sol desde el faro",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Faro del Caballo",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Monte Buciero, Santoña - Cantabria"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Acceso",
      "descripcion" => "Sendero señalizado desde Santoña, ida y vuelta aprox. 4 km"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Entorno",
      "descripcion" => "Acantilados, mar abierto y miradores naturales"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Faro, vistas panorámicas, rutas de senderismo y fauna costera"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏞️ Actividades en el Faro del Caballo",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Senderismo hasta el faro y por el Monte Buciero" ],
    [ "icono" => "📸", "texto" => "Fotografía de acantilados, mar y fauna" ],
    [ "icono" => "🌅", "texto" => "Contemplar amaneceres y atardeceres sobre el Cantábrico" ],
    [ "icono" => "🦅", "texto" => "Observación de aves marinas y flora autóctona" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-faro-del-caballo",
    "centro" => [43.4675, -3.5200],   // Latitud, Longitud aproximadas del Faro del Caballo
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4675, -3.5200],
        "popup"  => "<strong>Faro del Caballo - Santoña</strong>"
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
        "nombre" => "Laura P.",
        "texto"  => "Sendero espectacular y vistas de infarto desde el faro."
    ],
    [
        "nombre" => "Carlos M.",
        "texto"  => "Un lugar mágico para fotografiar los acantilados y el Cantábrico."
    ],
    [
        "nombre" => "Sofía R.",
        "texto"  => "Ideal para una excursión de medio día, muy bien señalizado."
    ],
    [
        "nombre" => "Andrés L.",
        "texto"  => "Las panorámicas desde el faro son impresionantes, recomiendo ir temprano."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4675&lon=-3.5200&zoom=10"; 
?>
