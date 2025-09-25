<?php 
$header = [
  "titulo" => "🌳 Parque Amestoy",
  "descripcion" => "Parque urbano en Castro-Urdiales con zonas verdes, áreas de juego y espacios para pasear"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Parque Amestoy</strong> es uno de los principales pulmones verdes de Castro-Urdiales, ideal para disfrutar de la naturaleza dentro de la ciudad.",

    "Con amplias zonas ajardinadas, senderos peatonales y áreas de descanso, es un lugar perfecto para pasear, hacer deporte o simplemente relajarse.",

    "El parque cuenta con instalaciones para niños, zonas de picnic y espacios para eventos al aire libre, siendo muy popular entre familias y visitantes.",

    "Su ubicación cercana al centro permite combinar la visita con otros puntos de interés de la villa, como el puerto o el casco histórico."
  ],
  "imagenes" => [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/parque-amestoy-castro-1.jpg",
        "alt" => "Vista general del Parque Amestoy en Castro-Urdiales",
        "caption" => "Parque Amestoy",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/parque-amestoy-castro-2.jpg",
        "alt" => "Zona de juegos infantiles en el Parque Amestoy",
        "caption" => "Área de juegos",
        "fuente" => "",
        "fuente_texto" => ""
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/parque-amestoy-castro-1.jpg",
        "alt" => "Vista general del Parque Amestoy",
        "caption" => "Parque Amestoy",
        "fuente" => "https://turismodecastro.com/",
        "fuente_texto" => "turismodecastro.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/parque-amestoy-castro-2.jpg",
        "alt" => "Senderos y zonas verdes en el Parque Amestoy",
        "caption" => "Senderos y zonas verdes",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/parque-amestoy-castro-3.jpg",
        "alt" => "Familias disfrutando en el Parque Amestoy",
        "caption" => "Espacios para toda la familia",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Parque Amestoy",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Situado cerca del centro de Castro-Urdiales, con fácil acceso desde la villa"
    ],
    [
      "icono" => "🌿",
      "titulo" => "Entorno",
      "descripcion" => "Zonas verdes, jardines y árboles autóctonos"
    ],
    [
      "icono" => "🏞️",
      "titulo" => "Atractivo principal",
      "descripcion" => "Paseo, deporte, relax y actividades al aire libre"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Áreas de juego, senderos, bancos, zonas de picnic y eventos culturales"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌳 Actividades en el Parque Amestoy",
  "items"  => [
    [ "icono" => "🚶", "texto" => "Pasear por los senderos y jardines" ],
    [ "icono" => "🏃", "texto" => "Hacer deporte al aire libre" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Disfrutar en familia en zonas de juegos" ],
    [ "icono" => "🍃", "texto" => "Relajarse y disfrutar de la naturaleza" ],
    [ "icono" => "📸", "texto" => "Fotografía de jardines, árboles y áreas recreativas" ]
  ]
];
?>

<?php
// Configuración del mapa del Parque Amestoy en Castro-Urdiales
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-parque-amestoy",
    "centro" => [43.3835, -3.2215],   // Coordenadas aproximadas del Parque
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.3835, -3.2215],  
        "popup"  => "<strong>Parque Amestoy - Castro-Urdiales</strong>"
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
        "nombre" => "Laura M.",
        "texto"  => "Perfecto para pasear con niños y disfrutar de la naturaleza dentro de la ciudad."
    ],
    [
        "nombre" => "Carlos P.",
        "texto"  => "Zonas verdes muy bien cuidadas y ambiente relajante."
    ],
    [
        "nombre" => "Sofía R.",
        "texto"  => "Ideal para correr o pasear al atardecer."
    ],
    [
        "nombre" => "Miguel A.",
        "texto"  => "Un remanso de tranquilidad cerca del centro urbano."
    ]
];
?>

