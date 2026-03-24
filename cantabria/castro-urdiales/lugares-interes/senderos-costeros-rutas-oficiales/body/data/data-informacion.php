<?php 
$header = [
  "titulo" => "🥾 Senderos Costeros y Rutas Oficiales",
  "descripcion" => "Recorridos a pie por la costa de Castro-Urdiales, con vistas al Cantábrico y al patrimonio natural y cultural"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "Los <strong>senderos costeros de Castro-Urdiales</strong> permiten disfrutar de la belleza natural del litoral cántabro, combinando paisajes marítimos con patrimonio histórico.",

    "Existen varias rutas oficiales señalizadas, adaptadas para diferentes niveles, que conectan playas, miradores y zonas naturales de interés.",

    "Estos recorridos ofrecen la oportunidad de practicar senderismo, fotografía, observación de aves y disfrutar de la flora y fauna local en un entorno protegido.",

    "La experiencia combina deporte, naturaleza y cultura, siendo apta para familias, grupos y excursionistas que buscan explorar la costa de manera tranquila y segura."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/senderos-costeros-castro-1.jpg",
        "alt" => "Vista de los senderos costeros de Castro-Urdiales junto al mar",
        "caption" => "Senderos Costeros",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/senderos-costeros-castro-2.jpg",
        "alt" => "Excursionistas recorriendo los senderos de Castro-Urdiales",
        "caption" => "Rutas a pie",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/senderos-costeros-castro-1.jpg",
        "alt" => "Camino costero con vistas al Cantábrico",
        "caption" => "Sendero costero",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/senderos-costeros-castro-2.jpg",
        "alt" => "Paisaje natural desde las rutas oficiales de senderismo",
        "caption" => "Rutas señalizadas",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/senderos-costeros-castro-3.jpg",
        "alt" => "Excursionistas disfrutando del sendero costero",
        "caption" => "Actividad al aire libre",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información sobre Senderos y Rutas",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "A lo largo del litoral de Castro-Urdiales, conectando playas, miradores y zonas naturales"
    ],
    [
      "icono" => "🥾",
      "titulo" => "Actividad principal",
      "descripcion" => "Senderismo, paseo costero y rutas de interpretación natural"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Atractivo principal",
      "descripcion" => "Vistas al mar Cantábrico, acantilados, playas y patrimonio histórico"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Miradores, playas, fauna y flora local, restos históricos y patrimonio cultural"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🥾 Actividades en los Senderos Costeros",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Caminar y recorrer las rutas señalizadas" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes, mar y patrimonio" ],
    [ "icono" => "🦅", "texto" => "Observación de aves y fauna local" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Rutas familiares y aptas para todas las edades" ],
    [ "icono" => "🍃", "texto" => "Disfrutar del entorno natural y la tranquilidad costera" ]
  ]
];
?>

<?php
// Configuración del mapa de los senderos costeros en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-senderos-costeros",
    "centro" => [43.3835, -3.2200],   // Coordenadas aproximadas de inicio de rutas
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.3835, -3.2200],  
        "popup"  => "<strong>Senderos Costeros - Castro-Urdiales</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912" // Oficina de Turismo de Castro-Urdiales
  ],
  "web"      => [
    "texto" => "turismodecastro.com",
    "url"   => "https://turismodecastro.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Laura M.",
        "texto"  => "Las rutas costeras son espectaculares, con vistas increíbles al Cantábrico."
    ],
    [
        "nombre" => "Carlos P.",
        "texto"  => "Perfectas para pasear y hacer deporte al aire libre."
    ],
    [
        "nombre" => "Sofía R.",
        "texto"  => "Ideal para familias y excursiones con amigos."
    ],
    [
        "nombre" => "Miguel A.",
        "texto"  => "Un entorno natural y tranquilo que permite desconectar de la ciudad."
    ]
];
?>
