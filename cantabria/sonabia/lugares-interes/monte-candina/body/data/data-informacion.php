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
        "src" => "https://www.cantabriarural.com/wp-content/uploads/2018/12/Monte-Candina-B-800x533.jpg",
        "alt" => "Vista panorámica desde Monte Candina en Sonabia",
        "caption" => "Panorámica desde Monte Candina",
        "fuente" => "https://www.cantabriarural.com/lugares-de-interes/monte-candina.html",
        "fuente_texto" => "cantabriarural.com"
    ],
    [
        "src" => "https://gailurra.org/wp-content/uploads/2018/08/IMG_0083.jpg",
        "alt" => "Una de las vistas panorámicas de la ruta",
        "caption" => "Una de las vistas panorámicas de la ruta",
        "fuente" => "https://gailurra.org/fitxa/ruta-circular-al-monte-candina/",
        "fuente_texto" => "gailurra.org"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/h8sCkrlLRIY", // reemplaza con ID real si hay
      "titulo" => "Video de Monte Candina"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://avescantabricas.com/wp-content/uploads/2025/03/20160627_120315.jpg",
        "alt" => "Acantilados desde Monte Candina",
        "caption" => "Acantilados y mar Cantábrico",
        "fuente" => "https://avescantabricas.com/acantilados-monte-candina/",
        "fuente_texto" => "avescantabricas.com"
    ],
    [
        "src" => "https://gailurra.org/wp-content/uploads/2018/08/IMG_0083.jpg",
        "alt" => "Flora autóctona en Monte Candina",
        "caption" => "Flora autóctona",
        "fuente" => "https://gailurra.org/fitxa/ruta-circular-al-monte-candina/",
        "fuente_texto" => "gailurra.org"
    ],
    [
        "src" => "https://www.alltrails.com/_next/image?url=https%3A%2F%2Fwww.alltrails.com%2Fapi%2Falltrails%2Fv3%2Ftrails%2F10561972%2Fstatic_map%3Fsize%3D342x424%26scale%3D2%26show_3d%3Dyes%26key%3D3p0t5s6b5g4g0e8k3c1j3w7y5c3m4t8i&w=3840&q=75",
        "alt" => "Ruta por Monte Candina",
        "caption" => "Ruta por el Monte Candina",
        "fuente" => "https://www.alltrails.com/es/ruta/spain/cantabria/monte-candina",
        "fuente_texto" => "alltrails.com"
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
