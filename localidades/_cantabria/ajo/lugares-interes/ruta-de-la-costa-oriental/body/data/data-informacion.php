<?php 
$header = [
  "titulo" => "🌊 Ruta Costera de Ajo",
  "descripcion" => "Sendero panorámico junto a los acantilados y el faro de Ajo, en Cantabria"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Ruta Costera de Ajo</strong> recorre los espectaculares acantilados del municipio de Bareyo, ofreciendo vistas impresionantes del mar Cantábrico y acceso al famoso <span class='font-medium'>Faro de Ajo</span>.",
    "Es un recorrido ideal para caminantes y amantes de la naturaleza, con paisajes únicos, flora autóctona y la posibilidad de observar aves marinas.",
    "El sendero permite disfrutar de puestas de sol sobre los acantilados y la costa cantábrica, perfecto para fotografía panorámica.",
    "Es un recorrido accesible, ideal para familias y paseos tranquilos junto al mar."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-costero-vistas-cantabrico-ajo.jpg",
      "alt" => "Sendero costero con vistas al Cantábrico en Ajo"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-ruta-costera-ajo.jpg",
      "alt" => "Acantilados a lo largo de la Ruta Costera de Ajo"
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mapa-ruta-costera-ajo.jpg",
        "alt" => "Mapa de la Ruta Costera en Ajo",
        "caption" => "Mapa de la Ruta Costera de Ajo",
        "fuente" => "https://lossaltapraos.blogspot.com/2019/05/costa-de-ajo-circular.html",
        "fuente_texto" => "lossaltapraos.blogspot.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-costero-vistas-cantabrico-ajo.jpg",
        "alt" => "Sendero costero en Ajo con vistas al Cantábrico",
        "caption" => "Sendero costero en Ajo",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-ruta-costera-ajo.jpg",
        "alt" => "Acantilados en la Ruta Costera de Ajo",
        "caption" => "Acantilados en la ruta",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/faro-de-ajo-visto-desde-sendero.jpg",
        "alt" => "Faro de Ajo visto desde el sendero",
        "caption" => "Faro de Ajo desde el sendero",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Ruta",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Bareyo - Ajo, Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Aprox. 6 km (ida)"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Dificultad",
      "descripcion" => "Baja - Moderada"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Faro de Ajo, acantilados, miradores naturales"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏞️ Ruta Costera en Ajo",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Senderismo y paseos costeros" ],
    [ "icono" => "📸", "texto" => "Fotografía panorámica de paisajes y la costa cantábrica" ],
    [ "icono" => "🦅", "texto" => "Observación de aves marinas desde los acantilados" ],
    [ "icono" => "🌅", "texto" => "Disfrutar del atardecer en los acantilados" ]
  ]
];
?>

<?php
// Configuración del mapa de la Ruta Costera en Ajo
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-ruta-costera-ajo",
    "centro" => [43.495507, -3.597608],   // Latitud, Longitud del centro del mapa
    "zoom"   => 13,
    "marker" => [
        "coords" => [43.499507, -3.597608],  // Latitud, Longitud del marcador
        "popup"  => "<strong>Ruta Costera de Ajo</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 65 51 00",
    "enlace" => "tel:+34942655100" // Oficina de Turismo de Bareyo
  ],
  "web"      => [
    "texto" => "www.aytobareyo.org",
    "url"   => "https://www.aytobareyo.org"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Laura G.",
        "texto"  => "Una ruta espectacular, sin duda lo mejor de Ajo."
    ],
    [
        "nombre" => "Javi M.",
        "texto"  => "Ideal para senderismo, las vistas son brutales."
    ]
];
?>
<?php // $iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; ?>
