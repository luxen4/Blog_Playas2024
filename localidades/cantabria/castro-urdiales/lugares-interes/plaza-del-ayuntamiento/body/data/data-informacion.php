<?php 
$header = [
  "titulo" => "🏛️ Plaza del Ayuntamiento",
  "descripcion" => "Plaza central de Castro-Urdiales, punto de encuentro con edificios históricos y ambiente animado"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Plaza del Ayuntamiento</strong> se sitúa en el corazón de Castro-Urdiales y es el centro neurálgico de la vida social y cultural de la villa.",

    "Rodeada de edificios históricos y arquitectura tradicional cántabra, la plaza ofrece un entorno ideal para pasear, tomar algo en terrazas y disfrutar del ambiente local.",

    "En la plaza se celebran eventos, ferias y actividades culturales a lo largo del año, siendo un punto de referencia tanto para vecinos como para turistas.",

    "Su ubicación permite combinar la visita con otros lugares de interés cercanos, como la Iglesia de Santa María, el puerto y el Paseo Marítimo."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plaza-ayuntamiento-castro-1.jpg",
        "alt" => "Vista general de la Plaza del Ayuntamiento en Castro-Urdiales",
        "caption" => "Plaza del Ayuntamiento",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plaza-ayuntamiento-castro-2.jpg",
        "alt" => "Terrazas y ambiente en la Plaza del Ayuntamiento",
        "caption" => "Ambiente y terrazas",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plaza-ayuntamiento-castro-1.jpg",
        "alt" => "Panorámica de la Plaza del Ayuntamiento",
        "caption" => "Plaza del Ayuntamiento",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plaza-ayuntamiento-castro-2.jpg",
        "alt" => "Gente disfrutando en la Plaza del Ayuntamiento",
        "caption" => "Actividades y ambiente",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plaza-ayuntamiento-castro-3.jpg",
        "alt" => "Detalle de edificios históricos en la Plaza del Ayuntamiento",
        "caption" => "Arquitectura tradicional",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Plaza del Ayuntamiento",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Centro de Castro-Urdiales, cerca del puerto y del casco histórico"
    ],
    [
      "icono" => "🏛️",
      "titulo" => "Arquitectura",
      "descripcion" => "Edificios históricos, estilo tradicional cántabro y fachadas destacadas"
    ],
    [
      "icono" => "🌟",
      "titulo" => "Atractivo principal",
      "descripcion" => "Ambiente animado, terrazas, eventos y vida social"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Terrazas, eventos culturales, arquitectura y proximidad al casco histórico"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏛️ Actividades en la Plaza del Ayuntamiento",
  "items"  => [
    [ "icono" => "☕", "texto" => "Tomar algo en las terrazas" ],
    [ "icono" => "🚶", "texto" => "Pasear y disfrutar del entorno histórico" ],
    [ "icono" => "📸", "texto" => "Fotografía de la plaza y la arquitectura" ],
    [ "icono" => "🎉", "texto" => "Participar en eventos y ferias locales" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar en familia del ambiente y actividades" ]
  ]
];
?>

<?php
// Configuración del mapa de la Plaza del Ayuntamiento en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-plaza-ayuntamiento",
    "centro" => [43.3833, -3.2180],   // Coordenadas aproximadas de la plaza
    "zoom"   => 17,
    "marker" => [
        "coords" => [43.3833, -3.2180],  
        "popup"  => "<strong>Plaza del Ayuntamiento - Castro-Urdiales</strong>"
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
        "nombre" => "Marta G.",
        "texto"  => "Plaza muy animada, perfecta para tomar algo y disfrutar del ambiente local."
    ],
    [
        "nombre" => "Carlos R.",
        "texto"  => "Me encanta pasear por la plaza y admirar los edificios históricos."
    ],
    [
        "nombre" => "Sofía L.",
        "texto"  => "Ideal para sentarse en una terraza y observar la vida de la villa."
    ],
    [
        "nombre" => "David T.",
        "texto"  => "Un punto céntrico muy agradable, siempre con actividad y eventos."
    ]
];
?>
