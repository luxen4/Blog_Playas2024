<?php 
$header = [
  "titulo" => "🏖️ Playa de Ostende",
  "descripcion" => "Playa urbana en Castro-Urdiales con arena fina, ambiente familiar y servicios para bañistas"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Playa de Ostende</strong> se encuentra en el centro de Castro-Urdiales, siendo una de las más accesibles y concurridas por locales y turistas.",

    "Es perfecta para disfrutar del <em>mar Cantábrico</em> gracias a su arena fina, oleaje moderado y amplia zona de baño.",

    "Cuenta con paseos, áreas de descanso, vigilancia en temporada alta, duchas, chiringuitos y servicios que la hacen ideal para familias.",

    "Su ubicación central permite combinar la visita con el puerto, el casco histórico y el Paseo Marítimo, haciendo de Ostende un lugar estratégico para pasar el día en la playa."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-1.jpg",
        "alt" => "Vista general de la Playa de Ostende en Castro-Urdiales",
        "caption" => "Playa de Ostende",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-2.jpg",
        "alt" => "Personas disfrutando en la Playa de Ostende",
        "caption" => "Zona de baño y ocio",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-1.jpg",
        "alt" => "Panorámica de la Playa de Ostende",
        "caption" => "Playa de Ostende",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-2.jpg",
        "alt" => "Bañistas en la Playa de Ostende",
        "caption" => "Área de baño y ocio",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-3.jpg",
        "alt" => "Atardecer en la Playa de Ostende",
        "caption" => "Atardecer sobre el Cantábrico",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Ostende",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Situada en el centro de Castro-Urdiales, muy accesible desde el casco urbano"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Arena fina, oleaje moderado, ideal para familias y bañistas"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Atractivo principal",
      "descripcion" => "Baño, sol, paseo marítimo y disfrute del mar Cantábrico"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios y puntos de interés",
      "descripcion" => "Duchas, baños, vigilancia, chiringuitos, zonas de juegos y paseo marítimo"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Actividades en la Playa de Ostende",
  "items"  => [
    [ "icono" => "🏊", "texto" => "Bañarse en el Cantábrico" ],
    [ "icono" => "☀️", "texto" => "Tomar el sol en la arena" ],
    [ "icono" => "🚶", "texto" => "Pasear por el paseo marítimo" ],
    [ "icono" => "📸", "texto" => "Fotografía del mar, barcos y puestas de sol" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar en familia en zonas de baño y juegos" ]
  ]
];
?>

<?php
// Configuración del mapa de la Playa de Ostende en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-ostende",
    "centro" => [43.3850, -3.2185],   // Coordenadas aproximadas de la playa
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3850, -3.2185],  
        "popup"  => "<strong>Playa de Ostende - Castro-Urdiales</strong>"
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
        "nombre" => "Ana G.",
        "texto"  => "Playa céntrica, con todos los servicios, ideal para un día familiar."
    ],
    [
        "nombre" => "Luis M.",
        "texto"  => "Arena fina y agua tranquila, perfecta para niños."
    ],
    [
        "nombre" => "Clara V.",
        "texto"  => "Me encanta pasear por su paseo marítimo al atardecer."
    ],
    [
        "nombre" => "David R.",
        "texto"  => "Buena accesibilidad y chiringuitos agradables, muy recomendable."
    ]
];
?>


