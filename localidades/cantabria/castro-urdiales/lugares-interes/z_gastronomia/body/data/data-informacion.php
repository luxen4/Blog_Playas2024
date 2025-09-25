<?php 
$header = [
  "titulo" => "🍽️ Gastronomía típica de Castro-Urdiales",
  "descripcion" => "Sabores del mar Cantábrico y la tradición marinera: anchoas, marmita de bonito y pintxos en Castro-Urdiales"
];
?>


<?php 
$intro = [
  "parrafos" => [
    "La gastronomía de Castro-Urdiales está marcada por su <strong>tradición marinera</strong> y la calidad de los productos del mar Cantábrico.",

    "Las <strong>anchoas</strong>, elaboradas de forma artesanal, son el producto estrella y uno de los manjares más reconocidos de la villa.",

    "Otro plato emblemático es la <strong>marmita de bonito</strong>, un guiso marinero típico preparado con bonito del norte, patatas, cebolla y pimientos.",

    "La tradición de los <strong>pintxos</strong> completa la experiencia gastronómica, con bares y tabernas que ofrecen pequeñas delicias acompañadas de vinos y txakoli."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/anchoas-castro-1.jpg",
        "alt" => "Anchoas del Cantábrico en Castro-Urdiales",
        "caption" => "Anchoas de Castro-Urdiales",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/marmita-bonito-castro-1.jpg",
        "alt" => "Marmita de bonito, plato típico de Castro-Urdiales",
        "caption" => "Marmita de bonito",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/pintxos-castro-1.jpg",
        "alt" => "Pintxos variados en Castro-Urdiales",
        "caption" => "Pintxos en tabernas locales",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información gastronómica",
  "items" => [
    [
      "icono" => "🐟",
      "titulo" => "Anchoas",
      "descripcion" => "Producto estrella, elaboradas artesanalmente con pescado del Cantábrico"
    ],
    [
      "icono" => "🍲",
      "titulo" => "Marmita de bonito",
      "descripcion" => "Plato marinero tradicional, guiso de bonito con patatas y verduras"
    ],
    [
      "icono" => "🥖",
      "titulo" => "Pintxos",
      "descripcion" => "Tapas y pequeñas raciones en bares y tabernas del casco histórico"
    ]
  ]
];
?>


<?php 
$actividades = [
  "titulo" => "✨ Experiencias gastronómicas",
  "items"  => [
    [ "icono" => "🍴", "texto" => "Degustar anchoas artesanales en conserveras locales" ],
    [ "icono" => "🥘", "texto" => "Probar la marmita de bonito en fiestas y restaurantes" ],
    [ "icono" => "🍷", "texto" => "Acompañar pintxos con txakoli o vinos locales" ],
    [ "icono" => "🛍️", "texto" => "Comprar productos típicos en mercados y tiendas" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar de la gastronomía en bares familiares del casco histórico" ]
  ]
];
?>


<?php
// Mapa de localización gastronómica (zona de bares y restaurantes en Castro)
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-gastronomia",
    "centro" => [43.3828, -3.2185],
    "zoom"   => 16,
    "markers" => [
        [
            "coords" => [43.3828, -3.2185],
            "popup"  => "<strong>Casco histórico - Ruta de pintxos</strong>"
        ],
        [
            "coords" => [43.3832, -3.2190],
            "popup"  => "<strong>Restaurantes de pescado y marmita de bonito</strong>"
        ],
        [
            "coords" => [43.3837, -3.2175],
            "popup"  => "<strong>Tiendas de conservas y anchoas artesanales</strong>"
        ]
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información gastronómica",
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
        "nombre" => "Ane G.",
        "texto"  => "Las anchoas de Castro son las mejores que he probado, puro Cantábrico."
    ],
    [
        "nombre" => "Marcos L.",
        "texto"  => "La marmita de bonito es un plato auténtico, tradición marinera en estado puro."
    ],
    [
        "nombre" => "Silvia P.",
        "texto"  => "Los pintxos en el casco viejo son una delicia, cada bar tiene su especialidad."
    ],
    [
        "nombre" => "Javier R.",
        "texto"  => "Comer en Castro-Urdiales es parte esencial de la visita, calidad y sabor en cada rincón."
    ]
];
?>
