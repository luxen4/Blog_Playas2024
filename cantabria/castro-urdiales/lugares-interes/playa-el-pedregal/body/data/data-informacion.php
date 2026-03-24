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
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-el-pedregal-castro-urdiales-cantabria-1.jpg",
        "alt" => "Vista general de la Playa del Pedregal en Castro-Urdiales",
        "caption" => "Playa del Pedregal",
        "fuente" => "",
        "fuente_texto" => "Imagen propia"
    ],
    [
        "src" => "https://www.masmar.net/var/masmar/storage/images/gu%C3%ADas/playas/cantabria/piscina-natural-el-pedregal.-catro-urdiales/piscina-natural-el-pedregal/616525-1-esl-ES/Piscina-natural-El-Pedregal.jpg",
        "alt" => "Zona de arena y grava en la Playa del Pedregal",
        "caption" => "Playa del Pedregal",
        "fuente" => "https://www.masmar.net/index.php/esl/Gu%C3%ADas/Playas/Cantabria/Piscina-natural-El-Pedregal.-Castro-Urdiales/Piscina-natural-El-Pedregal",
        "fuente_texto" => "masmar.net"
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://guias.masmar.net/var/masmar/storage/images/media/images/pedregal_1/616521-1-esl-ES/Pedregal_1.jpg",
        "alt" => "Panorámica de la Playa del Pedregal",
        "caption" => "Playa del Pedregal",
        "fuente" => "https://guias.masmar.net/index.php/Playas/Cantabria/Piscina-natural-El-Pedregal.-Castro-Urdiales",
        "fuente_texto" => "guias.masmar.net"
    ],
    [
        "src" => "https://miladytrip.wordpress.com/wp-content/uploads/2012/09/50b96-playaelpedregal.jpg?w=640&h=480",
        "alt" => "Bañistas en la Playa del Pedregal",
        "caption" => "Zona de baño",
        "fuente" => "https://miladytrip.wordpress.com/2012/09/21/dia-familiar-en-castro-urdiales-cantabria/",
        "fuente_texto" => "miladytrip.wordpress.com"
    ],
    [
        "src" => "https://www.vivecastrourdiales.com/wp-content/uploads/2013/01/El-pedregal-por-Mighty-MArta-300x225.jpg",
        "alt" => "Rocas en la Playa del Pedregal",
        "caption" => "Rocas en la Playa del Pedregal",
        "fuente" => "https://www.vivecastrourdiales.com/playas-en-la-ciudad/",
        "fuente_texto" => "vivecastrourdiales.com"
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


