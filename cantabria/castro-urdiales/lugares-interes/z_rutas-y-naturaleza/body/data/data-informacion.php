<?php 
$header = [
  "titulo" => "🌿 Rutas y naturaleza en Castro-Urdiales",
  "descripcion" => "Descubre los espacios naturales y rutas de senderismo en Castro-Urdiales: Monte Cueto, Peña de Santullán y la costa con sus acantilados"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "Además de su patrimonio histórico y marítimo, Castro-Urdiales ofrece un entorno natural privilegiado, ideal para <strong>senderismo y rutas al aire libre</strong>.",

    "El <strong>Monte Cueto</strong> es una de las cimas más cercanas al casco urbano, con rutas accesibles y vistas panorámicas de la villa y la costa.",

    "La <strong>Peña de Santullán</strong> destaca por sus senderos de montaña, con miradores naturales sobre el mar Cantábrico y los pueblos del entorno.",

    "Los <strong>acantilados de la costa</strong> ofrecen recorridos espectaculares junto al mar, perfectos para los amantes de la naturaleza y la fotografía."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/monte-cueto-castro-1.jpg",
        "alt" => "Vista desde el Monte Cueto en Castro-Urdiales",
        "caption" => "Monte Cueto",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/pena-santullan-castro-1.jpg",
        "alt" => "Peña de Santullán en Castro-Urdiales",
        "caption" => "Peña de Santullán",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-castro-1.jpg",
        "alt" => "Acantilados en la costa de Castro-Urdiales",
        "caption" => "Acantilados de la costa cántabra",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de rutas y naturaleza",
  "items" => [
    [
      "icono" => "⛰️",
      "titulo" => "Monte Cueto",
      "descripcion" => "Ruta cercana al casco urbano con vistas panorámicas de Castro y la costa"
    ],
    [
      "icono" => "🏞️",
      "titulo" => "Peña de Santullán",
      "descripcion" => "Senderos de montaña con paisajes naturales y miradores al mar"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Acantilados de la costa",
      "descripcion" => "Recorridos junto al mar Cantábrico, con paisajes espectaculares"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Actividades en la naturaleza",
  "items"  => [
    [ "icono" => "🥾", "texto" => "Rutas de senderismo en Monte Cueto y Peña de Santullán" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes y panorámicas costeras" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de atardeceres desde miradores naturales" ],
    [ "icono" => "🦅", "texto" => "Observación de fauna y aves en la costa" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Excursiones familiares en la naturaleza" ]
  ]
];
?>


<?php
// Mapa con las principales rutas y puntos naturales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-naturaleza",
    "centro" => [43.3825, -3.2165],
    "zoom"   => 12,
    "markers" => [
        [
            "coords" => [43.3745, -3.2075],
            "popup"  => "<strong>Monte Cueto</strong>"
        ],
        [
            "coords" => [43.3710, -3.1835],
            "popup"  => "<strong>Peña de Santullán</strong>"
        ],
        [
            "coords" => [43.3905, -3.2300],
            "popup"  => "<strong>Acantilados de la costa</strong>"
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
        "nombre" => "Raquel V.",
        "texto"  => "El Monte Cueto es una excursión fácil y con unas vistas preciosas."
    ],
    [
        "nombre" => "Gorka A.",
        "texto"  => "La Peña de Santullán es espectacular, perfecta para senderismo."
    ],
    [
        "nombre" => "Isabel F.",
        "texto"  => "Los acantilados de la costa son impresionantes, la mejor ruta para disfrutar del Cantábrico."
    ],
    [
        "nombre" => "Txema L.",
        "texto"  => "Castro-Urdiales no es solo mar y casco histórico, también tiene naturaleza increíble."
    ]
];
?>
