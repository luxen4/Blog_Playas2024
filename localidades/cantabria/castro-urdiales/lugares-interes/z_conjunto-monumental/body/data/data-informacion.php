<?php 
$header = [
  "titulo" => "🏰 Conjunto monumental de Castro-Urdiales",
  "descripcion" => "Descubre el Castillo-Faro, el Puente Medieval y la Ermita de Santa Ana: símbolos históricos frente al mar Cantábrico"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "El <strong>conjunto monumental de Castro-Urdiales</strong> es uno de los paisajes más emblemáticos del norte de España, donde historia y mar se funden en un entorno único.",

    "El <strong>Castillo-Faro</strong>, fortaleza medieval reconvertida en faro, se alza como guardián del puerto y es una de las construcciones defensivas mejor conservadas de Cantabria.",

    "El <strong>Puente Medieval</strong>, también conocido como puente romano, conecta con la <strong>Ermita de Santa Ana</strong>, situada sobre un islote rocoso en pleno mar Cantábrico.",

    "Juntos forman una postal única, junto a la iglesia gótica de Santa María, que convierte a Castro-Urdiales en un destino imprescindible."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/castillo-faro-castro-1.jpg",
        "alt" => "Vista del Castillo-Faro de Castro-Urdiales",
        "caption" => "Castillo-Faro de Castro-Urdiales",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-medieval-castro-1.jpg",
        "alt" => "Puente Medieval de Castro-Urdiales",
        "caption" => "Puente Medieval",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/ermita-santa-ana-castro-1.jpg",
        "alt" => "Ermita de Santa Ana sobre un islote en Castro-Urdiales",
        "caption" => "Ermita de Santa Ana",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información del conjunto monumental",
  "items" => [
    [
      "icono" => "🛡️",
      "titulo" => "Castillo-Faro",
      "descripcion" => "Fortaleza medieval del siglo XII, reconvertida en faro en el siglo XIX"
    ],
    [
      "icono" => "🌉",
      "titulo" => "Puente Medieval",
      "descripcion" => "Conocido como 'puente romano', une el casco histórico con la ermita"
    ],
    [
      "icono" => "⛪",
      "titulo" => "Ermita de Santa Ana",
      "descripcion" => "Pequeña ermita marinera sobre un islote, símbolo de la villa"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Actividades en el conjunto monumental",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Recorrer el puente medieval y acceder a la ermita" ],
    [ "icono" => "📸", "texto" => "Fotografiar la panorámica con el castillo, la iglesia y el mar" ],
    [ "icono" => "🏰", "texto" => "Visitar el Castillo-Faro y conocer su historia" ],
    [ "icono" => "🌊", "texto" => "Disfrutar de la brisa marina en un enclave histórico" ]
  ]
];
?>


<?php
// Mapa con los tres elementos del conjunto monumental
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-conjunto-monumental",
    "centro" => [43.3845, -3.2200],   // Centro aproximado
    "zoom"   => 17,
    "markers" => [
        [
            "coords" => [43.3846, -3.2205],
            "popup"  => "<strong>Castillo-Faro</strong>"
        ],
        [
            "coords" => [43.3847, -3.2208],
            "popup"  => "<strong>Puente Medieval</strong>"
        ],
        [
            "coords" => [43.3847, -3.2209],
            "popup"  => "<strong>Ermita de Santa Ana</strong>"
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
        "nombre" => "Elena M.",
        "texto"  => "El conjunto monumental es espectacular, la mezcla de mar e historia es única."
    ],
    [
        "nombre" => "Fernando L.",
        "texto"  => "El paseo hasta la ermita de Santa Ana es precioso, con vistas al Cantábrico."
    ],
    [
        "nombre" => "Mireia T.",
        "texto"  => "El Castillo-Faro es impresionante, muy bien conservado."
    ],
    [
        "nombre" => "Iván R.",
        "texto"  => "Un lugar icónico de Castro-Urdiales, perfecto para fotos y paseos."
    ]
];
?>
