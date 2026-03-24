<?php 
$header = [
  "titulo" => "🌅 Miradores y rincones con vistas en Castro-Urdiales",
  "descripcion" => "Descubre los mejores puntos panorámicos de Castro-Urdiales: Mirador de Cotolino, Ermita de Santa Ana y el Rompeolas"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "Castro-Urdiales cuenta con rincones únicos para contemplar el <strong>mar Cantábrico</strong> y su entorno histórico.",

    "El <strong>Mirador de Cotolino</strong>, situado en el barrio residencial del mismo nombre, es un balcón natural con atardeceres espectaculares.",

    "La <strong>Ermita de Santa Ana</strong>, construida sobre un pequeño islote y unida a tierra por un puente de piedra, ofrece una de las imágenes más emblemáticas de la villa.",

    "El <strong>Rompeolas</strong>, que protege el puerto, permite pasear mar adentro y disfrutar de una panorámica completa del conjunto monumental."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cotolino-castro-1.jpg",
        "alt" => "Vista desde el Mirador de Cotolino",
        "caption" => "Mirador de Cotolino",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/ermita-santa-ana-castro-1.jpg",
        "alt" => "Ermita de Santa Ana en Castro-Urdiales",
        "caption" => "Ermita de Santa Ana",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/rompeolas-castro-1.jpg",
        "alt" => "Paseo marítimo en el rompeolas de Castro-Urdiales",
        "caption" => "Rompeolas de Castro-Urdiales",
        "fuente" => "",
        "fuente_texto" => ""
    ],
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de los miradores y rincones",
  "items" => [
    [
      "icono" => "🌅",
      "titulo" => "Mirador de Cotolino",
      "descripcion" => "Ubicado en la zona oeste, con jardines y vistas al atardecer sobre el Cantábrico"
    ],
    [
      "icono" => "⛪",
      "titulo" => "Ermita de Santa Ana",
      "descripcion" => "Pequeña ermita marinera en un islote unido por un puente de piedra al Castillo-Faro"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Rompeolas",
      "descripcion" => "Paseo marítimo que permite adentrarse en el mar y contemplar todo el conjunto monumental"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Actividades en los miradores y rincones",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Pasear por el rompeolas y el entorno marítimo" ],
    [ "icono" => "📸", "texto" => "Fotografiar el conjunto monumental desde distintos ángulos" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de los atardeceres en Cotolino o junto a la ermita" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Visitar en familia los espacios más emblemáticos frente al mar" ]
  ]
];
?>


<?php
// Mapa con los tres rincones con vistas
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-miradores",
    "centro" => [43.3837, -3.2185],   // Centro aproximado entre los tres puntos
    "zoom"   => 15,
    "markers" => [
        [
            "coords" => [43.3807, -3.2248],
            "popup"  => "<strong>Mirador de Cotolino</strong>"
        ],
        [
            "coords" => [43.3847, -3.2208],
            "popup"  => "<strong>Ermita de Santa Ana</strong>"
        ],
        [
            "coords" => [43.3841, -3.2186],
            "popup"  => "<strong>Rompeolas de Castro-Urdiales</strong>"
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
        "nombre" => "Ainhoa G.",
        "texto"  => "El paseo por el rompeolas es precioso, con vistas al puerto y a la iglesia."
    ],
    [
        "nombre" => "David P.",
        "texto"  => "La ermita de Santa Ana es una imagen única de Castro, sobre el mar."
    ],
    [
        "nombre" => "Lucía R.",
        "texto"  => "El mirador de Cotolino al atardecer es mágico, muy recomendable."
    ],
    [
        "nombre" => "Pablo C.",
        "texto"  => "Tres rincones diferentes pero todos con vistas espectaculares al Cantábrico."
    ]
];
?>
