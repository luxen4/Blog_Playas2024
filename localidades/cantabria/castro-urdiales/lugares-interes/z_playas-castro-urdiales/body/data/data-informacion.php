<?php 
$header = [
  "titulo" => "🏖️ Playas de Castro-Urdiales",
  "descripcion" => "Descubre las playas más emblemáticas de Castro-Urdiales: Ostende, Brazomar y Oriñón"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "Castro-Urdiales cuenta con varias <strong>playas urbanas y naturales</strong> que son un gran atractivo tanto para locales como para visitantes.",

    "La <strong>Playa de Ostende</strong>, de arena dorada y aguas tranquilas, es la más amplia del municipio y cuenta con todos los servicios.",

    "La <strong>Playa de Brazomar</strong>, en pleno casco urbano, es ideal para familias y está protegida por un dique que la convierte en una zona segura de baño.",

    "La <strong>Playa de Oriñón</strong>, situada al este de Castro, sorprende por su entorno natural, sus dunas y su gran extensión abierta al mar Cantábrico."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-1.jpg",
        "alt" => "Vista de la Playa de Ostende en Castro-Urdiales",
        "caption" => "Playa de Ostende",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-brazomar-castro-1.jpg",
        "alt" => "Playa de Brazomar en el centro de Castro-Urdiales",
        "caption" => "Playa de Brazomar",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-orinon-castro-1.jpg",
        "alt" => "Playa de Oriñón con dunas y mar abierto",
        "caption" => "Playa de Oriñón",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de las playas",
  "items" => [
    [
      "icono" => "🏖️",
      "titulo" => "Playa de Ostende",
      "descripcion" => "La más extensa de Castro-Urdiales, con paseo marítimo y servicios completos"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Playa de Brazomar",
      "descripcion" => "Playa urbana y familiar, protegida y de fácil acceso"
    ],
    [
      "icono" => "🏝️",
      "titulo" => "Playa de Oriñón",
      "descripcion" => "Gran arenal natural, con dunas y paisaje abierto al Cantábrico"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Actividades en las playas",
  "items"  => [
    [ "icono" => "🏊", "texto" => "Bañarse y disfrutar del mar Cantábrico" ],
    [ "icono" => "☀️", "texto" => "Tomar el sol y relajarse en la arena" ],
    [ "icono" => "🏄", "texto" => "Practicar surf y deportes acuáticos en Oriñón" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar de un día en familia en Brazomar" ],
    [ "icono" => "🚶", "texto" => "Pasear por el paseo marítimo de Ostende" ]
  ]
];
?>


<?php
// Mapa con las tres playas principales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playas",
    "centro" => [43.3825, -3.2165],   // Centro aproximado
    "zoom"   => 13,
    "markers" => [
        [
            "coords" => [43.3865, -3.2125],
            "popup"  => "<strong>Playa de Ostende</strong>"
        ],
        [
            "coords" => [43.3830, -3.2205],
            "popup"  => "<strong>Playa de Brazomar</strong>"
        ],
        [
            "coords" => [43.4005, -3.2880],
            "popup"  => "<strong>Playa de Oriñón</strong>"
        ]
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
        "nombre" => "Sofía L.",
        "texto"  => "La playa de Brazomar es perfecta para ir con niños, muy segura."
    ],
    [
        "nombre" => "Javier R.",
        "texto"  => "Ostende es amplia y cómoda, ideal para pasar el día."
    ],
    [
        "nombre" => "Nerea F.",
        "texto"  => "Oriñón me encantó, naturaleza y mar abierto, un entorno precioso."
    ],
    [
        "nombre" => "Ander M.",
        "texto"  => "Las playas de Castro ofrecen variedad: urbanas y naturales, todas recomendables."
    ]
];
?>
