<?php 
$header = [
  "titulo" => "⚓ Puerto pesquero de Saint-Jean-de-Luz",
  "descripcion" => "Un puerto con encanto en el País Vasco francés, donde tradición marinera y gastronomía se unen junto al mar"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Puerto pesquero de Saint-Jean-de-Luz</strong> es uno de los rincones más auténticos de esta ciudad costera del País Vasco francés.",
    "Tradicionalmente vinculado a la pesca del atún y otras especies del Cantábrico, hoy combina actividad pesquera con turismo y gastronomía.",
    "Pasear por el puerto permite ver barcos tradicionales, redes de pesca y disfrutar de un ambiente marinero único.",
    "Además, es un lugar ideal para degustar pescado fresco en restaurantes cercanos y disfrutar de las vistas al mar."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/3/3f/Port_de_Saint-Jean-de-Luz.jpg",
      "alt" => "Puerto pesquero de Saint-Jean-de-Luz",
      "caption" => "Puerto de Saint-Jean-de-Luz",
      "fuente" => "https://fr.wikipedia.org/wiki/Saint-Jean-de-Luz",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14631/port-saint-jean-de-luz.jpg",
      "alt" => "Barcos en el puerto de Saint-Jean-de-Luz",
      "caption" => "Barcos tradicionales",
      "fuente" => "https://guide-du-paysbasque.com",
      "fuente_texto" => "guide-du-paysbasque.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/y4qW2gQ0XlY",
    "titulo" => "Video del puerto de Saint-Jean-de-Luz"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://media.routard.com/image/98/6/port-saint-jean-de-luz.159986.jpg",
        "alt" => "Vista panorámica del puerto",
        "caption" => "Vista del puerto",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ],
    [
        "src" => "https://www.saint-jean-de-luz.com/fileadmin/_processed_/7/0/csm_port_peche_01_7c8f3a.jpg",
        "alt" => "Actividad pesquera en el puerto",
        "caption" => "Actividad pesquera",
        "fuente" => "https://www.saint-jean-de-luz.com",
        "fuente_texto" => "saint-jean-de-luz.com"
    ],
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/0/02/Saint-Jean-de-Luz_port.jpg",
        "alt" => "Barcos amarrados en el puerto",
        "caption" => "Barcos en el puerto",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/saint-jean-luz-port-1800_w600.webp",
        "alt" => "Puerto al atardecer",
        "caption" => "Atardecer en el puerto",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del puerto pesquero",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Saint-Jean-de-Luz, País Vasco francés"
    ],
    [
      "icono" => "⚓",
      "titulo" => "Actividad",
      "descripcion" => "Puerto pesquero tradicional y turístico"
    ],
    [
      "icono" => "🐟",
      "titulo" => "Pesca",
      "descripcion" => "Atún, merluza y pescado del Cantábrico"
    ],
    [
      "icono" => "🍽️",
      "titulo" => "Gastronomía",
      "descripcion" => "Restaurantes con pescado fresco y cocina vasca"
    ],
    [
      "icono" => "🚶‍♂️",
      "titulo" => "Acceso",
      "descripcion" => "Paseo peatonal junto al puerto"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "⚓ Qué hacer en el puerto",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por el muelle" ],
    [ "icono" => "📸", "texto" => "Fotografiar barcos y vistas marinas" ],
    [ "icono" => "🍽️", "texto" => "Comer pescado fresco en restaurantes cercanos" ],
    [ "icono" => "🛥️", "texto" => "Observar la actividad pesquera tradicional" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puerto-saint-jean-luz",
    "centro" => [43.3880, -1.6640],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.3880, -1.6640],
        "popup"  => "<strong>Puerto pesquero de Saint-Jean-de-Luz</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 26 03 16",
    "enlace" => "tel:+33559260316"
  ],
  "web"      => [
    "texto" => "www.saint-jean-de-luz.com",
    "url"   => "https://www.saint-jean-de-luz.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Jean P.",
        "texto"  => "Un puerto con mucho encanto y ambiente auténtico."
    ],
    [
        "nombre" => "Marta G.",
        "texto"  => "Perfecto para pasear y hacer fotos."
    ],
    [
        "nombre" => "Luis R.",
        "texto"  => "Se come increíble en los restaurantes cercanos."
    ],
    [
        "nombre" => "Ane S.",
        "texto"  => "Muy bonito al atardecer, imprescindible."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3880&lon=-1.6640&zoom=10"; 
?>