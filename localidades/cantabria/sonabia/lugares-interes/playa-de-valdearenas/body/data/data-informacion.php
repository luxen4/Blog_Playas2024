<?php 
$header = [
  "titulo" => "🏖️ Playa de Valdearenas en Sonabia",
  "descripcion" => "Playa virgen y tranquila de Sonabia, ideal para el relax, baños y paseos junto al mar Cantábrico"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Playa de Valdearenas</strong> en Sonabia es un arenal tranquilo, rodeado de acantilados y naturaleza, perfecta para quienes buscan paz y contacto directo con el mar.",
    "Es un lugar ideal para bañistas, paseos a pie y para disfrutar de la belleza del litoral cántabro alejado de la masificación.",
    "La playa cuenta con acceso desde caminos señalizados y se caracteriza por su arena dorada, aguas limpias y entorno natural protegido.",
    "Una escapada perfecta para desconectar, tomar el sol y practicar fotografía de paisajes marinos."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-valdearenas-sonabia.jpg",
        "alt" => "Vista panorámica de la Playa de Valdearenas en Sonabia",
        "caption" => "Playa de Valdearenas",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-valdearenas.jpg",
        "alt" => "Acantilados que rodean la Playa de Valdearenas",
        "caption" => "Acantilados y entorno natural",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/YOUR_VIDEO_ID", // reemplaza con ID real si existe
      "titulo" => "Video de la Playa de Valdearenas"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/arena-playa-valdearenas.jpg",
        "alt" => "Arena dorada en la Playa de Valdearenas",
        "caption" => "Arena fina y dorada",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/olas-playa-valdearenas.jpg",
        "alt" => "Olas del Cantábrico en la Playa de Valdearenas",
        "caption" => "Olas y mar abierto",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-playa-valdearenas.jpg",
        "alt" => "Sendero natural que lleva a la Playa de Valdearenas",
        "caption" => "Acceso natural a la playa",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Valdearenas",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Sonabia, Cantabria"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Arena dorada, entorno natural y acantilados"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Servicios",
      "descripcion" => "Playa virgen, acceso natural, sin chiringuitos"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Actividades",
      "descripcion" => "Baño, paseos, fotografía, relajación y observación de fauna marina"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Actividades en la Playa de Valdearenas",
  "items"  => [
    [ "icono" => "🏊‍♂️", "texto" => "Bañarse en aguas del Cantábrico" ],
    [ "icono" => "🚶‍♂️", "texto" => "Paseos por la playa y acantilados cercanos" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes, mar y fauna costera" ],
    [ "icono" => "🧘‍♀️", "texto" => "Relax y desconexión en entorno natural" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-valdearenas",
    "centro" => [43.4510, -3.5200],   // Latitud, Longitud aproximadas de la Playa de Valdearenas
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4510, -3.5200],
        "popup"  => "<strong>Playa de Valdearenas - Sonabia</strong>"
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
        "nombre" => "Sara L.",
        "texto"  => "Playa tranquila y preciosa, perfecta para desconectar del bullicio."
    ],
    [
        "nombre" => "Miguel R.",
        "texto"  => "Ideal para pasear y disfrutar de la naturaleza."
    ],
    [
        "nombre" => "Elena F.",
        "texto"  => "Arena fina y aguas limpias, un entorno natural increíble."
    ],
    [
        "nombre" => "Jorge P.",
        "texto"  => "Un lugar virgen y muy bien cuidado, muy recomendable."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4510&lon=-3.5200&zoom=10"; 
?>
