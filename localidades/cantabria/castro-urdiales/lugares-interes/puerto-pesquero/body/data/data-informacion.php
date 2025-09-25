<?php 
$header = [
  "titulo" => "⚓ Puerto Pesquero",
  "descripcion" => "Puerto tradicional de Castro-Urdiales, centro de la actividad pesquera y con encanto marítimo"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Puerto Pesquero de Castro-Urdiales</strong> es un enclave histórico donde se concentra la actividad pesquera de la villa y se aprecia la tradición marinera de la región.",

    "Rodeado de embarcaciones de pesca, muelles y redes, el puerto ofrece un ambiente auténtico y pintoresco, ideal para pasear y observar la vida marítima cotidiana.",

    "Es un lugar de gran importancia cultural y económica para Castro-Urdiales, donde se puede aprender sobre la pesca artesanal y la gastronomía del mar Cantábrico.",

    "El entorno permite combinar la visita con otros puntos de interés cercanos, como el Paseo Marítimo, el casco antiguo y la Iglesia de Santa María."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-pesquero-castro-1.jpg",
        "alt" => "Vista del Puerto Pesquero de Castro-Urdiales con barcos amarrados",
        "caption" => "Puerto Pesquero",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-pesquero-castro-2.jpg",
        "alt" => "Actividad pesquera en el puerto de Castro-Urdiales",
        "caption" => "Vida pesquera",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-pesquero-castro-1.jpg",
        "alt" => "Barcos de pesca en el Puerto Pesquero",
        "caption" => "Puerto Pesquero",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-pesquero-castro-2.jpg",
        "alt" => "Embarcaciones y muelles en el puerto de Castro-Urdiales",
        "caption" => "Muelle y embarcaciones",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-pesquero-castro-3.jpg",
        "alt" => "Atardecer en el Puerto Pesquero de Castro-Urdiales",
        "caption" => "Atardecer en el puerto",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Puerto Pesquero",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Situado junto al casco antiguo, con acceso al Paseo Marítimo y al puerto deportivo"
    ],
    [
      "icono" => "⚓",
      "titulo" => "Actividad principal",
      "descripcion" => "Pesca artesanal y comercial, embarcaciones y actividad portuaria"
    ],
    [
      "icono" => "🌟",
      "titulo" => "Atractivo principal",
      "descripcion" => "Ambiente marinero auténtico y vistas a los barcos y muelles"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Barcos pesqueros, muelles, lonja y gastronomía local"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "⚓ Actividades en el Puerto Pesquero",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Pasear por los muelles y observar la actividad pesquera" ],
    [ "icono" => "📸", "texto" => "Fotografía de barcos, redes y escenas marítimas" ],
    [ "icono" => "🍴", "texto" => "Degustar pescado fresco y mariscos locales" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Visitar con la familia y aprender sobre la pesca tradicional" ]
  ]
];
?>

<?php
// Configuración del mapa del Puerto Pesquero en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puerto-pesquero",
    "centro" => [43.3842, -3.2190],   // Coordenadas aproximadas del puerto pesquero
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3842, -3.2190],  
        "popup"  => "<strong>Puerto Pesquero - Castro-Urdiales</strong>"
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
        "nombre" => "Marta S.",
        "texto"  => "Me encanta pasear por el puerto y ver los barcos de pesca, muy auténtico."
    ],
    [
        "nombre" => "Luis A.",
        "texto"  => "Un lugar con mucho encanto, especialmente al atardecer."
    ],
    [
        "nombre" => "Carmen T.",
        "texto"  => "Ideal para conocer la tradición marinera de Castro-Urdiales."
    ],
    [
        "nombre" => "Jon E.",
        "texto"  => "Perfecto para fotografiar barcos, redes y la vida del puerto."
    ]
];
?>

