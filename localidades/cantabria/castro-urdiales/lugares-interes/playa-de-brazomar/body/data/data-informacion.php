<?php 
$header = [
  "titulo" => "🏖️ Playa de Brazomar",
  "descripcion" => "Playa urbana en Castro-Urdiales con arena fina, ideal para bañistas y familias"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Playa de Brazomar</strong> es una de las más populares de Castro-Urdiales, gracias a su arena fina, oleaje moderado y buenas instalaciones.",

    "Cuenta con paseos peatonales, zonas de arena para tomar el sol, áreas de juegos y fácil acceso desde el centro de la villa.",

    "Es ideal tanto para familias como para jóvenes, ofreciendo servicios como duchas, baños, chiringuitos y vigilancia en temporada alta.",

    "Su ubicación permite disfrutar de espectaculares vistas al mar Cantábrico y de las puestas de sol sobre la costa cántabra."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-brazomar-castro-1.jpg",
        "alt" => "Vista general de la Playa de Brazomar en Castro-Urdiales",
        "caption" => "Playa de Brazomar",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-brazomar-castro-2.jpg",
        "alt" => "Bañistas y sombrillas en la Playa de Brazomar",
        "caption" => "Zona de baño y relax",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/gQpQhaf0lO0", 
    "titulo" => "Video de Castro - Urdiales y Playa de Brazomar"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://cloud.inspain.org/imgwbp/playas/4/2/7/pzxu3dawsnhffhooruwmhdcmte_2000.webp",
        "alt" => "Panorámica de la Playa de Brazomar",
        "caption" => "Playa de Brazomar",
        "fuente" => "https://www.inspain.org/es/cantabria/castro-urdiales/playas/brazomar/",
        "fuente_texto" => "inspain.org"
    ],
    [
        "src" => "https://cornisacantabrica.com/wp-content/uploads/2023/10/la-playa-de-brazomar-castro-urdiales-scaled.jpg",
        "alt" => "Personas disfrutando en la playa",
        "caption" => "Vista panorámica de la Playa de Brazomar con bañistas",
        "fuente" => "https://cornisacantabrica.com/la-playa-de-brazomar-castro-urdiales",
        "fuente_texto" => "cornisacantabrica.com"
    ],
    [
        "src" => "https://beachatlas.s3.us-east-2.amazonaws.com/brazomar.jpg",
        "alt" => "Atardecer en la Playa de Brazomar",
        "caption" => "Atardecer sobre el Cantábrico",
        "fuente" => "https://www.beachatlas.com/es/brazomar",
        "fuente_texto" => "beachatlas.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Brazomar",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Situada en el barrio de Brazomar, al oeste de Castro-Urdiales"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Arena fina, oleaje moderado, apta para familias y bañistas"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Atractivo principal",
      "descripcion" => "Baño, sol, paseo marítimo y deportes acuáticos"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios y puntos de interés",
      "descripcion" => "Duchas, baños, vigilancia, chiringuitos y zona de juegos"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Actividades en la Playa de Brazomar",
  "items"  => [
    [ "icono" => "🏊", "texto" => "Bañarse en el Cantábrico" ],
    [ "icono" => "☀️", "texto" => "Tomar el sol en la arena" ],
    [ "icono" => "🚶", "texto" => "Pasear por el paseo marítimo" ],
    [ "icono" => "📸", "texto" => "Fotografía del mar y las puestas de sol" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar en familia en la arena y áreas de juegos" ]
  ]
];
?>

<?php
// Configuración del mapa de la Playa de Brazomar en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-brazomar",
    "centro" => [43.3801, -3.2310],   // Coordenadas aproximadas de la playa
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3801, -3.2310],  
        "popup"  => "<strong>Playa de Brazomar - Castro-Urdiales</strong>"
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
        "nombre" => "Marcos L.",
        "texto"  => "Playa amplia, perfecta para pasar el día en familia."
    ],
    [
        "nombre" => "Elena R.",
        "texto"  => "Arena fina y oleaje agradable, muy recomendable."
    ],
    [
        "nombre" => "Pablo F.",
        "texto"  => "Ideal para pasear al atardecer y disfrutar del Cantábrico."
    ],
    [
        "nombre" => "Lucía T.",
        "texto"  => "Muy buenas instalaciones, chiringuitos y zonas de juego para niños."
    ]
];
?>
