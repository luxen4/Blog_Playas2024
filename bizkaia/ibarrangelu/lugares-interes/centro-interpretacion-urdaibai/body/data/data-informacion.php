<?php 
$header = [
  "titulo" => "🌿 Centro de Interpretación de Urdaibai",
  "descripcion" => "La Torre Madariaga en Busturia es el Centro de la Reserva de la Biosfera de Urdaibai, un espacio interactivo donde descubrir la riqueza natural y cultural de esta joya de Bizkaia."
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Centro de Interpretación de la Reserva de la Biosfera de Urdaibai</strong>, conocido como <em>Torre Madariaga</em>, se encuentra en el municipio de Busturia.",
    "Es el lugar perfecto para conocer la <strong>biodiversidad</strong>, los ecosistemas y la historia de la reserva natural más importante de Bizkaia.",
    "El centro cuenta con exposiciones interactivas, audiovisuales y actividades educativas para todas las edades.",
    "Además, desde sus instalaciones se disfrutan de vistas privilegiadas a los humedales y al entorno de Urdaibai."
  ],
  "imagenes" => [
    [
      "src" => "https://www.euskadi.eus/contenidos/recurso_tecnico/centros_de_interpretacion/es_def/adjuntos/torre_madariaga.jpg",
      "alt" => "Centro de Interpretación de Urdaibai - Torre Madariaga",
      "caption" => "Torre Madariaga, centro de la Reserva de Urdaibai",
      "fuente" => "https://www.euskadi.eus",
      "fuente_texto" => "turismo.euskadi.eus"
    ],
    [
      "src" => "https://www.urdaibai.org/_images/torremadariaga.jpg",
      "alt" => "Exposiciones en Torre Madariaga",
      "caption" => "Exposiciones interactivas en el Centro de Urdaibai",
      "fuente" => "https://www.urdaibai.org",
      "fuente_texto" => "urdaibai.org"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/8DLpOQfZa1k", 
    "titulo" => "Video del Centro de la Reserva de Urdaibai"
  ]
];
?>


<?php
$galeria_imagenes = [
    [
        "src" => "https://www.bizkaia.eus/contenidos/informacion/urdaibai_biosfera/es_def/images/torremadariaga.jpg",
        "alt" => "Vista exterior de Torre Madariaga",
        "caption" => "Vista del edificio Torre Madariaga en Busturia",
        "fuente" => "https://www.bizkaia.eus",
        "fuente_texto" => "bizkaia.eus"
    ],
    [
        "src" => "https://static.flickr.com/2806/4508527810_aa0c8bb6e4_b.jpg",
        "alt" => "Interior del Centro de Interpretación de Urdaibai",
        "caption" => "Sala de exposiciones en el interior del centro",
        "fuente" => "https://flickr.com",
        "fuente_texto" => "flickr.com"
    ],
    [
      "src" => "https://www.urdaibaibirdcenter.org/images/galeria/torremadariaga_1.jpg",
      "alt" => "Actividades en Torre Madariaga",
      "caption" => "Actividades educativas en el Centro de Interpretación",
      "fuente" => "https://www.urdaibaibirdcenter.org",
      "fuente_texto" => "urdaibaibirdcenter.org"
    ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información del Centro de Interpretación de Urdaibai",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Torre Madariaga, Busturia - Bizkaia"
    ],
    [
      "icono" => "⏰",
      "titulo" => "Horario",
      "descripcion" => "Generalmente de martes a domingo (consultar temporada)"
    ],
    [
      "icono" => "🎟️",
      "titulo" => "Entradas",
      "descripcion" => "Acceso gratuito o con coste reducido para algunas actividades"
    ],
    [
      "icono" => "🚌",
      "titulo" => "Acceso",
      "descripcion" => "Se puede llegar en coche o transporte público (Euskotren: Busturia)"
    ],
    [
      "icono" => "🌿",
      "titulo" => "Enfoque",
      "descripcion" => "Educación ambiental, biodiversidad y sostenibilidad"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🎯 Actividades en el Centro de Urdaibai",
  "items"  => [
    [ "icono" => "📚", "texto" => "Visitar exposiciones interactivas" ],
    [ "icono" => "🎥", "texto" => "Disfrutar de audiovisuales sobre Urdaibai" ],
    [ "icono" => "👨‍👩‍👧‍👦", "texto" => "Participar en talleres familiares" ],
    [ "icono" => "🌄", "texto" => "Observar el paisaje de la Reserva de Urdaibai" ]
  ]
];
?>

<?php
// Configuración del mapa del Centro de Interpretación de Urdaibai
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-centro-urdaibai",
    "centro" => [43.3839, -2.6967],   // Coordenadas Torre Madariaga
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.3839, -2.6967],
        "popup"  => "<strong>Centro de Interpretación de Urdaibai - Torre Madariaga</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 25 57 75",
    "enlace" => "tel:+34946255775"
  ],
  "web"      => [
    "texto" => "www.urdaibai.org",
    "url"   => "https://www.urdaibai.org"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Iñaki M.",
        "texto"  => "Muy interesante para entender la riqueza natural de Urdaibai."
    ],
    [
        "nombre" => "Lucía P.",
        "texto"  => "Ideal para ir en familia, los niños disfrutan mucho con las actividades."
    ],
    [
        "nombre" => "Javier G.",
        "texto"  => "Una visita imprescindible antes de recorrer la Reserva de Urdaibai."
    ],
    [
        "nombre" => "Nerea L.",
        "texto"  => "Exposiciones modernas y didácticas, recomendable al 100%."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3839&lon=-2.6967&zoom=10"; 
?>  
