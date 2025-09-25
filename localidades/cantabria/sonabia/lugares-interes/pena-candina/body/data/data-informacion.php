<?php 
$header = [
  "titulo" => "⛰️ Peña Candina en Sonabia",
  "descripcion" => "Mirador natural en Sonabia con vistas panorámicas del mar Cantábrico y la costa de Cantabria"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Peña Candina</strong> en Sonabia es un mirador natural que ofrece vistas impresionantes del mar Cantábrico, la Playa de Valdearenas y los acantilados circundantes.",
    "Ideal para senderismo, fotografía y contemplación del paisaje costero, Peña Candina combina naturaleza, altura y tranquilidad.",
    "El acceso es a través de senderos señalizados que permiten disfrutar de la flora autóctona y la fauna local mientras se asciende hasta el mirador.",
    "Una excursión perfecta para desconectar, realizar deporte al aire libre y admirar panorámicas únicas del litoral cántabro."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/pena-candina-vista.jpg",
        "alt" => "Vista panorámica desde Peña Candina en Sonabia",
        "caption" => "Panorámica desde Peña Candina",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-pena-candina.jpg",
        "alt" => "Sendero hacia Peña Candina en Sonabia",
        "caption" => "Ruta de acceso al mirador",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/YOUR_VIDEO_ID", // reemplaza con ID real si hay
      "titulo" => "Video de Peña Candina"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-pena-candina.jpg",
        "alt" => "Acantilados vistos desde Peña Candina",
        "caption" => "Acantilados y mar Cantábrico",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/flora-pena-candina.jpg",
        "alt" => "Flora autóctona en Peña Candina",
        "caption" => "Flora autóctona",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puesta-sol-pena-candina.jpg",
        "alt" => "Puesta de sol desde Peña Candina",
        "caption" => "Atardecer sobre el Cantábrico",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de Peña Candina",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Sonabia - Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Distancia",
      "descripcion" => "Senderos entre 2 y 5 km según ruta"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Dificultad",
      "descripcion" => "Baja a moderada, accesible para la mayoría de caminantes"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Mirador, acantilados, playa Valdearenas, flora y fauna local"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏞️ Actividades en Peña Candina",
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
    "map_id" => "map-pena-candina",
    "centro" => [43.4520, -3.5220],   // Latitud, Longitud aproximadas de Peña Candina
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4520, -3.5220],
        "popup"  => "<strong>Peña Candina - Sonabia</strong>"
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
        "nombre" => "Raúl G.",
        "texto"  => "Mirador espectacular con vistas al Cantábrico y la playa Valdearenas."
    ],
    [
        "nombre" => "Natalia P.",
        "texto"  => "Perfecto para una excursión corta y disfrutar de la naturaleza."
    ],
    [
        "nombre" => "Eduardo M.",
        "texto"  => "Senderos muy cuidados y vistas impresionantes desde lo alto."
    ],
    [
        "nombre" => "Clara L.",
        "texto"  => "Ideal para fotografiar el mar y los acantilados en calma."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4520&lon=-3.5220&zoom=10"; 
?>
