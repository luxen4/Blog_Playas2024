<?php 
$header = [
  "titulo" => "🏖️ Playas de Castro-Urdiales",
  "descripcion" => "Disfruta de las playas de Castro-Urdiales: Brazomar, Ostende, Dícido y Sonabia, ideales para bañarse y pasear"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "Castro-Urdiales ofrece una gran variedad de <strong>playas urbanas y naturales</strong>, cada una con su encanto y características únicas.",

    "La <strong>Playa de Brazomar</strong> es urbana y familiar, perfecta para bañarse en aguas tranquilas y disfrutar de servicios cercanos.",

    "La <strong>Playa de Ostende</strong> es amplia, con arena dorada y un paseo marítimo que invita a pasear y tomar el sol.",

    "La <strong>Playa de Dícido</strong> es tranquila y protegida, ideal para relajarse y disfrutar del Cantábrico en un entorno natural cercano al casco urbano.",

    "La <strong>Playa de Sonabia</strong> se encuentra más alejada, rodeada de acantilados y naturaleza, perfecta para quienes buscan un entorno más salvaje."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-brazomar-castro-1.jpg",
        "alt" => "Playa de Brazomar en Castro-Urdiales",
        "caption" => "Playa de Brazomar",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-ostende-castro-1.jpg",
        "alt" => "Playa de Ostende en Castro-Urdiales",
        "caption" => "Playa de Ostende",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-dicido-castro-1.jpg",
        "alt" => "Playa de Dícido en Castro-Urdiales",
        "caption" => "Playa de Dícido",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-sonabia-castro-1.jpg",
        "alt" => "Playa de Sonabia, naturaleza y acantilados en Castro-Urdiales",
        "caption" => "Playa de Sonabia",
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
      "titulo" => "Playa de Brazomar",
      "descripcion" => "Playa urbana y familiar con todos los servicios y aguas tranquilas"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Playa de Ostende",
      "descripcion" => "Amplia playa con arena dorada y paseo marítimo"
    ],
    [
      "icono" => "🏝️",
      "titulo" => "Playa de Dícido",
      "descripcion" => "Zona tranquila y protegida, cercana al casco urbano"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Playa de Sonabia",
      "descripcion" => "Playa natural rodeada de acantilados y paisajes salvajes"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Actividades en las playas",
  "items"  => [
    [ "icono" => "🏊", "texto" => "Bañarse en las aguas del Cantábrico" ],
    [ "icono" => "☀️", "texto" => "Tomar el sol y relajarse en la arena" ],
    [ "icono" => "🏄", "texto" => "Practicar surf y deportes acuáticos" ],
    [ "icono" => "🚶", "texto" => "Pasear por los paseos marítimos y senderos" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar en familia de un día de playa" ]
  ]
];
?>


<?php
// Mapa con las cuatro playas principales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playas",
    "centro" => [43.3825, -3.2165],
    "zoom"   => 13,
    "markers" => [
        [
            "coords" => [43.3830, -3.2205],
            "popup"  => "<strong>Playa de Brazomar</strong>"
        ],
        [
            "coords" => [43.3865, -3.2125],
            "popup"  => "<strong>Playa de Ostende</strong>"
        ],
        [
            "coords" => [43.3910, -3.2100],
            "popup"  => "<strong>Playa de Dícido</strong>"
        ],
        [
            "coords" => [43.4190, -3.1840],
            "popup"  => "<strong>Playa de Sonabia</strong>"
        ]
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 78 29 12", 
    "enlace" => "tel:+34942782912"
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
        "nombre" => "Lucía M.",
        "texto"  => "Brazomar es perfecta para ir con niños, arena fina y agua tranquila."
    ],
    [
        "nombre" => "Adrián R.",
        "texto"  => "Ostende es muy amplia y agradable para pasear y tomar el sol."
    ],
    [
        "nombre" => "Nerea F.",
        "texto"  => "Dícido es más tranquila y muy cómoda para relajarse."
    ],
    [
        "nombre" => "Iker L.",
        "texto"  => "Sonabia me encantó, un entorno natural espectacular."
    ]
];
?>
