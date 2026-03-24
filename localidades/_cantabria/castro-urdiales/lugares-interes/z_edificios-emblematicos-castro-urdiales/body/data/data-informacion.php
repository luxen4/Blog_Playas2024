<?php 
$header = [
  "titulo" => "🏛️ Edificios emblemáticos de Castro-Urdiales",
  "descripcion" => "Descubre el patrimonio arquitectónico de Castro-Urdiales: la Iglesia gótica de Santa María, el Palacio modernista de Ocharan y el Castillo-Faro de Santa Ana"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "Castro-Urdiales cuenta con un rico patrimonio monumental que combina tradición marinera con ejemplos singulares de arquitectura gótica, modernista y militar.",

    "La <strong>Iglesia de Santa María de la Asunción</strong>, símbolo del gótico en Cantabria, se alza junto al mar como un emblema de la villa marinera.",

    "El <strong>Palacio de Ocharan</strong>, con su estilo modernista y sus jardines amurallados, representa la elegancia y la riqueza cultural de principios del siglo XX.",

    "El <strong>Castillo-Faro de Santa Ana</strong>, fortaleza medieval con faro integrado, completa este triángulo monumental en un enclave único frente al Cantábrico."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/iglesia-santa-maria-de-la-asuncion-castro-urdiales-cantabria-1.jpg",
        "alt" => "Vista de la Iglesia de Santa María de Castro-Urdiales",
        "caption" => "Iglesia de Santa María de la Asunción",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/palacio-ocharan-castro-1.jpg",
        "alt" => "Fachada del Palacio de Ocharan en Castro-Urdiales",
        "caption" => "Palacio de Ocharan",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/castillo-faro-santa-ana-castro-1.jpg",
        "alt" => "Castillo-Faro de Santa Ana en Castro-Urdiales",
        "caption" => "Castillo-Faro de Santa Ana",
        "fuente" => "",
        "fuente_texto" => ""
    ],
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de los edificios emblemáticos",
  "items" => [
    [
      "icono" => "⛪",
      "titulo" => "Iglesia de Santa María",
      "descripcion" => "Construida entre los siglos XIII y XV, ejemplo del gótico clásico en Cantabria"
    ],
    [
      "icono" => "🏰",
      "titulo" => "Palacio de Ocharan",
      "descripcion" => "Residencia modernista de principios del siglo XX, rodeada de jardines y murallas"
    ],
    [
      "icono" => "🗼",
      "titulo" => "Castillo-Faro de Santa Ana",
      "descripcion" => "Fortaleza medieval con faro integrado, símbolo del pasado defensivo de Castro-Urdiales"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Qué hacer en torno a los edificios emblemáticos",
  "items"  => [
    [ "icono" => "👣", "texto" => "Recorrer el casco histórico de Castro-Urdiales" ],
    [ "icono" => "📸", "texto" => "Fotografiar la iglesia gótica y el conjunto monumental junto al mar" ],
    [ "icono" => "📚", "texto" => "Descubrir la historia local a través de visitas guiadas" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de las vistas al atardecer desde el entorno del puerto" ]
  ]
];
?>


<?php
// Mapa con los tres edificios emblemáticos
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-edificios-emblematicos",
    "centro" => [43.3837, -3.2185],   // Centro aproximado entre los tres puntos
    "zoom"   => 16,
    "markers" => [
        [
            "coords" => [43.3843, -3.2192],
            "popup"  => "<strong>Iglesia de Santa María de la Asunción</strong>"
        ],
        [
            "coords" => [43.3825, -3.2165],
            "popup"  => "<strong>Palacio de Ocharan</strong>"
        ],
        [
            "coords" => [43.3845, -3.2204],
            "popup"  => "<strong>Castillo-Faro de Santa Ana</strong>"
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
        "nombre" => "Clara H.",
        "texto"  => "El conjunto monumental junto al puerto es impresionante, una postal de Castro-Urdiales."
    ],
    [
        "nombre" => "Raúl V.",
        "texto"  => "La iglesia gótica es preciosa, y el castillo-faro al lado del mar es único."
    ],
    [
        "nombre" => "Elena M.",
        "texto"  => "El Palacio de Ocharan llama mucho la atención, aunque solo se pueda ver por fuera."
    ],
    [
        "nombre" => "Javier T.",
        "texto"  => "Un recorrido imprescindible para conocer la historia y arquitectura de Castro."
    ]
];
?>
