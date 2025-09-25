<?php 
$header = [
  "titulo" => "🏖️ Playa del Pedregal",
  "descripcion" => "Playa urbana de Castro-Urdiales con arena y grava, ideal para quienes buscan tranquilidad y vistas al Cantábrico"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Playa del Pedregal</strong> se encuentra al oeste del casco urbano de Castro-Urdiales y combina arena fina con zonas de grava, ofreciendo un entorno más tranquilo que otras playas céntricas.",

    "Es un lugar ideal para quienes buscan relajarse junto al <em>mar Cantábrico</em>, disfrutar del paisaje y tomar el sol en un ambiente menos concurrido.",

    "La playa cuenta con servicios básicos, como acceso peatonal, duchas y zonas de descanso, siendo perfecta para familias y visitantes que desean un espacio más sereno.",

    "Su ubicación permite disfrutar de las vistas al puerto, al Paseo Marítimo y al horizonte marítimo de Castro-Urdiales, haciendo de Pedregal un lugar pintoresco y agradable."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-pedregal-castro-1.jpg",
        "alt" => "Vista general de la Playa del Pedregal en Castro-Urdiales",
        "caption" => "Playa del Pedregal",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-pedregal-castro-2.jpg",
        "alt" => "Zona de arena y grava en la Playa del Pedregal",
        "caption" => "Área de baño y descanso",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-pedregal-castro-1.jpg",
        "alt" => "Panorámica de la Playa del Pedregal",
        "caption" => "Playa del Pedregal",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-pedregal-castro-2.jpg",
        "alt" => "Bañistas en la Playa del Pedregal",
        "caption" => "Zona de baño",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-pedregal-castro-3.jpg",
        "alt" => "Atardecer en la Playa del Pedregal",
        "caption" => "Atardecer sobre el Cantábrico",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa del Pedregal",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Al oeste del casco urbano de Castro-Urdiales, accesible desde el Paseo Marítimo"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Combinación de arena y grava, ambiente tranquilo"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Atractivo principal",
      "descripcion" => "Relax, baño, tomar el sol y disfrutar del entorno marítimo"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios y puntos de interés",
      "descripcion" => "Duchas, acceso peatonal, bancos, vistas al mar y al Paseo Marítimo"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Actividades en la Playa del Pedregal",
  "items"  => [
    [ "icono" => "🏊", "texto" => "Bañarse y disfrutar del mar" ],
    [ "icono" => "☀️", "texto" => "Tomar el sol en un entorno tranquilo" ],
    [ "icono" => "🚶", "texto" => "Pasear por la arena y las zonas de grava" ],
    [ "icono" => "📸", "texto" => "Fotografía del paisaje y el atardecer" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar en familia en un ambiente sereno" ]
  ]
];
?>

<?php
// Configuración del mapa de la Playa del Pedregal en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-pedregal",
    "centro" => [43.3847, -3.2195],   // Coordenadas aproximadas de la playa
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3847, -3.2195],  
        "popup"  => "<strong>Playa del Pedregal - Castro-Urdiales</strong>"
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
        "nombre" => "Laura T.",
        "texto"  => "Playa tranquila, ideal para descansar lejos del bullicio del centro."
    ],
    [
        "nombre" => "Pablo R.",
        "texto"  => "Perfecta para familias y para pasear por la arena y la grava."
    ],
    [
        "nombre" => "Sara M.",
        "texto"  => "Me gusta por su ambiente sereno y las vistas al Cantábrico."
    ],
    [
        "nombre" => "Javier L.",
        "texto"  => "Un lugar pintoresco para disfrutar de la playa sin aglomeraciones."
    ]
];
?>


