<?php 
$header = [
  "titulo" => "🎉 Fiestas y tradiciones de Castro-Urdiales",
  "descripcion" => "Descubre las principales fiestas de Castro-Urdiales: Coso Blanco, Semana Santa y la fiesta marinera de San Andrés"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "Castro-Urdiales combina tradición marinera y fervor popular en sus <strong>fiestas más emblemáticas</strong>, que atraen cada año a miles de visitantes.",

    "El <strong>Coso Blanco</strong>, declarado de Interés Turístico Regional, es un desfile nocturno de carrozas con luz y color que llena de magia la noche del primer viernes de julio.",

    "La <strong>Semana Santa</strong> castreña es conocida por sus solemnes procesiones y la representación viviente de la Pasión, una de las más destacadas del norte de España.",

    "La <strong>fiesta de San Andrés</strong>, patrono de los marineros, se celebra el 30 de noviembre con tradiciones marineras, gastronomía y ambiente festivo junto al puerto."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/coso-blanco-castro-1.jpg",
        "alt" => "Carrozas iluminadas en el Coso Blanco de Castro-Urdiales",
        "caption" => "Coso Blanco",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/semana-santa-castro-1.jpg",
        "alt" => "Procesión de Semana Santa en Castro-Urdiales",
        "caption" => "Semana Santa",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/san-andres-castro-1.jpg",
        "alt" => "Fiesta de San Andrés en Castro-Urdiales",
        "caption" => "Fiesta de San Andrés",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de las fiestas",
  "items" => [
    [
      "icono" => "✨",
      "titulo" => "Coso Blanco",
      "descripcion" => "Desfile nocturno de carrozas, música y fuegos artificiales (julio)"
    ],
    [
      "icono" => "✝️",
      "titulo" => "Semana Santa",
      "descripcion" => "Procesiones y representación viviente de la Pasión (marzo-abril)"
    ],
    [
      "icono" => "⚓",
      "titulo" => "San Andrés",
      "descripcion" => "Fiesta marinera en honor al patrón de los pescadores (30 de noviembre)"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Actividades durante las fiestas",
  "items"  => [
    [ "icono" => "🎭", "texto" => "Disfrutar de los desfiles y carrozas del Coso Blanco" ],
    [ "icono" => "📸", "texto" => "Fotografiar las procesiones y actos de Semana Santa" ],
    [ "icono" => "🍲", "texto" => "Degustar platos marineros tradicionales en San Andrés" ],
    [ "icono" => "🎶", "texto" => "Vivir la música y el ambiente festivo en las calles" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Compartir en familia las celebraciones populares" ]
  ]
];
?>


<?php
// Mapa de localización de los principales espacios festivos
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-fiestas",
    "centro" => [43.3835, -3.2179],
    "zoom"   => 15,
    "markers" => [
        [
            "coords" => [43.3835, -3.2179],
            "popup"  => "<strong>Centro urbano - Coso Blanco</strong>"
        ],
        [
            "coords" => [43.3843, -3.2192],
            "popup"  => "<strong>Iglesia de Santa María - Semana Santa</strong>"
        ],
        [
            "coords" => [43.3837, -3.2183],
            "popup"  => "<strong>Puerto - Fiesta de San Andrés</strong>"
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
        "nombre" => "Maite G.",
        "texto"  => "El Coso Blanco es mágico, nunca había visto un desfile nocturno así."
    ],
    [
        "nombre" => "Julián R.",
        "texto"  => "La Semana Santa en Castro tiene una fuerza impresionante, muy emocionante."
    ],
    [
        "nombre" => "Clara V.",
        "texto"  => "San Andrés es una fiesta marinera auténtica, con mucho ambiente y tradición."
    ],
    [
        "nombre" => "Óscar L.",
        "texto"  => "Castro vive sus fiestas con mucha intensidad, merece la pena venir en esas fechas."
    ]
];
?>
