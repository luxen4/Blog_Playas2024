<?php 
$header = [
  "titulo" => "🏖️ Playa de Berria en Santoña",
  "descripcion" => "Extensa playa natural entre el Monte Buciero y el penal de El Dueso en Santoña, ideal para surf y paseos"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Playa de Berria</strong>, situada en <span class='font-semibold'>Santoña</span>, es una de las playas más emblemáticas de Cantabria, con más de 2 km de arena dorada y aguas abiertas al Cantábrico.",
    "Es un destino popular para la <strong>práctica del surf</strong>, gracias a sus olas constantes, y también para largos paseos en un entorno natural protegido.",
    "Se encuentra enmarcada entre el <span class='font-medium'>Monte Buciero</span> y el penal de El Dueso, ofreciendo un paisaje único que combina mar, montaña y naturaleza.",
    "Un lugar perfecto tanto para familias como para amantes de los deportes acuáticos y la fotografía de paisajes costeros."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-de-berria-santona-cantabria-1.jpg",
        "alt" => "Vista panorámica de la Playa de Berria en Santoña",
        "caption" => "Vista panorámica de la Playa de Berria",
        "fuente" => "https://turismodecantabria.com/playas/playa-de-berria/",
        "fuente_texto" => "turismodecantabria.com"
    ],
    [
        "src" => "https://surfsphere.com/app/uploads/2024/09/nomad-surfers-surf-spot-playa-de.jpg",
        "alt" => "Surfistas en la Playa de Berria",
        "caption" => "Surf en la Playa de Berria",
        "fuente" => "https://surfsphere.com/surf-spot/berria-santona/",
        "fuente_texto" => "surfsphere.com"
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://lh5.googleusercontent.com/proxy/RBHv4tZ5ThtVGdmRODmC7j7XRiN8zz9tKI4BdOwMfIVb4azlmn41veLwbcQZypx7av57eOy5nxXUq3FE_DYSjkE9U8b2yPxYJSTZXZuy4mlsD2qzya2wP1Vku88",
        "alt" => "Playa de Berria desde el aire en Santoña",
        "caption" => "Vista aérea de la Playa de Berria",
        "fuente" => "http://www.aytosantona.org/2020/07/08/playa-berria-paraiso-natural-amantes-surf/",
        "fuente_texto" => "aytosantona.org"
    ],
    [
        "src" => "https://s0.wklcdn.com/image_68/2047485/54524017/36440712.jpg",
        "alt" => "Paseo junto a la Playa de Berria",
        "caption" => "Paseo marítimo en Berria",
        "fuente" => "https://es.wikiloc.com/rutas-senderismo/berria-punta-del-brusco-54524013",
        "fuente_texto" => "wikiloc.com"
    ],
    [
        "src" => "https://cantabria365.com/wp-content/uploads/2025/02/Playa-berria-1024x539.webp",
        "alt" => "Extensión de arena en la Playa de Berria",
        "caption" => "Amplio arenal de Berria",
        "fuente" => "https://cantabria365.com/playas/playa-de-berria/",
        "fuente_texto" => "cantabria365.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Berria",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Santoña - Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Aprox. 2 km de playa"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Entorno",
      "descripcion" => "Entre el Monte Buciero y el penal de El Dueso"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Surf, paisaje natural protegido, vistas al Buciero"
    ],
    [
      "icono" => "🅿️",
      "titulo" => "Servicios",
      "descripcion" => "Accesos cómodos, aparcamiento, duchas y escuelas de surf"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄‍♂️ Actividades en la Playa de Berria",
  "items"  => [
    [ "icono" => "🏄‍♀️", "texto" => "Surf y deportes acuáticos" ],
    [ "icono" => "🚶‍♂️", "texto" => "Largos paseos por la orilla" ],
    [ "icono" => "🌅", "texto" => "Atardeceres sobre el Cantábrico" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes naturales" ],
    [ "icono" => "👨‍👩‍👧", "texto" => "Día de playa en familia" ]
  ]
];
?>

<?php
// Configuración del mapa de la Playa de Berria en Santoña
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-berria-santona",
    "centro" => [43.4629, -3.4683],   // Latitud, Longitud aproximadas de la playa
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4629, -3.4683],  // Latitud, Longitud del marcador
        "popup"  => "<strong>Playa de Berria - Santoña</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 67 55 77",
    "enlace" => "tel:+34942675577" // Oficina de Turismo de Santoña
  ],
  "web"      => [
    "texto" => "www.turismosantona.com",
    "url"   => "https://www.turismosantona.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Sofía L.",
        "texto"  => "Playa enorme, ideal para caminar y desconectar."
    ],
    [
        "nombre" => "Álvaro P.",
        "texto"  => "Perfecta para surfear, olas constantes y ambiente muy bueno."
    ],
    [
        "nombre" => "Carmen F.",
        "texto"  => "El paisaje es precioso, rodeado de naturaleza y con mucho espacio."
    ],
    [
        "nombre" => "Diego M.",
        "texto"  => "Muy recomendable, tanto para familias como para surfistas."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4629&lon=-3.4683&zoom=10"; 
?>
